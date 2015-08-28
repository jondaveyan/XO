<?php
/**
 * Created by PhpStorm.
 * User: imNOTme
 * Date: 17/08/15
 * Time: 18:25
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {
    public function reg()
    {
        $arrNew = array(
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))         
        );
        $this->load->model('Users');
        $bCheck = $this->Users->profile_insert($arrNew);
        if($bCheck !== false)
        {
            $this->load->view('list');
        }
     }

}