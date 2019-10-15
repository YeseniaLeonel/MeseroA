<?php
	
class consultasPersonas extends CI_Model{
	public $table = 'persona';
	public $table_id = 'email';
	public $password = 'password';

	public function __construct(){
		
	}

	function insert($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function iniciar($email, $pass){
		$this->db->select();
		$this->db->from($this->table);
		$this->db->where($this->table_id, $email);
		$this->db->where($this->password, $pass);

		$query = $this->db->get();

		//echo "$query['rolF']";
		
		return $query->row();
	}
}

?>