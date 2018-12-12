<?php
class Penjualan extends CI_Model{

	function tampil_data(){
		return $this->db->get('penjualan');
	}

	function tampil_detail()
	{
		return $this->db->get('faktur');
	}

	function input_barang($data,$table)
	{
		$this->db->insert($table,$data);
	}
}
?>