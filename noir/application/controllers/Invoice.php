<?php

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $data['title'] = 'Invoice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Invoice Detail';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hapus($id)
    {

        $where = array(
            'id' => $id
        );

        $this->model_invoice->hapus_data($where, 'tbl_invoice');
        redirect('invoice');
    }
}
