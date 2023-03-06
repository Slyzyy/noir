<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Contact';

        $this->load->view('contact', $data);
    }

    public function list()
    {
        $data['contact'] = $this->contact_model->tampil_data()->result();
        $data['title'] = 'Contact List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('list_contact.php', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_aksi()
    {

        $id_contact = $this->input->post('id_contact');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');

        $data = array(
            'id_contact'    => $id_contact,
            'nama'          => $nama,
            'email'         => $email,
            'pesan'         => $pesan
        );

        $this->contact_model->aksi_tambah($data, 'tbl_contact');
        redirect('contact');
    }
}
