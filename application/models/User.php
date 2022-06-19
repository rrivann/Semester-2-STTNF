<?php

class User extends CI_Model
{
    public function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('profesi', 'profesi.id_profesi = users.id_profesi');
        $query = $this->db->get();
        return $query;
    }
    public function getAllProfesi()
    {
        return $this->db->get('profesi');
    }
    public function getUserById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function Update($where, $data)
    {
        $this->db->where($where);
        $this->db->update('users', $data);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
