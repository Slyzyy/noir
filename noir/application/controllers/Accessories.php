<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accessories extends CI_Controller
{
    public function list_accessories()
    {
        $data['title'] = 'Accessories';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['clothing'] = $this->model_barang_clothing->tampil_data()->result();
        $data['leather'] = $this->model_barang_leather->tampil_data()->result();
        $data['accessories'] = $this->model_barang_accessories->tampil_data()->result();
        $data['others'] = $this->model_barang_others->tampil_data()->result();

        $this->load->view('list_accessories/list_accessories', $data);
    }
}
