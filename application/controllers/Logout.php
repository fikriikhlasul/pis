<?php

class Logout extends CI_Controller
{
    public function index()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $_SESSION['message'] = "
        Swal.fire({
        icon: 'success',
        title: 'Berhasil logout'
      })";
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('login');
    }

}