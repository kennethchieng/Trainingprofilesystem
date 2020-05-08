<?php
require_once("../../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content    = 'list.php';
		$title		= "Questions";	
		break;

	case 'add' :
		$content    = 'add.php';
		$title		= "Add Questions";		
		break;

	case 'edit' :
		$content    = 'edit.php';
		$title		= "Edit Questions";
		break;
    case 'view' :
		$content    = 'view.php';
		$title		= "View Questions";		
		break;

	default :
		$content    = 'list.php';
		$title		= "Questions";		
}
require_once("../../navigation/navigations.php");
?>
  
