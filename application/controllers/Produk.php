<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct() {
		parent::__construct();		
	}
	
	public function index() {
		if (empty($this->session->userdata('user'))) {
			$this->session->sess_destroy();
			redirect('login');
		} else {		
			if ($this->session->userdata('user')=='admin') {
				$this->load->view('admin/produk');
			}			
			if ($this->session->userdata('user')=='petani') {
				$this->load->view('petani/produk');
			}			
			if ($this->session->userdata('user')=='kedai') {
				$this->load->view('kedai/produk');
			}
		}
	}
}
?>