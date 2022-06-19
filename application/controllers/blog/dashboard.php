<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_blog');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['wisata'] = $this->M_blog->getAllWisata()->result();
        $this->load->view('blog/header', $data);
        $this->load->view('blog/home', $data);
        $this->load->view('blog/footer');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
}
