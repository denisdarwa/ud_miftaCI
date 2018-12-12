<?php
class Distributor extends CI_Model{
	function tampil_data(){
		return $this->db->get('distributor');
	}

	function tambah_distributor($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function edit_distributor($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_distributor($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}



}
?>