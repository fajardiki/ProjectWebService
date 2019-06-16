<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class C_permohonan extends REST_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Desa_model', 'desa');
	}


	public function index_get() {

		$username = $this->uri->segment(3);

		$desa = $this->desa->getPermohonan($username);

		echo json_encode(array('result'=>$desa));
	}
}
