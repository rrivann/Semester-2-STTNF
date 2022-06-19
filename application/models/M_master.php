<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{

    public function kuliner()
    {
        return $this->db->get('jenis_kuliner');
    }
    public function rekreasi()
    {
        return $this->db->get('jenis_wisata');
    }
    public function profesi()
    {
        return $this->db->get('profesi');
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

/* End of file ModelName.php */
