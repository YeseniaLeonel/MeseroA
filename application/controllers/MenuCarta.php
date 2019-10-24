<?php


class MenuCarta extends CI_Controller {
	public function __construct(){
		parent::__construct(); 
		$this->load->helper("url");
		$this->load->model('consultasBebidas');
		$this->load->model('consultasClasificacion');
		$this->load->model('consultasPlatillos');
		$this->load->database();
		$this->load->helper('form');
	}

	public function mostrar(){

		$clasi["clasificaciones"] = $this->consultasClasificacion->findall();

		if(isset($clasi)){
			foreach ($clasi["clasificaciones"] as $key => $value) {
				$menu["titulo"] = $value->nombre_clasi;
				$menu["menuArray"] = $this->consultasBebidas->find_clasificacion($value->ID_clasificacion);
				if($menu["menuArray"] == NULL){
					$menu["menuArray"] = $this->consultasPlatillos->find_clasificacion($value->ID_clasificacion);
				}

				$this->load->view("ordenar/menu", $menu);
			}
		}
	}
}

?>