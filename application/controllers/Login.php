<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		if ($this->session->userdata('login_cliente') == true) {
            redirect(base_url('menucarta'));
		}else {
			$this->load->view('layouts/header');
			$this->load->view('layouts/nav');
			$this->load->view('layouts/body');
			$this->load->view('layouts/footer');
		}
	}

	public function registrar_cliente() {

		$nombre 	= $this->input->post('registro_nombre');
		$telefono 	= $this->input->post('registro_telefono');

        $nombre_cliente = $this->security->xss_clean( $this->db->escape_str( $nombre ) );
        $telefono       = $this->security->xss_clean( $this->db->escape_str( $telefono ) );

        $data = array(
            'nombre' 		    => $nombre_cliente,
            'numero_telefonico' => $telefono
            );

        if ($this->M_login->guardar_cliente($data)) {
			$data = array (
				'nombre' => $respuesta->nombre,
				'numero_telefonico' => $respuesta->numero_telefonico,
				'login_cliente' => true
				);
			$this->session->set_userdata($data);			
        }
        else{
            $this->session->set_flashdata('error', 'No se pudo guardar el usuario...');
        }
        redirect(base_url());
    }

    public function autenticar_cliente()
    {
		$nombre 		= $this->input->post('ingreso_nombre');
		$telefono 		= $this->input->post('ingreso_telefono');

        $nombre_cliente = $this->security->xss_clean( $this->db->escape_str( $nombre ) );
        $telefono       = $this->security->xss_clean( $this->db->escape_str( $telefono ) );

        $respuesta = $this->M_login->autenticar_cliente($nombre_cliente, $telefono);

		if ($respuesta) {
			$data = array (
				'nombre' => $respuesta->nombre,
				'numero_telefonico' => $respuesta->numero_telefonico,
				'login_cliente' => true
				);
			$this->session->set_userdata($data);
		}
		else{
            $this->session->set_flashdata('error', 'Usuario inactivo y/o usuario y/o contraseña son erroneos');
		}
        redirect(base_url());
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}
