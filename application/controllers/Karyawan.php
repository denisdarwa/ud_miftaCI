<?php
class Karyawan extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('penjualan');
	}

	function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/menu_karyawan');
		$this->load->view('templates/footer');
	}

	public function penjualan()
	{
		$data['barang'] = null;
		$this->load->view('templates/header');
		$this->load->view('templates/menu_karyawan');
		$this->load->view('home/penjualan',$data);
		$this->load->view('templates/footer');
	}
}
?>