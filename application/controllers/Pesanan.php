<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Pesanan extends CI_Controller {

	public function __construct() {
		parent::__construct();		
	}
	
	public function index() {
		if (empty($this->session->userdata('user')) || ($this->session->userdata('user')!='petani' && $this->session->userdata('user')!='kedai') && $this->session->userdata('user')!='admin') {
			$this->session->sess_destroy();
			redirect('login');
		}
		else {
			if ($this->session->userdata('user')=='admin') {
				$this->load->view('admin/pesanan');
			}			
			if ($this->session->userdata('user')=='petani') {
				$this->load->view('petani/pesanan');
			}			
			if ($this->session->userdata('user')=='kedai') {
				$this->load->view('kedai/pesanan');
			}			
		}		
	}

	public function bayarcek() {
		redirect('slip?id='.$_GET['id'].'');
	}

	public function resicek() {
		redirect('resi?id='.$_GET['id'].'');
	}
}
?>