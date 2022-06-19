<?php
defined('BASEPATH') or exit('No direct script access allowed');

class testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_blog');
        $this->load->model('M_testimoni');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['komentar'] = $this->M_testimoni->getAllTesti()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/testimoni/index', $data);
        $this->load->view('admin/footer');
    }
    public function create($id)
    {
        $where = array('id_wisata' => $id);
        $data['wisata'] = $this->M_blog->getWisataById($where, 'wisata')->result();
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('blog/header', $data);
        $this->load->view('blog/Testimoni', $data);
        $this->load->view('blog/footer');
    }
    public function store()
    {
        $data = [

            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'wisata_id' => $this->input->post('id_wisata'),
            'profesi_id' => $this->input->post('id_profesi'),
            'rating' => $this->input->post('rating'),
            'komentar' => $this->input->post('komentar'),

        ];
        $this->M_testimoni->store($data, 'testimoni');
        redirect('blog/dashboard/');
    }
    public function delete($id)
    {
        $where = array('id_komentar' => $id);
        $this->M_testimoni->delete($where, 'testimoni');
        redirect('blog/dashboard/');
    }
}
