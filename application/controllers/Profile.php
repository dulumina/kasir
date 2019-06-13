<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent:: __construct();
 		$login = $this->session->userdata('login');
	 		if ($login == "" ){
	 			redirect(base_url ('Auth'));
 		}
	}

	public function index() {
		$this->load->view('layouts/header');
		$this->load->view('user/profile');
		$this->load->view('layouts/fother');
	}
}
