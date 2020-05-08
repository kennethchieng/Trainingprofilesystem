<?php
require_once ("../../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break; 

	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){
 
			$announcement = New Announcement();  
			$announcement->AnnouncementContent				= $_POST['AnnouncementContent']; 
			$announcement->create(); 

			message("New announcement created successfully!", "success");
			redirect("index.php");
		 
		}

	}

	function doEdit(){
		global $mydb;
		if(isset($_POST['save'])){


			$announcement = New Announcement();   
			$announcement->AnnouncementContent				= $_POST['AnnouncementContent']; 
			$announcement->update($_POST['AnnouncementID']);

			message("Announcement has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){
			global $mydb;
		
				$id = 	$_GET['id'];

				$announcement = New Announcement();
	 		 	$announcement->delete($id);

				$sql = "DELETE FROM tblstudentquestion  WHERE ExerciseID='{$id}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();
			 
			message("Announcement deleted","info");
			redirect('index.php');
	 
		
	}
?>