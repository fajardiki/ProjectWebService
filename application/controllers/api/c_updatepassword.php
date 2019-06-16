<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class C_updatepassword extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Desa_model', 'desa');
	}

	public function index_post() {

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$sql = $this->desa->update_password($username,$password);
	}
}
