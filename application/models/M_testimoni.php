<?php

class M_testimoni extends CI_Model
{
    public function getAllTesti()
    {
        $this->db->select('*');
        $this->db->from('testimoni');
        $this->db->join('wisata', 'wisata.id_wisata = testimoni.wisata_id');
        $this->db->join('profesi', 'profesi.id_profesi = testimoni.profesi_id');
        $query = $this->db->get();
        return $query;
    }
    public function store($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
