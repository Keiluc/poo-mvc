<?php 
require_once 'father-model.php';

class User extends FatherModel{
	public $firstname;
	public $lastname;
	public $email;
	public $password;

//DB ACCESS 
	public function __construct(){
		parent::__construct();
	}


//GET
	 function getFirstame(){
		return $this->firstname;
	}
	function getLastname(){
		return $this->lastname;
	}
	function getEmail(){
		return $this->email;
	}
	function getPassword(){
		return $this->password;
	}

//SET

	function setFirstame($firstname){
		$this->firstname = $firstname;
	}
	function setLastname($lastname){
		$this->lastname = $lastname;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function setPassword($password){
		$this->password = $password;
	}

}
 ?>