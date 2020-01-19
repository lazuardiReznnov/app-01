<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menuManagement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Templates_model', 'temp');
        $this->load->model('menu_model', 'menu');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $config['base_url'] = 'http://localhost/app-01/menuManagement/index';
        $config['total_rows'] = $this->menu->countMenu();
        $config['per_page'] = 10;

        $data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['menuPanel'] = $this->temp->getMenu();
        $data['topPanel'] = $this->temp->getUser();
        $data['judul'] = "HALAMAN MANAGEMENT MENU";
        $data['menu'] = $this->menu->getDataMenu($config['per_page'], $data['start']);
        $controller = 'menuManagement/index';
        $this->temp->loadTemp($controller, $data);
    }
    public function tambahMenu()
    {
        $this->form_validation->set_rules('titleMenu', 'Tittle Menu', 'required');
        $this->form_validation->set_rules('link', 'Menu Link', 'required');
        $this->form_validation->set_rules('iconMenu', 'Icon Menu', 'required');
        $this->form_validation->set_rules('idAccess', 'Access', 'required');
        $this->form_validation->set_rules('ketMenu', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['menuPanel'] = $this->temp->getMenu();
            $data['topPanel'] = $this->temp->getUser();
            $data['access'] = $this->menu->getAccess();
            $data['judul'] = "HALAMAN MANAGEMENT MENU";
            $controller = 'menuManagement/tambahMenu';
            $this->temp->loadTemp($controller, $data);
        } elseif ($this->menu->cekTitle()) {
            $data['menuPanel'] = $this->temp->getMenu();
            $data['topPanel'] = $this->temp->getUser();
            $data['access'] = $this->menu->getAccess();
            $data['judul'] = "HALAMAN MANAGEMENT MENU";
            $controller = 'menuManagement/tambahMenu';
            $this->temp->loadTemp($controller, $data);
            $this->session->set_flashdata('cek', 'Registered');
        } else {
            $this->menu->inputMenu();
            $this->session->set_flashdata('success', 'Registration Successfully');
            redirect('menuManagement/index');
        }
    }
    public function detailMenu($idMenu)
    {
        $data['menuPanel'] = $this->temp->getMenu();
        $data['topPanel'] = $this->temp->getUser();
        $data['access'] = $this->menu->getAccess();
        $data['menuDetail'] = $this->menu->getMenuByids($idMenu);
        $data['judul'] = "HALAMAN MANAGEMENT MENU";
        $controller = 'menuManagement/detailMenu';
        $this->temp->loadTemp($controller, $data);
    }
}
