<?php  
   class Users extends CI_Controller  
   {  


      public function __construct() 
      {
        parent::__construct();
        if (!$this->session->userdata('id')) {
          return redirect('admin/Admin_login/index');
        }
        $this->load->model('admin/UserModel', 'user');
        $this->load->helper('form');
      }
      public function index()  
      {  
          //load the database  
         $this->load->database();  
         //load the model  
          
         //load the method of model 
          $users = $this->user->getAll();            
         //return the data in view  
         $this->load->view('admin/users_view', compact('users'));  
      }  
      
        public function edit()
        {
            
        }  
        public function delete()
         {
            $id = $this->input->post('id');
            $result=$this->user->delete($id);
           ;
            return $this->_falshAndRedirect($result,
              "user Deleted Successully.",
              "user Failed To Delete, Please Try Again."
            );
           }  

        private function _falshAndRedirect($successful, $successMessage, $failureMessage)
         {
         
          if ($successful) 
          {
            $this->session->set_flashdata('feedback', $successMessage);
            $this->session->set_flashdata('feedback_class', 'alert-success');
          } else
           {
            $this->session->set_flashdata('feedback', $failureMessage);
            $this->session->set_flashdata('feedback_class', 'alert-danger');
          }
        return redirect('admin/Users/index');
        }
}
?>  