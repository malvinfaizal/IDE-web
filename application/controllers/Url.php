<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("url_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["url"] = $this->url_model->getAll();
        $this->load->view("welcome/shrtit", $data);
    }

    public function add()
    {
        $url = $this->url_model;
        $validation = $this->form_validation;
        $validation->set_rules($url->rules());

        if ($validation->run()) {
            $url->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("welcome/shrtit");
    }

    public function delete($url=null)
    {
        if (!isset($url)) show_404();
        
        if ($this->url_model->delete($url)) {
            redirect(site_url('welcome/shrtit'));
        }
    }
}