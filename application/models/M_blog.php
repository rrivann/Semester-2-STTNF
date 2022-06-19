<?php

class M_blog extends CI_Model
{
    public function getAllWisata()
    {
        $this->db->select('*');
        $this->db->from('wisata');
        $query = $this->db->get();
        return $query;
    }
    public function getAllRekreasi()
    {
        $this->db->select('*');
        $this->db->from('wisata');
        $this->db->join('jenis_wisata', 'jenis_wisata.id_jenis = wisata.jenis_wisata_id');
        $this->db->where('jenis_wisata_id !=', NULL);
        $query = $this->db->get();
        return $query;
    }
    public function getAllKuliner()
    {
        $this->db->select('*');
        $this->db->from('wisata');
        $this->db->join('jenis_kuliner', 'jenis_kuliner.id_kuliner = wisata.jenis_kuliner_id');
        $this->db->where('jenis_kuliner_id !=', NULL);
        $query = $this->db->get();
        return $query;
    }
    public function getWisataById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
