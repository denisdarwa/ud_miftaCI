<?php
class Karyawan extends CI_Controller {

	// p<!-- ublic function __construct(){
	// 	parrent::__construct(){
	// 		$this->load->helper('form')	
	// 		$this->load->library('session')
	// 	}
	// 	// session_start();
	// } -->

	function index(){
	$this->load->view('menu_karyawan');
	}
}
?>