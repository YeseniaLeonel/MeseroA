<?php
	
class consultasBebidas extends CI_Model{
	public $table = 'Bebida';
	public $table_id = 'ID_bebida';
	public $clasificacion = 'clasificacion';

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

?>