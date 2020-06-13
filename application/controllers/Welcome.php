<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function shrtit()
	{
        $this->load->model("Url_model");
		$data["urls"] = $this->Url_model->getAll();
		$this->load->view('shrt.php',$data);
	}
	
	public function calculator()
	{
		$this->load->view('calculator.php');
	}
	
	public function vastream()
	{
		$this->load->view('vastream.php');
	}
}
