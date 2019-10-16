<?php


class MenuCarta extends CI_Controller {
	public function __construct(){
		parent::__construct(); 
		$this->load->database();
		$this->load->helper("url");
		$this->load->model('consultasBebidas');
	}

	public function mostrar(){
		$BFrias["bebidasFrias"] = $this->consultasBebidas->find_clasificacion('1');
		//echo "$BFrias[0]";
		$this->load->view('ordenar/menu', $BFrias);
	}
}

?>