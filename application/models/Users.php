<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }
    public function profile_insert($new)
    { 
           
        if($this->db->insert('users', $new))
        {
            return true;
        }
        return false;

    }
    public function check_user($arrNew)
    {
        $objResult = $this->db->query('SELECT * FROM users WHERE username="'.$arrNew['username'].'" && password="'.sha1($arrNew['password']).'"');
    
        if($objResult->num_rows())
        {
            return true;
        }
        return false;
    }
}
