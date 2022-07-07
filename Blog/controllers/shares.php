<?php
//Class for shares
class Shares extends Controller{
	protected function Index(){
		//Calling ShareModel class
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}

	//For add share
	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			//Redirect
			header('Location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}
}