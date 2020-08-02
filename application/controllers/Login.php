<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
       $role_id = $this->session->userdata('role_id');
        if ($role_id > 1 ) {
            $url = 'user';
        
            redirect($url.'/dashboard');
        }elseif($role_id == 1 )
        {   $url = 'admin';
            redirect($url.'/dashboard');
        }else
        {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            // validasinya success
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'status' => $user['status']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin/dashboard');
                    } elseif($user['status'] == 'Mahasiswa') {
                        redirect('anggota/dashboard');
                    }
                    elseif($user['status'] == 'Alumni') {
                        redirect('alumni/dashboard');
                    }
                    else{
                        redirect('dosen/dashboard');
                    }
                } else {
                    $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya passwordnya salah,coba lagi!'
                      })";
                    // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('login');
                }
            } else {
                $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya akun anda belum aktif,silahkan hubungi admin!'
                      })";
                // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('login');
            }
        } else {
            $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Username belum terdaftar di akun manapun, silahkan cek kembali!'
                      })";
                // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('login');
        }
    }

}