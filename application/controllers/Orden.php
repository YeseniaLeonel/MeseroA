<?php


class Orden extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		//$this->load->model('consultasPersonas');
		$this->load->database();
		$this->load->helper("url");
	}

	public function index(){
		$this->load->view('ordenar/menu');
	}

}