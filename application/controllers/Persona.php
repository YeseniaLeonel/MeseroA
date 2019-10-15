<?php


class Persona extends CI_Controller {

	public $email;
	public $pass;

	public function __construct(){
		parent::__construct(); 
		$this->load->model('consultasPersonas');
		$this->load->database();
		$this->load->helper("url");
	}

	public function sigin()
	{
		$this->load->view('cuentas/sigin');
	}

	public function guardar()
	{
		if ($this->input->server("REQUEST_METHOD") == "GET"){

				$data["nombre_p"] = $this->input->get("nombre");
				$data["apellido1_p"] = $this->input->get("apellido1");
				$data["apellido2_p"] = $this->input->get("apellido2");
				$data["fnacimiento"] = $this->input->get("fechanacimiento");
				$data["rolF"] = 2;
				$data["email"] = $this->input->get("email");
				$data["password"] = $this->input->get("password");
			
				$this->consultasPersonas->insert($data);
			}	

		$this->load->view('index.php');
	}

	public function comensal()
	{
		$this->load->view('cuentas/comensal');
	}

	public function login()
	{
		$rol = null;
		$this->load->view('cuentas/login');

		if($this->input->server("REQUEST_METHOD") == "POST"){
			$this->pass = $this->input->post("password");
			$this->email = $this->input->post("email");

			$cuenta = $this->consultasPersonas->iniciar($this->email, $this->pass);

			if(isset($cuenta)){
				$rol = $cuenta->rolF;
			}else{
				echo "<div class='alert alert-danger' role='alert'>
  						Usuario y/o contraseña incorrectos
					 </div>";
			}

			if($rol == 2){
				redirect("Persona/comensal");
			}
		}
	}

	public function perfil($datos = null){
		echo "$this->pass";
		$cuenta = $this->consultasPersonas->iniciar($this->email, $this->pass);
		if(isset($cuenta)){
			$datos["nombre"] = $cuenta->nombre_p . " " . $cuenta->apellido1_p . " " . $cuenta->apellido2_p;
			$datos["nacimiento"] = $cuenta->fnacimiento;
			$datos["tipo"] = $cuenta->rolF;
			$datos["email"] = $cuenta->email;

			$this->load->view('cuentas/perfil', $datos);
		}else{
			echo "<div class='alert alert-danger' role='alert'>
  						Usuario y/o contraseña incorrectos
					 </div>";
		}
		
	}
}

?>