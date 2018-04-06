<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auction extends CI_Controller 
{

	public function index()
	{

		 $this->load->model('admin/UserModel', 'user');
         $get = $this->user->getProdect();
         // $data['time'] = carbon()->now()->toTimeString();
         // $get= $this->db->select('prodect_image')->where('prodect_id', $id)->get('prodect')->row();
  		 $data['prodect_data'] =$get; 
			 
		  $this->load->view('index',$data);
		
    }
    
		
    
}    