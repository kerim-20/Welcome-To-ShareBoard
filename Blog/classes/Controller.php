<?php
//Abstract class for Controller
abstract class Controller{

	//Properties
	protected $request;
	protected $action;

	//Contructor
	public function __construct($action, $request){
		$this->action = $action;
		$this->request = $request;
	}
	
	public function executeAction(){
		return $this->{$this->action}();
	}

	protected function returnView($viewmodel, $fullview){
		$view = 'views/'. get_class($this). '/' . $this->action. '.php';
		if($fullview){
			require('views/main.php');
		} else {
			require($view);
		}
	}
}