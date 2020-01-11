<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('authors_model', 'authors');
    }
    public function index()
    {
        $config['base_url'] = 'http://localhost/app-01/authors/index';
        $config['total_rows'] = $this->authors->numdataAuthor();
        $config['per_page'] = 10;



        $data['menuPanel'] = $this->panelKiri->getMenu();
        $data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['authors'] = $this->authors->AlldataAuthors($config['per_page'], $data['start']);
        $this->load->view('authors/index', $data);
    }
}
