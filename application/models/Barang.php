<?php
class Barang extends CI_Model{
	function tampil_data(){
		return $this->db->get('barang');
	}

	function tampil_by_id($id)
	{
		$this->db->select('barang');
		$this->db->like('id_barang',$id);
		return $this->db->get('barang');
	}

	function tambah_barang($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>