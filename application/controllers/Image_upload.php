<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form',
            'url'
        ));
        
    }
    public function index()
    {
       
        $this->load->view('image_upload', array(
            'error' => ' '
        ));
    }
    
    public function do_upload()
    {
        
        $prodect_name = $this->input->post('prodect_name');
        $price        = $this->input->post('price');
        $category     = $this->input->post('category');
        
        // $path = FCPATH.'tmp/';
        $config['upload_path']   = FCPATH . 'tmp';
        $config['allowed_types'] = '*';
       
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
   
            
        if (!$this->upload->do_upload('userfile')) {
            $error = array(
                'error' => $this->upload->display_errors()
            );

            
            // $this->load->view('upload_form', $error);
        } else {
            $upload_data = $this->upload->data();
            $data = array(
            'prodect_name' => $prodect_name ,
            'price'=>  $price,
            'category'=> $category,
            'prodect_image' => $upload_data['file_name']
            );
           
            $this->db->insert('prodect', $data);
            echo "well done";
        
             // return $this->load->view('index');
           
        }
    }


       


}
