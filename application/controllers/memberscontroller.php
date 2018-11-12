<?php

class MembersController extends Controller{

	public $userObject;

   	public function users($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
   	}

	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}

}

?>
