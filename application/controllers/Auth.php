<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		if (!empty($this->session->userdata('login'))) {
			redirect(base_url());
		}else {
			$this->load->view('auth/login');
		}
	}

	function login()	{
			$login 		= $this->input->post('login');
			$password = $this->input->post('password');
			$user 		= $this->db->get_where('user', $this->input->post())->row_array();
			print_r($user);

			if ($user) {
				if ($user['status'] == 1) {
						$data = [
							'nama'			=> $user['nama'],
							'login' 		=> $user['login'],
							'kelompok'	=> $user['kelompok'],
							'tingkatan' => $user['tingkatan']
						];

						$this->session->set_userdata($data);
						redirect('Dashboard');

				}else{
					$this->session->set_flashdata('message', 'User tidak aktif');
						redirect('Auth');
				}

			}else{
				$this->session->set_flashdata('message', 'User tidak terdaftar!');
				redirect('Auth');
			}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('Auth');
	}
}
