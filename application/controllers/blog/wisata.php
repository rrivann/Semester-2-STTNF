<?php
defined('BASEPATH') or exit('No direct script access allowed');

class wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_blog');
        $this->load->model('M_testimoni');
        $this->load->helper('url');
    }
    public function kuliner()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['wisata'] = $this->M_blog->getAllKuliner()->result();
        $this->load->view('blog/wisata/header', $data);
        $this->load->view('blog/wisata/kuliner', $data);
        $this->load->view('blog/wisata/footer');
    }
    public function rekreasi()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['wisata'] = $this->M_blog->getAllRekreasi()->result();
        $this->load->view('blog/wisata/header', $data);
        $this->load->view('blog/wisata/rekreasi', $data);
        $this->load->view('blog/wisata/footer');
    }
    public function detail($id)
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('id_wisata' => $id);
        $data['detail'] = $this->M_blog->getWisataById($where, 'wisata')->result();
        $data['testi'] = $this->M_testimoni->getAllTesti()->result();
        $this->load->view('blog/header', $data);
        $this->load->view('blog/detail', $data);
        $this->load->view('blog/footer');
    }
}
