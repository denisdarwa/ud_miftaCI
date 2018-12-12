<?php
    class Penjualan extends CI_Controller 
    {
        function __construct() {
            parent::__construct();
            $this->load->model('penjualan');
            $this->load->model('barang');
        }

        public function input_barang()
        {
            # code...
        }
    }
    