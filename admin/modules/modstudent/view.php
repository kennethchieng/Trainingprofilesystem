<?php  
  @$StudentID = $_GET['id'];
  if($StudentID==''){
  redirect("index.php");
}
  $student = New Student();
  $singlestudent = $student->single_students($StudentID);
?>
  
<div class="row">
	<div class="col-lg-12">
        <h1 class="page-header">Student Profile</h1>
	</div>
          <!-- /.col-lg-12 -->
</div>
 
<div class="col-sm-3"><!--left col-->
	<div class="panel panel-default">            
		<div class="panel-body">
          <!--    <a href="" data-target="#myModal"  data-toggle="modal" > 
              <img title="profile image" width="223" height="250" src="<?php echo web_root.'admin/modules/modstudent/'.$singlestudent->PROIMAGE ?>">  
            </a> -->
               <a href="#" style="width:205;height:20" > 
              <img title="profile image" width="100%" height="40%" src="<?php echo web_root.$singlestudent->PROIMAGE ?>">  
            </a>
		</div>
		<ul class="list-group">
			<li class="list-group-item text-muted">Photo</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span><?php echo date_format(date_create($singlestudent->joined), "d/m/Y");?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span><strong><?php echo $singlestudent->Fname .'  '.$singlestudent->Lname; ?></strong></li>
		</ul>    
	</div>
</div> 

<div class="col-sm-9">
<?php
check_message();
?>

	<h2><?php echo $singlestudent->Fname .'  '.$singlestudent->Lname; ?></h2>
		<ul class="nav nav-tabs " id="myTab">
            <li class="active"><a href="#basicInfo" data-toggle="tab">Information</a></li>
            <li><a href="#workstat" data-toggle="tab">Work Status</a></li>
			<!--<li><a href="#myModal" data-toggle="modal">Profile Photo</a></li>-->
		</ul>
              
	<div class="tab-content">
		<div class="tab-pane active" id="basicInfo"><br/>
			<ul class="list-group bottomline">  
				<li class="list-unstyled text-left">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group ">
								<strong>ID Number </strong>
								<?php echo ': '.$singlestudent->StudentID; ?>
							</div> 
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group ">
								<strong>Business Type</strong>
								<?php echo ': '. $singlestudent->BusinessType; ?>
							</div> 
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group">
								<strong>Occupation </strong>
								<?php echo ': '.$singlestudent->Occupation; ?> 
							</div>
						</div>
					</div>
				</li> 

				<li class="list-unstyled text-left">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group "><strong>First Name</strong>
							<?php echo ': '.$singlestudent->Fname; ?></div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group"><strong>Last Name </strong>
							<?php echo ': '.$singlestudent->Lname; ?></div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group">
								<strong>IC Number </strong>
								<?php echo ': '.$singlestudent->ICNum; ?> 
							</div>
						</div>
						
					</div>
				</li>
		
				<li class="list-unstyled text-left">
					<div class="form-group ">
						<strong>Finished Module</strong>
						<?php echo ': '. $singlestudent->FinishedModule; ?>
					</div>
				</li> 
				<li class="list-unstyled text-left">
					<div class="form-group ">
						<strong>Address </strong>
						<?php echo ': '.$singlestudent->Address; ?> 
					</div>
				</li> 
                   
				<li class="list-unstyled text-left"> 
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group ">
								<strong>Email Address </strong>
								<?php echo ': '.$singlestudent->Email; ?>
							</div>
						</div>				   
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group ">
								<strong>Contact Number</strong>
								<?php echo ': '.$singlestudent->MobileNo; ?>
							</div>
						</div>
                  </div>  
                </li>

				<!--<li class="list-unstyled text-left">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group ">
								<strong>Father</strong> 
								<?php echo ': '.$singleparents->FATHER; ?>   
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<strong>Occupation</strong>
								<?php echo ': '.$singleparents->FOCCUPATION; ?> 
							</div>
						</div>
					</div>
				</li>-->

                <!--<li class="list-unstyled text-left">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group ">
								<strong>Mother</strong> 
								<?php echo ': '.$singleparents->MOTHER; ?>   
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<strong>Occupation</strong>
								<?php echo ': '.$singleparents->MOCCUPATION; ?> 
							</div>
						</div>
                  </div>
                </li>-->

				<li class="list-unstyled text-left">
					<div class="row">
						<!--<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group ">
								<strong>Rank in the Family</strong> 
								<?php echo ': '.$singleparents->RANKFAMILY; ?>
							</div>
						</div>--> 
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group ">
								<strong>Disability</strong> 
								<?php echo ': '.$singlestudent->OKU; ?>
							</div>
                        </div>
                    </div>
				</li>
			</ul> 
		</div><!--/tab-pane-->

		<div class="tab-pane " id="workstat">
			<div class="table-responsive"> <br/>
				<form action="controller.php?action=delete" Method="POST">                      
					<table   class="table table-hover"  > 
						<thead> 
                        <!-- <th>No.</th> -->
                        <th>Company</th>
                        <th>Address</th>                       
                        <th>Status</th>
                        <th>Hired Date</th>
						<th>End Date</th>
                        <th>Annual Income</th>   
						</thead>   
						<tbody>
                    <?php 
                        $query = "SELECT * FROM `tblworkstats` WHERE  `StudentID` = '". $StudentID."'";
                        $mydb->setQuery($query);
                        $cur = $mydb->loadResultList();

                        if($cur<=0){
                          $btn= '<button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>';
                        }else{
                         foreach ($cur as $result) {
                        echo '<tr>';
                        // echo '<td width="5%" align="center"></td>';
                        echo '<td> ' . $result->COMPANY.'</td>';
                        echo '<td>'. $result->COMADDRESS.'</td>';
                        echo '<td>'. $result->STATUS.'</td>';
                        echo '<td>'.$result->DHired_Day.' '.$result->DHired_Month.' '.$result->DHired_Year.'</td>';
						echo '<td>'.$result->DQFR_Day.' '.$result->DQFR_Month.' '.$result->DQFR_Year.'</td>';
                        echo '<td>RM '. $result->ANNUALINCOME.'</td>'; 
                        echo '</tr>';
							}
						} 
                    ?>
						</tbody>
					</table>
					
					<div class="btn-group">
						<?php
						echo isset($btn);
						?>
						<!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
					</div>
                </form>
				
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                    <ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
            </div><!--/table-resp--> 
        </div><!--/tab-pane-->     
	</div><!--/tab-pane-->
</div><!--/tab-content-->
 <!-- <a href="index.php?view=testedit">Test Add Design</a> --> 
 
 
         <!-- Modal -->
                    <div class="modal fade" id="myModal" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                                </div>
                                <form action="controller.php?action=photos" enctype="multipart/form-data" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">
                                                            <input type="hidden" name="StudentID" id="StudentID" value="<?php echo $StudentID; ?>">
                                                            <input name="MAX_FILE_SIZE" type="hidden" value="100000000"><input id="photo" name="photo" type="file">
                                                        </div>
                                                        <div class="col-md-4">
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
										<button class="btn btn-primary" name="savephoto" type="submit"><i class="fa fa-upload fw-fa"></i> Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
  