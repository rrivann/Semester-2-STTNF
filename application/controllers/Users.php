<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['users'] = $this->User->getAllUsers()->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/Users/index', $data);
		$this->load->view('admin/footer');
	}
	public function activate($id)
	{
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$where = ['id_user' => $id];
		$data['profesi'] = $this->User->getAlLProfesi()->result();
		$data['users'] = $this->User->getUserById($where, 'users')->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/Users/activate', $data);
		$this->load->view('admin/footer');
	}
	public function update()
	{
		$id_user = $this->input->post('id_user');
		$id_profesi = $this->input->post('id_profesi');
		$is_active = $this->input->post('status');

		$data = [
			'id_profesi' => $id_profesi,
			'is_active' => $is_active
		];
		$where = [
			'id_user' => $id_user
		];
		$this->User->Update($where, $data);
		redirect('Users/index');
	}
	public function delete($id)
	{
		$where = ['id_user' => $id];
		$this->User->delete($where, 'users');
		redirect('Users/index');
	}
}
