<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auth  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Siwikode-login';
            $this->load->view('Admin/login', $data);
        } else {
            $this->login();
        }
    }
    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {
                    if ($user['id_profesi'] == 1) {
                        $data = [
                            'username' => $user['username'],
                            'id_profesi' => $user['id_profesi']
                        ];
                        $this->session->set_userdata($data);
                        redirect('Admin');
                    } else {
                        $data = [
                            'username' => $user['username'],
                            'id_profesi' => $user['id_profesi']
                        ];
                        $this->session->set_userdata($data);
                        redirect('blog/dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    The Password is Wrong!
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Account has not been activated!
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            The Account is not registered!
            </div>');
            redirect('auth');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            "matches" => "Password does'nt Match!",
            "min_length" => "Password Too Short!"
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Siwikode-Registrasi';
            $this->load->view('Admin/register', $data);
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_profesi' => 5,
                'is_active' => 1,
                'image' => 'defaiult.jpg'
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! Account has been created successfuly, Please login
          </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_profesi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logout!
      </div>');
        redirect('auth');
    }
}
