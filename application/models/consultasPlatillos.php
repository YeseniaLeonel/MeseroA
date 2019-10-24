<?php
	
class consultasPlatillos extends CI_Model{
	public $table = 'platillo';
	public $table_id = 'ID_platillo';
	public $clasificacion = 'clasificacion_p';

	public function __construct(){
		
	}

	function findall(){
		$this->db->select();
		$this->db->from($this->table);

		$query = $this->db->get();
		return $query->result();
	}

	function find_clasificacion($id){
		$this->db->select();
		$this->db->from($this->table);
		$this->db->where($this->clasificacion, $id);

		$query = $this->db->get();
		return $query->result();	
	}
}
