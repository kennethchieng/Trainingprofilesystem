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
		$title		= "Students' Score";		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;

	default :
		$content    = 'list.php';
		$title		= "Students' Score";
	}


   
 
require_once("../../navigation/navigations.php");
?>
  
