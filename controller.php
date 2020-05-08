<?php
require_once ("include/initialize.php");
	 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {

	
	case 'edit' :
	doEdit();
	break;
	
	case 'pedit' :
	doPedit();
	break;
	
	case 'delete' :
	doDelete();
	break;
	
	case 'photos' :
	doupdateimage();
	break;

 
	}

   
 
	function doEdit(){
		if(isset($_POST['save'])){

			
			$work = New Work();
			$work->COMPANY         = $_POST['COMPANY']; 
			$work->COMADDRESS         = $_POST['COMADDRESS'];
			$work->STATUS         = $_POST['STATUS'];
			$work->DQFR_Day       = $_POST['DQFR_Day']; 
			$work->DQFR_Month         = $_POST['DQFR_Month'];
			$work->DQFR_Year        = $_POST['DQFR_Year'];
			$work->ANNUALINCOME      = $_POST['ANNUALINCOME']; 
			$work->update($_POST['No']);	
 

			message("Work details has been updated!", "success");
			redirect("index.php?q=profile");			
		}
	}
	
	function doPedit(){
		if(isset($_POST['save'])){

			$student = New Student(); 
			$student->Fname         = $_POST['Fname']; 
			$student->Lname         = $_POST['Lname'];
			$student->ICNum         = $_POST['ICNum'];
			$student->Address       = $_POST['Address']; 
			$student->MobileNo         = $_POST['ContactNo'];
			$student->Email         = $_POST['Email'];	
			$student->FinishedModule         = $_POST['FModule'];
			$student->update($_POST['StudentID']);	

			message("User details has been updated!", "success");
			redirect("index.php?q=profile");			
		}
	}

	function doDelete(){
	
			$id = 	$_Get['No'];

			$user = New User();
	 		$user->delete($id);
			 
			message("User already Deleted!","info");
			redirect('index.php');
  


	}
	
	function doupdateimage(){
		
 		$fp = fopen($_FILES['photo']['tmp_name'], "r");
 
   if ($fp) {
 
				$content = fread($fp, $_FILES['photo']['size']);
 
				fclose($fp);
 
				$content = addslashes($content);

				$student = New Student();
				$student->STUDPIC 			=  $content;
				$student->update($_POST['StudentID']);
				redirect("index.php?q=view&id=".$_POST['StudentID']);

				$image = $_FILES['photo'] ;
				print_r($image);
				$name = $_FILES['photo']['name'] ;
				$image = addslashes(file_get_contents($_FILES['photo']['tmp_name'])) ; 

				$student = New Student();
				$student->PROIMAGE 			=  $name;
				$student->image 			=  $image;
				$student->update($_POST['StudentID']);
 
				$errofile = $_FILES['photo']['error'];
				$type = $_FILES['photo']['type'];
				$temp = $_FILES['photo']['tmp_name'];
				$myfile =$_FILES['photo']['name'];
				$location=  "student_image/".$myfile;

					if ( $errofile > 0) {
					message("No Image Selected!", "error");
					redirect("index.php?q=view&id=".$_POST['StudentID']);
					}else{
	 
							@$file= $_FILES['photo']['tmp_name'];
							@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
							@$image_name= addslashes($_FILES['photo']['name']); 
							@$image_size= getimagesize($_FILES['photo']['tmp_name']);

							if ($image_size==FALSE ) {
							message("Uploaded file is not an image!", "error");
							redirect("index.php?q=view&id=".$_POST['StudentID']);
							}else{
			
									//uploading the file
									move_uploaded_file($temp, "student_image/" . $myfile);
		 	
									$student = New Student();
									$student->PROIMAGE 			= $location;
									$student->image 			=  $image;
									$student->update($_POST['StudentID']);

									$student = New Student();
									$student->STUDPIC 			= $_FILES['photo']['name'];
									$student->update($_POST['StudentID']);

									redirect("index.php?q=view&id=".$_POST['StudentID']);								
								}
						} 
			}
	}

?>