<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
    }

    public function cetak_produk()
    {
        $data['produk'] = $this->model_invoice->get_produk();
        $this->load->view('cetak-invoice', $data);
    }
}
