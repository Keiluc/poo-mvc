<?php 

require_once 'settings/database.php';

class FatherModel{

	public $db;

	public function __construct(){
		$this->db = database::conect();
	}

	public function getAll($table){
		$query = $this->db->query("SELECT * FROM $table ORDER BY id DESC");
		return $query;
	}
}


 ?>