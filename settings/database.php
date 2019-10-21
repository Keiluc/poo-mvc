<?php 
class database{
	public static function conect(){
		$conexion = new mysqli ("localhost", "root", "", "mvc_db" );
		$conexion->query("SET NAMES 'utf8'");

		return $conexion;
	}
}

 ?>