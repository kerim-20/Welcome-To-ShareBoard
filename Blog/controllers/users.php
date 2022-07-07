<?php
//Class users
class Users extends Controller{
	//Method for register 
	protected function register(){
		//Calling UserMobile class
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(), true);
	}

	//Method for login
	protected function login(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->login(), true);
	}

	//Method for logout
	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}
}