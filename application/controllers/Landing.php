<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
       $this->load->view('landing/homepage');
    }
    public function blog()
    {
        $this->load->view('landing/blog');
    }


}
