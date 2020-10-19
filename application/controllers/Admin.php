<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();		
	}
	
	public function index() {
		if (empty($this->session->userdata('user')) || $this->session->userdata('user')!='admin') {
			$this->session->sess_destroy();
			redirect('login');
		}
		else {
			$this->load->view('admin/dashboard');
		}		
	}
}
?>