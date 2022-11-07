<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taksin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_penduduk');
	}

	public function index()
	{
		$data = [
			'title' 		=> 'Target Vaksin',
			'penduduk' => $this->M_penduduk->get()->result(),
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/target/index');
		$this->load->view('layout/footer');
	}
}
