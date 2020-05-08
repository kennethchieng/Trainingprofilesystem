<?php
require_once("../../../include/initialize.php");
//checkAdmin();
	# code...
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 
	switch ($view) {

	case 'list' :
		$content    = 'list.php';
		$title		= "Students";
		break;

	case 'edit' :
		$content    = 'edit.php';
		$title		= "Edit Student";		
		break;

	case 'view' :
		$content    = 'view.php';
		$title		= "Student's Profile";
		break;

	case 'email' :
		$content    = 'email.php';
		$title		= "Email";
		break;

	default :
		$content    = 'list.php';
		$title		= "Students";
	}
   
require_once("../../navigation/navigations.php");
?>
  
