<?php


class Orden extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		//$this->load->model('consultasPersonas');
		$this->load->database();
		$this->load->helper("url");
	}

	public function guardarOrden(){
		$pedido = $_POST["Seleccionados"];
		echo "$pedido[1]";
	}

}