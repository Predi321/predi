<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $this->load->view('detail');
        $this->load->view('templates/footer');
    }
}
