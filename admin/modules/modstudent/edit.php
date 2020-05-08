<?php  
  @$StudentID = $_GET['id'];
  if($StudentID==''){
  redirect("index.php");
}
  $student = New Student();
  $singlestudent = $student->single_students($StudentID);
?>

 
 <style type="text/css">
.sidebar-left .main{
  float:right;
}
.idebar-left .sidebar{
  float:left;
}

.sidebar-right .main{
  float:left;
}
.idebar-right .sidebar{
  float:right;
}
 
</style>
 
        
<form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  />
	<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">Edit Student's Details</h1>
        </div>
          <!-- /.col-lg-12 -->
	</div>
	
	<input  id="StudentID" name="StudentID"  type="hidden" value="<?php echo $singlestudent->StudentID; ?>">
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="Fname">First Name:</label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="Fname" name="Fname" placeholder="First Name" type="text" oninput="this.value = this.value.toUpperCase()" value="<?php echo $singlestudent->Fname; ?>" required>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="Lname">Last Name:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="Lname" name="Lname" placeholder="Last Name" type="text" oninput="this.value = this.value.toUpperCase()" value="<?php echo $singlestudent->Lname; ?>" required>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="ICNum">IC Number:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="ICNum" name="ICNum" placeholder="IC Number" type="text" maxlength="12" minlength="12" value="<?php echo $singlestudent->ICNum; ?>" required>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="ContactNo">Contact No:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="ContactNo" name="ContactNo" placeholder="Contact No" type="text" value="<?php echo $singlestudent->MobileNo; ?>" required>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="Address">Address:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="Address" name="Address" placeholder="Address" type="text" oninput="this.value = this.value.toUpperCase()" value="<?php echo $singlestudent->Address; ?>" required>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="Email">Email:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="Email" name="Email" placeholder="Email" type="text" value="<?php echo $singlestudent->Email; ?>" required>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="FinishedModule">Finished Module:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="FModule" name="FModule"  placeholder="Finished Module" type="text" value="<?php echo $singlestudent->FinishedModule; ?>" >
                    </div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="StudentID"></label>
					<div class="col-md-8">
                        <button class="btn btn_kcctc" name="save" type="submit" >Save</button> 
                        <!--<a href="index.php?view=view&id=<?php echo $StudentID; ?>" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Student Profile</a>-->
                    </div>
			</div>
		</div>
</form>

<form class="form-horizontal span6" action="" method="POST" enctype="multipart/form-data">
<input  id="StudentID" name="StudentID"  type="hidden" value="<?php echo $singlestudent->StudentID; ?>">
	<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="PASS">Password:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="PASS" name="PASS"  placeholder="Password" type="password" value="<?php echo $singlestudent->STUDPASS; ?>" >
                    </div>
			</div>
	</div>
	
	<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="StudentID"></label>
					<div class="col-md-8">
                        <button class="btn btn_kcctc" name="btnPass" type="submit" >Change Password</button> 
                    </div>
			</div>
	</div>
</form>
<?php 
	if (isset($_POST['btnPass'])) {
	# code...  

	$student = New Student(); 
	$student->STUDPASS      = sha1($_POST['PASS']);  
	$student->update($_POST['StudentID']);  

	message("You have successfully change password","success");
	redirect("index.php");
	}
?>