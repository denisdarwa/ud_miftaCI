<?php
    class Penjualan extends CI_Controller 
    {
        function __construct() {
            parent::__construct();
            $this->load->model('penjualan_model');
            $this->load->model('barang');
        }

        function cari_barang(){
            $kode = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $jumlah = $this->input->post('jumlah');

            $dump = array(
                'id_barang' -> $kode,
                'jenis' => $jenis,
                'jumlah' => $jumlah
            );

            $this->penjualan_model->input_data($dump,'proses');

            $data = $this->penjualan_model->cari_barang($kode,$jenis,$jumlah);

            var_dump($data);

            // $this->load->view('templates/header');
            // $this->load->view('templates/menu_karyawan');
            // $this->load->view('home/penjualan',$data);
            // $this->load->view('templates/footer');
        }
    }
    