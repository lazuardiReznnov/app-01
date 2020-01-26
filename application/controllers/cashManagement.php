<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cashManagement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('templates_model', 'temp');
        $this->load->model('cash_model', 'cash');
        $this->load->library('form_validation');
        $this->load->model('menu_model', 'menu');
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
        $config['base_url'] = 'http://localhost/app-01/cashManagement/cashAcount/';
        $config['total_rows'] = $this->cash->countCC();
        $config['per_page'] = 10;

        $data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['menuPanel'] = $this->temp->getMenu();
        $data['topPanel'] = $this->temp->getUser();
        $data['access'] = $this->menu->getAccess();
        $data['judul'] = "CASH MANAGEMENT PAGE";
        $data['cc'] = $this->cash->getDataCC($config['per_page'], $data['start']);
        $controller = 'cashManagement/acount';
        $this->temp->loadTemp($controller, $data);
    }
    public function addCash()
    {
        $data['menuPanel'] = $this->temp->getMenu();
        $data['topPanel'] = $this->temp->getUser();
        $data['access'] = $this->menu->getAccess();
        $data['judul'] = "CASH MANAGEMENT PAGE";
        $controller = 'cashManagement/addCash';
        $this->temp->loadTemp($controller, $data);
    }
}
