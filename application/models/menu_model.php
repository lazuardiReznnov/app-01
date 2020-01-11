<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menu_model extends CI_Model
{
    private $table = 'menu';
    public function CountMenu()
    {
        return $this->db->get($this->table)->num_rows();
    }

    public function getDataMenu($limit, $start)
    {
        $this->db->select('menu.idMenu');
        $this->db->select('menu.titleMenu');
        $this->db->select('menu.linkMenu');
        $this->db->select('menu.iconMenu');
        $this->db->select('menu.idAccess');
        $this->db->select('access.idAccess');
        $this->db->select('access.accessName');
        $this->db->from($this->table);
        $this->db->join('access', 'menu.idAccess = access.idAccess', 'inner');
        $this->db->limit($limit, $start);
        $this->db->order_by('idMenu', 'ACS');
        return $this->db->get()->result_array();
    }
    public function getAccess()
    {
        return $this->db->get('access')->result_array();
    }
}
