<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['clothing'] = $this->model_barang_clothing->tampil_data()->result();
        $data['leather'] = $this->model_barang_leather->tampil_data()->result();
        $data['accessories'] = $this->model_barang_accessories->tampil_data()->result();
        $data['others'] = $this->model_barang_others->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang_clothing($id)
    {
        $barang = $this->model_barang_clothing->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg

        );

        $this->cart->insert($data);
        redirect('clothing/list_clothing');
    }

    public function tambah_ke_keranjang_leather($id)
    {
        $barang = $this->model_barang_leather->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg

        );

        $this->cart->insert($data);
        redirect('leather/list_leather');
    }

    public function tambah_ke_keranjang_accessories($id)
    {
        $barang = $this->model_barang_accessories->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg

        );

        $this->cart->insert($data);
        redirect('accessories/list_accessories');
    }

    public function tambah_ke_keranjang_others($id)
    {
        $barang = $this->model_barang_others->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg

        );

        $this->cart->insert($data);
        redirect('others/list_others');
    }

    public function detail_keranjang()
    {

        $data['title'] = 'Cart';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('cart', $data);
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/detail_keranjang');
    }

    public function pembayaran()
    {
        $data['title'] = 'Checkout';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('payment', $data);
    }

    public function proses_pesanan()
    {
        $data['title'] = 'Proceed Payment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->cart->destroy();
        $is_processed = $this->model_invoice->index();

        if ($is_processed) {
            $this->load->view('proses_pesanan', $data);
        } else {
            echo "Sorry, your order is failed";
        }
    }

    public function detail_clothing($id_brg)
    {
        $data['title'] = 'Product Details';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['clothing'] = $this->model_barang_clothing->detail_brg($id_brg);

        $this->load->view('detail_clothing/detail_clothing', $data);
    }

    public function detail_accessories($id_brg)
    {
        $data['title'] = 'Product Details';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['accessories'] = $this->model_barang_accessories->detail_brg($id_brg);

        $this->load->view('detail_accessories/detail_accessories', $data);
    }

    public function detail_others($id_brg)
    {
        $data['title'] = 'Product Details';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['others'] = $this->model_barang_others->detail_brg($id_brg);

        $this->load->view('detail_others/detail_others', $data);
    }

    public function detail_leather($id_brg)
    {
        $data['title'] = 'Product Details';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['leather'] = $this->model_barang_leather->detail_brg($id_brg);

        $this->load->view('detail_leather/detail_leather', $data);
    }
}
