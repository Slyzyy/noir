<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Home';
        // $this->load->view('home/header', $data);
        $this->load->view('home/index-account', $data);
    }

    public function account()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Home';
        $this->load->view('home/index-account', $data);
    }

    public function about()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'About Us';
        $this->load->view('about', $data);
    }
}
