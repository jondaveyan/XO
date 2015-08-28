<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}
	public function signin()
	{
		$arrNew = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')       
        );
        $this->load->model('Users');
        $usercheck = $this->Users->check_user($arrNew);
        if($usercheck)
        {
        	$this->load->view('homepage');
    	}
    	else
    	{
    		$data['msg'] = "wrong username or password";
    		$this->load->view('login',$data);
    	}
    	


	}
}