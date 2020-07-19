<?php
class Blocked extends CI_Controller
{
    
public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('auth/blocked',$data);
    }
}