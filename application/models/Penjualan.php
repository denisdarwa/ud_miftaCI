<?php
class Penjualan extends CI_Model{

	function tampil_penjualan(){
		return $this->db->get('penjualan');
	}

	function tampil_faktur()
	{
		$this->db->select('no_faktur');
		$this->db->order_by('tgl','DESC');
		$this->db->limit(1);
		return $this->db->get('faktur');
	}

	function input_barang($data,$table)
	{
		$this->db->insert($table,$data);
	}
}
?>