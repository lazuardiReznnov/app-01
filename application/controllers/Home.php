<?php
class   Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('templates_model', 'temp');
    }
    public function index()
    {
        $controller = 'home/index';
        $data['judul'] = 'HALAMAN HOME';
        $this->temp->loadTemp($data, $controller);
    }
}
