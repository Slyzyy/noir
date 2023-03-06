<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function signature()
    {
        $data['title'] = 'Blvck Signature Hoodie';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['clothing'] = $this->model_barang_clothing->tampil_data()->result();
        $data['leather'] = $this->model_barang_leather->tampil_data()->result();
        $data['accessories'] = $this->model_barang_accessories->tampil_data()->result();
        $data['others'] = $this->model_barang_others->tampil_data()->result();

        $this->load->view('detail/detail-header', $data);
        $this->load->view('bahan_view/detail', $data);
    }

    public function phanter()
    {
        $data['title'] = 'Blvck Phanter Sweater';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['clothing'] = $this->model_barang_clothing->tampil_data()->result();
        $data['leather'] = $this->model_barang_leather->tampil_data()->result();
        $data['accessories'] = $this->model_barang_accessories->tampil_data()->result();
        $data['others'] = $this->model_barang_others->tampil_data()->result();

        $this->load->view('detail/detail-header', $data);
        $this->load->view('detail/detail-phanter', $data);
    }
}
