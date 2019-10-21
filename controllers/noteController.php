<?php 
class NoteController{

	public function list(){
		//Model
		require_once 'models/note.php';

		//controller logic
		$note = new Note();
		$notes = $note->getAll('note');

		//view
		require_once 'views/note/list.php';
	}

	public function create(){
		//Model
		require_once 'models/note.php';

		$note = new Note();
		$note->setUser_id(1);
		$note->setTitle("Note from PHP MVC");
		$note->setDescription("note description");
		$save = $note->save();

		header ("Location: index.php?controller=note&action=list");

	}
	public function delete(){

	}

}


 ?>