<?php 

class UserController{

	public function showAll(){
		
		require_once 'models/user.php';

		$user = new User();

		$all_users = $user->getAll('user');
		
		require_once 'views/users/show-all.php';

	}
	public function createNew(){
		require_once 'views/users/create-new.php';
	}
}


 ?>