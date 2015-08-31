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
	public function logica()
	{
        $step = json_decode($this->input->post('step'));
        if($step == 1)
        {
            $k = rand(0,4);
            $arr = array(1,3,5,7,9);
            echo json_encode($arr[$k]);
        }
	}
}