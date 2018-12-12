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
		$data['faktur'] = $this->penjualan->tampil_faktur();
		if (is_null($data)) {
			$data['faktur']['no_faktur'] = 1;
			$this->load->view('templates/header');
			$this->load->view('templates/menu_karyawan');
			$this->load->view('home/penjualan',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/menu_karyawan');
			$this->load->view('home/penjualan',$data);
			$this->load->view('templates/footer');
		}
		
	}
}
?>