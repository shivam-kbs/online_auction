<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form extends CI_Controller 
{

  public function index()
  {
    return  $this->load->view('user_register/register');
  }


  public function register() 
  {
    // print_r($this->input->post());
  $this->load->library('form_validation');
  $this->form_validation->set_rules('user_name', 'Username', 'required');
   $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[user_login.user_email]');
  $this->form_validation->set_rules('user_password', 'Password', 'required');

  if($this->form_validation->run() == FALSE) {
    $this->load->view('user_register/register');
  } else { 
  $user_name = $this->input->post('user_name');
  $user_email = $this->input->post('user_email');
  $user_password =($this->input->post('user_password'));
  $options = ['cost' => 12];
  $user_password= password_hash($user_password, PASSWORD_DEFAULT, $options);
  $data = array( 
    'user_name'=> $user_name,
    'user_email'=> $user_email,
    'user_password'=> $user_password
    );
    $this->db->insert('user_login', $data);

     redirect(base_url() . 'auth/form/login');

    }
  }
   


// Check for user login process
  public function login() 
  {

    $this->load->library('form_validation');
    $this->form_validation->set_rules('user_email', 'Email', 'trim|required');
    $this->form_validation->set_rules('user_password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) 
    {
      return $this->load->view('user_register/login');
    } 
   
    $user_email = $this->input->post('user_email');
    $user_password = $this->input->post('user_password');

    $q = $this->db->select(['user_password'])
        ->where('user_email', $user_email)
        ->get('user_login');
        if ($q->num_rows()) 
        {
          $hash= $q->row()->user_password;
          if(password_verify($user_password, $hash)) 
            {
              redirect(base_url() .'Auction/index');
              // return TRUE;
            }
            else {
           redirect(base_url() .'auth/form/login');
            }
        }

        else {
           redirect(base_url() . 'auth/form/login');
        }

  }

//     public function forget()
//   {
//       $this->load->view('user_register/reset_password');
//   }

//   public function validate_credentials($email)
//   {
//     $user = $this->db->get_where('user_login', ['user_email' => $email])->num_rows();
    
//     if($user <= 0)
//     {
//       $this->form_validation->set_message('validate_credentials', 'This email doesnt exist.');
//       return false;

//     }

//     return true;
//   }

//     public function recover_password()
//     {
//       $this->load->library('form_validation');
//       $this->form_validation->set_rules('email', 'Email', 'required|callback_validate_credentials');
//       if($this->form_validation->run() == FALSE) 
//       {
//         $this->load->view('user_register/forgetpaasword');
//       }
//       else{


//       }
      
// }
}