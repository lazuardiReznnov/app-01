<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Templates_model', 'temp');
        $this->load->model('user_model', 'user');
    }
    public function index()
    {
        $config['base_url'] = 'http://localhost/app-01/user/index';
        $config['total_rows'] = $this->user->countUser();
        $config['per_page'] = 10;

        $data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['judul'] = "HALAMAN USER";
        $data['user'] = $this->user->getDataUser($config['per_page'], $data['start']);
        $controller = 'user/index';
        $this->temp->loadTemp($controller, $data);
    }
}
