<?php defined('BASEPATH') or exit('No direct script access allowed');
class PanelKiri_model extends CI_Model
{
    public function getMenu()
    {
        return $this->db->get('menu')->result_array();
    }
}
