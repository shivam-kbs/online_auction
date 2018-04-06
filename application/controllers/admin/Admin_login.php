<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_login extends CI_Controller 
{

  public function index()
  {
    
        if ($this->session->userdata('id')) 
        {
            return redirect('admin/Admin_login/dashboard');
        }
        $this->load->helper('form');
        $this->load->view('admin/login');
  }

  public function check()
  {

    	$this->load->library('form_validation');

		//validation_rules
		$this->form_validation->set_rules('email', 'email', 'required|alpha|trim');
		$this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() == FALSE)
        {
        	
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('admin/loginmodel');
            $id = $this->loginmodel->login_valid($email, $password);
           
            if ($id) 
            {

                $this->session->set_userdata('id', $id);
                // $this->session->set_userdata('id', $login_id);
                return redirect('admin/Admin_login/dashboard');
                //credentials valid, login user.
            } 
            else
            {
                // $this->session->set_flashdata('login_failed','Invalid Username/Password.');
                return redirect('admin/Admin_login/index','refresh');
            }
        } 
        else
        {
            //Failed.

            $this->load->view('admin/login');
            // echo validation_errors();
        }
    }    

        public function dashboard()
        {
        	$this->load->view('admin/dashboard');
        }

        public function logout()
        {
        $this->session->unset_userdata('id');
        return redirect('admin/Admin_login/index');
        }
    
}


