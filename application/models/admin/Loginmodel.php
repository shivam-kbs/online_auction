<?php
class Loginmodel extends CI_Model
{

    public 
        function __contruct()
    {
        parent::__contruct();
    }
    public 
    function login_valid($email, $password) {
        $result = $this->db->where(['email' => $email, 'password' => $password])
            ->get('admin');
        if ($result->num_rows()) {
             return $result->row()->id;
            // return TRUE;
        } else {
            return FALSE;
        }
    }

    
}