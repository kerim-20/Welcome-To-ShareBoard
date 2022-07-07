<?php
// Start Session
session_start();

// Include Config
require('config.php');

//Classes require
require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

//Controllers require
require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

//Models require
require('models/home.php');
require('models/share.php');
require('models/user.php');

//Calling bootstrap class
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}