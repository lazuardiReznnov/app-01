<?php

class User_model extends CI_Model
{
    public function getDataUser()
    {
        $this->db->select('user.idUser');
        $this->db->select('user.username');
        $this->db->select('user.email');
        $this->db->select('user.photo');
        $this->db->select('user.idAccess');
        $this->db->select('access.idAccess');
        $this->db->select('access.accessName');
        $this->db->from('user');
        $this->db->join('access', 'user.idAccess = access.idAccess', 'inner');
        $this->db->order_by('idUser', 'ACS');
       return $this->db->get()->result_array();
    }
}
