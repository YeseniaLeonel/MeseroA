<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuCarta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('login_cliente') == FALSE) {
		// 	redirect(base_url());
		// }
	}

	public function index()
	{
		$this->load->view('menu-carta');
	}

	// public function __construct(){
	// 	parent::__construct(); 
	// 	// $this->load->helper("url");
	// 	// $this->load->model('consultasBebidas');
	// 	// $this->load->model('consultasClasificacion');
	// 	// $this->load->model('consultasPlatillos');
	// 	// $this->load->database();
	// 	// $this->load->helper('form');
	// }

	// public function index(){
	// 	/*echo "	<!DOCTYPE html>
	// 			<html>
	// 			<head>
	// 				<title>Menu</title>
	// 				<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
	// 			</head>
	// 			<body>
	// 				<form action='../Orden/guardarOrden' method='POST'>";*/
	// 	$this->load->view("ordenar/menu");
	// 	$this->mostrar();
	// 	echo "		<p><input type='submit' value='Solicitar Pedido'></p>
	// 			</form>
	// 		</body>
	// 	</html>";
	// }

	// public function mostrar(){


	// 	$clasi["clasificaciones"] = $this->consultasClasificacion->findall();
	// 	echo "<br><br><h1 align='center' >Menú</h1>";

	// 	if(isset($clasi)){
	// 		foreach ($clasi["clasificaciones"] as $key => $value) {
	// 			$menu["titulo"] = $value->nombre_clasi;
	// 			$menu["menuArray"] = $this->consultasBebidas->find_clasificacion($value->ID_clasificacion);
	// 			if($menu["menuArray"] == NULL){
	// 				$menu["menuArray"] = $this->consultasPlatillos->find_clasificacion($value->ID_clasificacion);
	// 			}

	// 			$this->load->view("ordenar/plantillaMenu", $menu);
	// 		}
	// 	}
	// 	//$this->load->view("ordenar/menu");
	// }

}

?>