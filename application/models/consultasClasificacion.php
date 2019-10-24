<?php
	
class consultasClasificacion extends CI_Model{
	public $table = 'clasificacion';
	public $table_id = 'ID_clasificacion';

	public function __construct(){
		
	}

	public function findall(){
		$this->db->select();
		$this->db->from($this->table);

		$query = $this->db->get();
		return $query->result();
	}
}

?>