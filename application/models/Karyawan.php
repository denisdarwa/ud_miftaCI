<?php
class Karyawan extends CI_Model{
	function tampil_data(){
		return $this->db->get('karyawan');
	}

	function tambah($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function edit($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table)
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