<?php
require_once("../../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content    = 'list.php';
		$title ="Admin";
		break;

	case 'add' :
		$content    = 'add.php';
		$title    = "Add Admin";		
		break;

	case 'edit' :
		$content    = 'edit.php';
		$title    = "Edit Admin";		
		break;

	default :
		$content    = 'list.php';
		$title ="Admin";
}
require_once("../../navigation/navigations.php");
?>
  
