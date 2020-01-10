<?php
class Templates_model extends CI_Model
{

    public function loadTemp($controler, $data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view($controler, $data);
        $this->load->view('templates/footer');
    }
}
