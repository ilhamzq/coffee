<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petani extends CI_Controller {

	public function __construct() {
		parent::__construct();		
	}
	
	public function index() {
		if (empty($this->session->userdata('user'))) {
			$this->session->sess_destroy();
			redirect('login');
		} else {		
			if ($this->session->userdata('user')=='admin') {
				$this->load->view('admin/petani');
			}			
			if ($this->session->userdata('user')=='petani') {
				$this->load->view('petani/dashboard');
			}
		}
	}
}
?>