<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // public function login2()
    // {
    //     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    //     $this->form_validation->set_rules('password', 'Password', 'trim|required');
    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Login Page';
    //         $this->load->view('templates/auth_header', $data);
    //         $this->load->view('auth/login');
    //         $this->load->view('templates/auth_footer');
    //     } else {
    //         $this->_login();
    //     }
    // }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('auth/login2', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        $this->session->set_flashdata('account', 'Account');
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div style="color: white; margin-bottom: 30px; text-align: center;" role="alert">Wrong Password !</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div style="color: white; margin-bottom: 30px; text-align: center;" role="alert">This Email is not verivied !</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div style="color: white; margin-bottom: 30px; text-align: center;" role="alert">Email is not registered !</div>');
            redirect('auth');
        }
    }

    // public function registration()
    // {
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
    //         'is_unique' => 'This email has already registered !'
    //     ]);
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
    //         'matches' => 'Password did not match !'
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'User Registration';
    //         $this->load->view('templates/auth_header', $data);
    //         $this->load->view('auth/registration');
    //         $this->load->view('templates/auth_footer');
    //     } else {
    //         $data = [
    //             'name' => htmlspecialchars($this->input->post('name', true)),
    //             'email' => htmlspecialchars($this->input->post('email', true)),
    //             'image' => 'default.jpg',
    //             'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //             'role_id' => 2,
    //             'is_active' => 1,
    //             'date_created' => time()
    //         ];
    //         $this->db->insert('user', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-dark text-justify" role="alert">Your account has been created. Please Login !</div>');
    //         redirect('auth');
    //     }
    // }

    public function registration2()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password did not match !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('auth/registration2', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div style="color: white; margin-bottom: 30px;" role="alert">Your account has been created. Please Login !</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-dark text-justify" role="alert">You have been logout !</div>');
        redirect('home');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
