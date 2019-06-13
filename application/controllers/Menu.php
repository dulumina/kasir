<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct() {
		parent:: __construct();
 		$login = $this->session->userdata('login');
	 		if ($login == "" ){
	 			redirect(base_url ('Auth'));
 		}
	}

	public function index() {
		$mainmenu = $this->db->get_where('menuSlidebar', array('isMainMenu' => '0'))->result();
		$i=0;
		foreach ($mainmenu as $main) {
			$query = $this->db->get_where('menuSlidebar', array('isMainMenu' => $main->kode));
			if ($query->num_rows() > 0) {
				$submemu = $query->result();
				$mainmenu[$i]->submenu = $submemu;
			} else { $mainmenu[$i]->submenu = ''; }
			$i++;
		}
		$data['menu']= $mainmenu;

		$this->load->view('layouts/header');
		$this->load->view('seting/menu',$data);
		$this->load->view('layouts/fother');
	}
}
