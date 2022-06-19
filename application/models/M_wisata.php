<?php

class M_wisata extends CI_Model
{
    public function getAllRekreasi()
    {
            $this->db->select('*');
            $this->db->from('wisata');
            $this->db->join('jenis_wisata','jenis_wisata.id_jenis = wisata.jenis_wisata_id');
            $this->db->where('jenis_wisata_id !=', NULL);
            $query = $this->db->get();
            return $query;
    }   
    public function getAllKuliner()
    {
        $this->db->select('*');
        $this->db->from('wisata');
        $this->db->join('jenis_kuliner','jenis_kuliner.id_kuliner = wisata.jenis_kuliner_id');
        $this->db->where('jenis_kuliner_id !=', NULL);
        $query = $this->db->get();
        return $query; 
    }
    public function getJenisWisata()
    {
        return $this->db->get('jenis_wisata');
    }
    public function getJenisKuliner()
    {
        return $this->db->get('jenis_kuliner');
    }
    public function store($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function getwisataById($where,$table)
    {
      return $this->db->get_where($table,$where);   
    }
    public function Update($where,$data)
    {
        $this->db->where($where);
        $this->db->update('wisata',$data);
    }
    public function delete($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}