<?php 
require_once 'father-model.php';

class Note extends FatherModel{
	public $user_id;
	public $title;
	public $description;

//DB ACCESS  
	public function __construct(){
		parent::__construct();
	}

//GET
	function getUser_id(){
		return $this->user_id;
	}
	function getTitle(){
		return $this->title;
	}
	function getDescription(){
		return $this->description;
	}

//SET

	function setUser_id($user_id){
		$this->user_id = $user_id;
	}
	function setTitle($title){
		$this->title = $title;
	}
	function setDescription($description){
		$this->description = $description;
	}

	public function save(){
		$sql = "INSERT INTO note (user_id, title, description, posted_at) VALUES({$this->user_id},'{$this->title}' ,'{$this->description}', CURDATE()); ";

		$safe = $this->db->query($sql);

		return $safe;
	}
}


 ?>