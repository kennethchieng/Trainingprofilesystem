<?php
require_once("../../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'list.php';	
		$title		= "Lessons";		
		break;

	case 'add' :
		$content    = 'add.php';		
		$title		= "Add Lessons";
		break;

	case 'edit' :
		$content    = 'edit.php';		
		$title		= "Edit Lessons";
		break;
    case 'playvideo' :
 		$title="Play Video"; 
		$content    = 'playvideo.php';		
		break;
    case 'viewpdf' :
 		$title="View File"; 
		$content    = 'viewpdf.php';		
		break;
    case 'uploadfile' :
		$content    = 'uploadfiles.php';		
		break;

	default :
		$content    = 'list.php';
		$title		= "Lesson";
}
require_once("../../navigation/navigations.php");
?>
  
