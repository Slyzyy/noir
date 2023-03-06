<?php

class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['clothing'] = $this->model_barang_clothing->tampil_data()->result();
        $data['leather'] = $this->model_barang_leather->tampil_data()->result();
        $data['accessories'] = $this->model_barang_accessories->tampil_data()->result();
        $data['others'] = $this->model_barang_others->tampil_data()->result();
        $data['title'] = 'Item List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/clothing/data_barang_clothing', $data);
        $this->load->view('admin/leather/data_barang_leather', $data);
        $this->load->view('admin/accessories/data_barang_accessories', $data);
        $this->load->view('admin/others/data_barang_others', $data);
        $this->load->view('templates/footer', $data);
    }
}
