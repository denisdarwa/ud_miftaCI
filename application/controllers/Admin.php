<?php
class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('barang');
		$this->load->model('distributor');
		$this->load->model('karyawan');
		$this->load->model('penjualan_model');

	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('templates/footer');

	}
//==============================================================
//==============================================================
//Data Barang===================================================
//==============================================================

	public function view_barang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/barang/tambah_barang');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$nama_barang = $this->input->post('nama_barang');
		$id_distributor = $this->input->post('id_distributor');
		$stok = $this->input->post('stok');
		$hg_modal = $this->input->post('hg_modal');
		$hg_grosir = $this->input->post('hg_grosir');
		$hg_ecer = $this->input->post('hg_ecer');
		$data = array(
			'id_distributor' => $id_distributor,
			'nama_barang' => $nama_barang,
			'stok' => $stok,
			'hg_modal' => $hg_modal,
			'hg_grosir' => $hg_grosir,
			'hg_ecer' => $hg_ecer
			 );
		$this->barang->tambah_barang($data,'barang');
		redirect('admin');
	}

	public function tampil_barang()
	{
		$data['user'] = $this->barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/barang/edit_barang',$data);
		$this->load->view('templates/footer');
	}

	public function edit_barang($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['user'] = $this->barang->edit_barang($where,'barang')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/barang/update_barang',$data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$id_distributor = $this->input->post('id_distributor');
		$stok = $this->input->post('stok');
		$hg_modal = $this->input->post('hg_modal');
		$hg_grosir = $this->input->post('hg_grosir');
		$hg_ecer = $this->input->post('hg_ecer');
		$data = array(
			'id_distributor' => $id_distributor,
			'nama_barang' => $nama_barang,
			'stok' => $stok,
			'hg_modal' => $hg_modal,
			'hg_grosir' => $hg_grosir,
			'hg_ecer' => $hg_ecer
			 );
	
		$where = array(
			'id_barang' => $id_barang
		);
	
		$this->barang->update_data($where,$data,'barang');
		redirect('admin/tampil_barang');
	}

	public function hapus($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$this->barang->hapus_data($where,'barang');
		redirect('admin/tampil_barang');
	}
//==============================================================
//==============================================================
//Data Distributor==============================================
//==============================================================

	public function view_distributor()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/distributor/tambah_distributor');
		$this->load->view('templates/footer');
	}

	public function tambah_distributor()
	{
		$id_distributor = $this->input->post('id_distributor');
		$nama_distributor = $this->input->post('nama_distributor');
		$perusahaan = $this->input->post('perusahaan');
		$data = array(
			'id_distributor' => $id_distributor,
			'nama_distributor' => $nama_distributor,
			'perusahaan' => $perusahaan
			 );
		$this->distributor->tambah_distributor($data,'distributor');
		redirect('admin/view_distributor');
	}

	public function tampil_distributor()
	{
		$data['user'] = $this->distributor->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/distributor/edit_distributor',$data);
		$this->load->view('templates/footer');
	}

	public function edit_distributor($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->distributor->edit_distributor($where,'distributor')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/distributor/update_distributor',$data);
		$this->load->view('templates/footer');
	}

	public function update_distributor(){
		$id = $this->input->post('id');
		$id_distributor = $this->input->post('id_distributor');
		$nama_distributor = $this->input->post('nama_distributor');
		$perusahaan = $this->input->post('perusahaan');
		$data = array(
			'id' => $id,
			'id_distributor' => $id_distributor,
			'nama_distributor' => $nama_distributor,
			'perusahaan' => $perusahaan
			 );
	
		$where = array(
			'id' => $id
		);
	
		$this->distributor->update_distributor($where,$data,'distributor');
		redirect('admin/tampil_distributor');
	}

	public function hapus_distributor($id)
	{
		$where = array('id' => $id);
		$this->distributor->hapus($where,'distributor');
		redirect('admin/tampil_distributor');
	}
//==============================================================
//==============================================================
//Data Karyawan=================================================
//==============================================================
	public function view_karyawan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/karyawan/tambah_karyawan');
		$this->load->view('templates/footer');
	}

	public function tambah_karyawan()
	{
		$nama_karyawan = $this->input->post('nama_karyawan');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_karyawan' => $nama_karyawan,
			'alamat' => $alamat
			 );
		$this->karyawan->tambah($data,'karyawan');
		redirect('admin/view_karyawan');
	}

	public function tampil_karyawan()
	{
		$data['user'] = $this->karyawan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/karyawan/edit_karyawan',$data);
		$this->load->view('templates/footer');
	}

	public function edit_karyawan($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->karyawan->edit($where,'karyawan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/karyawan/update_karyawan',$data);
		$this->load->view('templates/footer');
	}

	public function update_karyawan(){
		$id = $this->input->post('id');
		$nama_karyawan = $this->input->post('nama_karyawan');
		$alamat = $this->input->post('alamat');
		$data = array(
			'id' => $id,
			'nama_karyawan' => $nama_karyawan,
			'alamat' => $alamat
			 );
	
		$where = array(
			'id' => $id
		);
	
		$this->karyawan->update($where,$data,'karyawan');
		redirect('admin/tampil_karyawan');
	}

	public function hapus_karyawan($id)
	{
		$where = array('id' => $id);
		$this->karyawan->hapus($where,'karyawan');
		redirect('admin/tampil_karyawan');
	}
//==============================================================
//==============================================================
//Data Penjualan================================================
//==============================================================
	public function penjualan()
	{
		$data['barang'] = null;
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/penjualan', $data);
		$this->load->view('templates/footer');
	}

//==============================================================
//==============================================================
//Laporan=======================================================
//==============================================================
	public function laporan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu_admin');
		$this->load->view('home/admin/laporan');
		$this->load->view('templates/footer');
	}
}
?>