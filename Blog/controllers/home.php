<?php
//Class for Home and instan  method
class Home extends Controller{
	protected function Index(){
		//Calling HomeModel class
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
}