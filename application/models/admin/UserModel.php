<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()  
  {  
     //data is retrive from this query  
     return $this->db->select('*')->get('user_login')->result(); 
  } 


public function getProdect()  
  {  
     //data is retrive from this query  
     return $this->db->select('*')->get('prodect')->result(); 
  } 

  //Get any images
  public function getImageUrl($img_name = '') 
  {
    if (!empty($img_name)) 
    {
      $path_image = FCPATH .'tmp/'.$img_name;
      
      if (file_exists($path_image))
      {

        $path_url = base_url() . 'tmp/'.$img_name;
        $image_url = $path_url;
      }else
      {
        $image_url = base_url() . 'tmp/default.jpeg';
      }
    } 
    else
    {
      $image_url = base_url() . 'tmp/default.jpeg';
    }
    return $image_url;
}

   public function getProdectName($image_name)  
   {  
     if (!empty($image_name))
     {
      return  $this->db->select('prodect_name')->where('prodect_image',$image_name)->get('prodect')->row();

     }
   }

   
   public function getCategory($image_name)  
   {  
     if (!empty($image_name))
     {
      return  $this->db->select('category')->where('prodect_image',$image_name)->get('prodect')->row();

     }
   }

   public function getPrices($image_name)  
   {  
     if (!empty($image_name))
     {
         return $this->db->select('price')->where('prodect_image',$image_name)->get('prodect')->row();

   


     }
   }

   public function delete($id)  
   {  
     if (!empty($id))
     {
        
        return $this->db->delete('user_login', ['PersonID' => $id]);

     }
   }

}
