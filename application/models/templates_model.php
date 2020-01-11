<?php defined('BASEPATH') or exit('No direct script access allowed');
class Templates_model extends CI_Model
{
    //templates
    public function loadTemp($controler, $data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view($controler, $data);
        $this->load->view('templates/footer');
    }
    //Panel Kiri
    public function getMenu()
    {
        return $this->db->get('menu')->result_array();
    }

    public function getMenuById($idAccess)
    {
        return $this->db->get_where('menu', array('idAccess' => $idAccess))->fetch_rows();
    }

    //Top Panel
    public function getUserById($idAccess)
    {
        return $this->db->get_where('user', array('idAccess', $idAccess))->fetch_rows();
    }
    public function getUser()
    {
        return $this->db->get_where('user', array('idUser', 1))->row_array();
    }
}
