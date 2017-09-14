<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
    $this->load->helper('url');
    $this->load->view('index');
	}

  public function login(){
    $this->load->view('login/index');
  }


}
