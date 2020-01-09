<?php
class Templates_model extends CI_Model
{

    public function loadTemp($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
    }
}
