<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cash_model extends CI_Model
{
    private $tcc = "cashAcount";

    public function countCC()
    {
        return $this->db->get($this->tcc)->num_rows();
    }
    public function getDataCC($limit, $start)
    {
        $this->db->select('idCC');
        $this->db->select('titleAcount');
        $this->db->select('descAcount');
        $this->db->from($this->tcc);
        $this->db->limit($limit, $start);
        $this->db->order_by('idCC', 'ASC');
        return $this->db->get()->result_array();
    }
}
