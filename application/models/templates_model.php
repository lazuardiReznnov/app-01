<?php defined('BASEPATH') or exit('No direct script access allowed');
class Templates_model extends CI_Model
{

    public function loadTemp($controler, $data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view($controler, $data);
        $this->load->view('templates/footer');
    }
}
