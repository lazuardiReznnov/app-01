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
        //$this->db->select('menu.idMenu');
        //$this->db->select('menu.titleMenu');
        //$this->db->select('menu.linkMenu');
        //$this->db->select('menu.iconMenu');
        //$this->db->select('menu.idAccess');
        //$this->db->select('access.idAccess');
        //$this->db->select('access.accessName');
        //$this->db->from(//$this->table);
        //$this->db->join('access', 'menu.idAccess = access.idAccess', 'inner');
        //$this->db->limit($limit, $start);
        //$this->db->order_by('idMenu', 'ACS');
        $this->db->select('idMenu');
        $this->db->select('titleMenu');
        $this->db->from($this->table);
        $this->db->limit($limit, $start);
        $this->db->order_by('idMenu', 'DESC');
        return $this->db->get()->result_array();
    }
    public function getAccess()
    {
        return $this->db->get('access')->result_array();
    }
    public function cekTitle()
    {
        $title = $this->input->post('titleMenu');
        $this->db->select('titleMenu');
        $this->db->from($this->table);
        $this->db->where('titleMenu', $title);
        return $this->db->get()->num_rows();
    }
    public function inputMenu()
    {
        $data = [
            "titleMenu" => $this->input->post('titleMenu', true),
            "linkMenu" => $this->input->post('link', true),
            "iconMenu" => $this->input->post('iconMenu', true),
            "idAccess" => $this->input->post('idAccess', true),
            "ketMenu" => $this->input->post('ketMenu', true)
        ];
        $this->db->insert($this->table, $data);
    }
    public function getMenuByids($idMenu)
    {
        $this->db->select('menu.idMenu');
        $this->db->select('menu.titleMenu');
        $this->db->select('menu.linkMenu');
        $this->db->select('menu.iconMenu');
        $this->db->select('menu.idAccess');
        $this->db->select('menu.ketMenu');
        $this->db->select('access.idAccess');
        $this->db->select('access.accessName');
        $this->db->from($this->table);
        $this->db->join('access', 'menu.idAccess = access.idAccess', 'inner');
        $this->db->where('idMenu', $idMenu);
        return $this->db->get()->row();
    }
    public function updateMenu()
    {
        $data = [
            "titleMenu" => $this->input->post('titleMenu', true),
            "linkMenu" => $this->input->post('link', true),
            "iconMenu" => $this->input->post('iconMenu', true),
            "idAccess" => $this->input->post('idAccess', true),
            "ketMenu" => $this->input->post('ketMenu', true)
        ];
        $this->db->set($data);
        $this->db->where('idMenu', $this->input->post('idMenu', true));
        $this->db->update($this->table);
    }
    public function deleteMenu($idMenu)
    {
        $this->db->where('idMenu', $idMenu);
        $this->db->delete($this->table);
    }
}
