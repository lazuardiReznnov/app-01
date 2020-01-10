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
        $data['judul'] = "HALAMAN USER";
        $data['user'] = $this->user->getDataUser();
        $controller = 'user/index';
        $this->temp->loadTemp($controller, $data);
    }
}
