<?php
defined('BASEPATH') or exit('No direct script access allowed');

class master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_master');
    }
    public function kuliner()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['kuliner'] = $this->M_master->kuliner()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/master/kuliner', $data);
        $this->load->view('admin/footer');
    }
    public function rekreasi()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['rekreasi'] = $this->M_master->rekreasi()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/master/rekreasi', $data);
        $this->load->view('admin/footer');
    }
    public function profesi()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['profesi'] = $this->M_master->profesi()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/master/profesi', $data);
        $this->load->view('admin/footer');
    }
    public function delete_kuliner($id)
    {
        $where = array('id_kuliner', $id);
        $this->M_master->delete($where, 'jenis_kuliner');
        redirect('master/kuliner');
    }
    public function delete_jenis($id)
    {
        $where = array('id_jenis', $id);
        $this->M_master->delete($where, 'jenis_wisata');
        redirect('master/rekreasi');
    }
    public function delete_profesi($id)
    {
        $where = array('id_profesi', $id);
        $this->M_master->delete($where, 'profesi');
        redirect('master/profesi');
    }
}
