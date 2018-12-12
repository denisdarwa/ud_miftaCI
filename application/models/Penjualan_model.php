<?php
class Penjualan_model extends CI_Model{

	function tampil_penjualan(){
		$this->db->select('id_barang','nama_barang','')
		return $this->db->get('penjualan');
	}

	function cari_barang($nama,$jenis,$jumlah)
	{
		$this->db->where('nama_barang',$nama);
		return $this->db->get('barang');
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}
?>