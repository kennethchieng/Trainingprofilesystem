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
		$title		= "Announcements";		
		break;

	case 'add' :
		$content    = 'add.php';
		$title		= "Add Announcements";		
		break;

	case 'edit' :
		$content    = 'edit.php';
		$title    = 'Edit Announcements';			
		break;

	default :
		$content    = 'list.php';
		$title		= "Announcements";
	}


   
 
require_once("../../navigation/navigations.php");
?>
  
