<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home/index');
		$this->load->view('templates/footer');

	}
	public function dashboard()
	{
		if(isset($_POST['login'])){
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$cek = $this->login_model->proseslogin($username,$password);

			if($cek != null){
				$pelogin = $this->db->get_where('user',array('username' => $username, 'password' => $password))->row();
  					if($pelogin->status == 'Pemilik'){
  						$this->load->view('templates/header');
  						$this->load->view('templates/menu_admin');
  						$this->load->view('templates/footer');
  					}
  					else{
  						$this->load->view('templates/header');
  						$this->load->view('templates/menu_karyawan');
  						$this->load->view('templates/footer');
  					}

  			}else{
  				$this->session->set_flashdata('message', '*Username atau password anda salah');
				redirect('welcome');
  			}

  		}		
	}

	public function logout()
	{
		redirect('welcome');
	}
}