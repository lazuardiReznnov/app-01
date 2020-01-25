<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cashManagement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('templates_model', 'temp');
        $this->load->model('menu_model', 'menu');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['menuPanel'] = $this->temp->getMenu();
        $data['topPanel'] = $this->temp->getUser();
        $data['access'] = $this->menu->getAccess();
        $data['judul'] = "CASH MANAGEMENT PAGE";
        $controller = 'cashManagement/index';
        $this->temp->loadTemp($controller, $data);
    }
    public function cashAcount()
    {
        $data['menuPanel'] = $this->temp->getMenu();
        $data['topPanel'] = $this->temp->getUser();
        $data['access'] = $this->menu->getAccess();
        $data['judul'] = "CASH MANAGEMENT PAGE";
        $controller = 'cashManagement/acount';
        $this->temp->loadTemp($controller, $data);
    }
}
