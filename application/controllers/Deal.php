<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deal extends CI_Controller 
{

	public function index()
	{     
		 $this->load->model('admin/UserModel', 'user');
         $get = $this->user->getProdect();
         // $data['time'] = carbon()->now()->toTimeString();
          $get= $this->db->select('prodect_image')->where('prodect_id', '1')->get('prodect')->row();
        
  		 $data['prodect_image'] =$get->prodect_image; 
        
       
		 $this->load->view('deal',  $data);	 	
    }

    //     public function show()
    // {
 
    // }


}    
    