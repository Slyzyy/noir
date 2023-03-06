<?php

class Data_barang_leather extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang_leather->tampil_data()->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/clothing/data_barang_leather', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar     = $_FILES['gambar']['name'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Failed to upload image";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_brg'   => $nama_brg,
            'keterangan' => $keterangan,
            'kategori'   => $kategori,
            'harga'      => $harga,
            'stok'       => $stok,
            'gambar'     => $gambar
        );

        $this->model_barang_clothing->tambah_barang($data, 'tbl_barang_leather');
        redirect('admin_cart/data_barang');
    }

    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->model_barang_clothing->edit_barang($where, 'tbl_barang_leather')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/clothing/edit_barang_clothing', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id         = $this->input->post('id_brg');
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok
        );

        $where = array(
            'id_brg' => $id
        );

        $this->model_barang_clothing->update_data($where, $data, 'tbl_barang_leather');
        redirect('admin_cart/data_barang');
    }

    public function hapus($id)
    {
        $where = array(
            'id_brg' => $id
        );

        $this->model_barang_clothing->hapus_data($where, 'tbl_barang_leather');
        redirect('admin_cart/data_barang');
    }
}
