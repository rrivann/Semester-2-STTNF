<?php
defined('BASEPATH') or exit('No direct script access allowed');

class wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_wisata');
        $this->load->helper('url');
    }
    public function rekreasi()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['wisata'] = $this->M_wisata->getAllRekreasi()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wisata/rekreasi', $data);
        $this->load->view('admin/footer');
    }
    public function kuliner()
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['wisata'] = $this->M_wisata->getAllKuliner()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wisata/kuliner', $data);
        $this->load->view('admin/footer');
    }
    private function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_wisata;
        $config['max_size']    = '10000';
        $config['overwrite'] = true;


        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        }
        return "default.jpg";
    }
    public function create($status)
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['status'] = $status;
        $data['jenis'] =  $this->M_wisata->getJenisWisata()->result();
        $data['jenkul'] = $this->M_wisata->getJenisKuliner()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wisata/create', $data);
        $this->load->view('admin/footer');
    }
    public function store($status)
    {
        $data['status'] = $status;
        $nama = $this->input->post('nama');
        $jenis_wisata_id = $this->input->post('jenis_wisata_id');
        $deskripsi = $this->input->post('deskripsi');
        $fasilitas = $this->input->post('fasilitas');
        $bintang = $this->input->post('bintang');
        $kontak = $this->input->post('kontak');
        $image = $this->upload();
        $latlong = $this->input->post('latlong');
        $email = $this->input->post('email');
        $alamat  = $this->input->post('alamat');
        $web = $this->input->post('web');
        $jenis_kuliner_id = $this->input->post('jenis_kuliner_id');

        $data = array(
            'nama' => $nama,
            'jenis_wisata_id' => $jenis_wisata_id,
            'deskripsi' => $deskripsi,
            'fasilitas' => $fasilitas,
            'bintang' =>  $bintang,
            'kontak' => $kontak,
            'latlong'  => $latlong,
            'image' => $image,
            'email' => $email,
            'alamat' => $alamat,
            'web' => $web,
            'jenis_kuliner_id' => $jenis_kuliner_id
        );
        $this->M_wisata->store($data, 'wisata');
        if ($status == 'rekreasi') {
            redirect('wisata/rekreasi');
        } elseif ($status == 'kuliner') {
            redirect('wisata/kuliner');
        }
    }
    public function detail($id)
    {
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('id_wisata' => $id);
        $data['detail'] = $this->M_wisata->getWisataById($where, 'wisata')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wisata/detail', $data);
        $this->load->view('admin/footer');
    }
    public function edit($id, $status)
    {
        $data['status'] = $status;
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['jenis'] =  $this->M_wisata->getJenisWisata()->result();
        $data['jenkul'] = $this->M_wisata->getJenisKuliner()->result();
        $where = array('id_wisata' => $id);
        $data['edit'] = $this->M_wisata->getWisataById($where, 'wisata')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wisata/update', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $status = $this->input->post('status');
        $id = $this->input->post('id_wisata');
        $nama = $this->input->post('nama');
        $jenis_wisata_id = $this->input->post('jenis_wisata_id');
        $deskripsi = $this->input->post('deskripsi');
        $fasilitas = $this->input->post('fasilitas');
        $bintang = $this->input->post('bintang');
        $kontak = $this->input->post('kontak');
        $latlong = $this->input->post('latlong');
        $email = $this->input->post('email');
        $alamat  = $this->input->post('alamat');
        $web = $this->input->post('web');
        $jenis_kuliner_id = $this->input->post('jenis_kuliner_id');
        $data = array(
            'nama' => $nama,
            'jenis_wisata_id' => $jenis_wisata_id,
            'deskripsi' => $deskripsi,
            'fasilitas' => $fasilitas,
            'bintang' =>  $bintang,
            'kontak' => $kontak,
            'latlong'  => $latlong,
            'email' => $email,
            'alamat' => $alamat,
            'web' => $web,
            'jenis_kuliner_id' => $jenis_kuliner_id
        );
        $where = array(
            'id_wisata' => $id
        );
        $this->M_wisata->Update($where, $data);
        if ($status == 'rekreasi') {
            redirect('wisata/rekreasi');
        } elseif ($status == 'kuliner') {
            redirect('wisata/kuliner');
        }
    }

    public function delete($id, $status)
    {
        $where = array('id_wisata' => $id);
        $this->M_wisata->delete($where, 'wisata');
        if ($status == 'rekreasi') {
            redirect('wisata/rekreasi');
        } elseif ($status == 'kuliner') {
            redirect('wisata/kuliner');
        }
    }
}
