<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authors_model extends CI_Model
{
    public function AlldataAuthors($limit, $start)
    {
        return $this->db->get('authors', $limit, $start)->result_array();
    }
    public function numdataAuthor()
    {
        return $this->db->get('authors')->num_rows();
    }
}
