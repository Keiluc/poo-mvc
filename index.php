<h1>Welcome to my Website with MVC</h1>
<?php 
require_once 'autoload.php';

//Front Controller
if (isset($_GET['controller'])) {
	$name_controller = $_GET['controller'].'Controller';
}else{
	echo "The page doesn't exist";
	exit();
}


if(class_exists($name_controller)){
	$controller = new $name_controller();	

	if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
		$action = $_GET['action'];
		$controller->$action();

	}else{
		echo "The page doesn't exist";
	}


}else{
	echo "The page doesn't exist";
}







 ?>