<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	/**
	 * Author: Luis García
	 * Modelo login
	 */
	public function autenticar_cliente($nombre, $telefono)
	{
		$this->db->where('nombre', $nombre);
		$this->db->where('numero_telefonico', $telefono);

		$resultados = $this->db->get('clientes');
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
    }
    
    public function guardar_cliente($data = '') 
    {
        return $this->db->insert('clientes', $data);
    }
}
