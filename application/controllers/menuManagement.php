<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menuManagement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Templates_model', 'temp');
        $this->load->model('menu_model', 'menu');
        $this->load->model('panelKiri_model', 'panelKiri');
    }
    public function index()
    {
        $config['base_url'] = 'http://localhost/app-01/menuManagement/index';
        $config['total_rows'] = $this->menu->countMenu();
        $config['per_page'] = 10;

        $data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['menuPanel'] = $this->panelKiri->getMenu();
        $data['judul'] = "HALAMAN MANAGEMENT MENU";
        $data['menu'] = $this->menu->getDataMenu($config['per_page'], $data['start']);
        $controller = 'menu/index';
        $this->temp->loadTemp($controller, $data);
    }
}