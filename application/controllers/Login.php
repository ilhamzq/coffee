<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->load->view('login');
	}

	public function in() {
		if (empty($this->input->post('user')) || empty($this->input->post('pass'))) {
			redirect('login');
			exit;
		}
		
		if ($this->input->post('user')=='admin' && $this->input->post('pass')=='admin') {
			$this->session->set_userdata('user', 'admin');
			$result = '0#admin';
		}
		else if ($this->input->post('user')=='petani' && $this->input->post('pass')=='petani') {
			$this->session->set_userdata('user', 'petani');
			$this->session->set_userdata('nama', 'Petani');
			$result = '0#petani';
		}
		else if ($this->input->post('user')=='kedai' && $this->input->post('pass')=='kedai') {
			$this->session->set_userdata('user', 'kedai');
			$this->session->set_userdata('nama', 'Kedai');
			$result = '0#kedai';
		} else {
			$this->session->set_userdata('user', '');
			$result = '1#Cek Username Dan Password';
		}

		echo json_encode($result);
	}

	public function out() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>