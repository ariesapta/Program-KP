<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login', FALSE);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */