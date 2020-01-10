<?php

class User_model extends CI_Model
{
    private $table = 'user';
    public function getDataUser($limit, $start)
    {
        $this->db->select('user.idUser');
        $this->db->select('user.username');
        $this->db->select('user.email');
        $this->db->select('user.photo');
        $this->db->select('user.idAccess');
        $this->db->select('access.idAccess');
        $this->db->select('access.accessName');
        $this->db->from($this->table);
        $this->db->join('access', 'user.idAccess = access.idAccess', 'inner');
        $this->db->limit($limit, $start);
        $this->db->order_by('idUser', 'ACS');
        return $this->db->get()->result_array();
    }
    public function countUser()
    {
        return $this->db->get($this->table)->num_rows();
    }
}
