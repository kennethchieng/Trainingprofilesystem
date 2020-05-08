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
            <li><a href="#workstat" data-toggle="tab">Work Details</a></li>
			<li><a href="#myModal" data-toggle="modal">Upload Profile Photo</a></li>
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
						<th width="10%">Action</th>						
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
                        echo '<td>'. $result->ANNUALINCOME.'</td>';
						echo '<td > <a title="Edit" href="index.php?q=edit&id='.$result->No.'" class="btn btn-primary btn-xs" ><i class="fa fa-edit fa-fw" ></i></a></td>';						
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
				<div class="container" style="min-height: 500px;">

<div id="login-dp">
<form class="form-horizontal span6" action="workdetails.php" method="POST" enctype="multipart/form-data" id="login-nav">
</br><h3><?php echo $title2;?>:</h3>
                <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "COMPANY">Company Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANY" name="COMPANY" placeholder=
                            "Company Name" type="text" oninput="this.value = this.value.toUpperCase()" value="" required>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "COMADDRESS">Company Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMADDRESS" name="COMADDRESS" placeholder=
                            "Company Address" type="text" oninput="this.value = this.value.toUpperCase()" value=""  required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "STATUS">Status:</label>

                      <div class="col-md-8">
                         <input type="radio" name="STATUS" value="Employed" required> Employed &nbsp; 
						 <input type="radio" name="STATUS" value="Quit" required> Quit &nbsp;
						 <input type="radio" name="STATUS" value="Fired" required> Fired &nbsp;
						 <input type="radio" name="STATUS" value="Retired" required> Retired 
                      </div>
                    </div>
                  </div> 				 				 

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "DHired" >Date Hired:</label>

                      <div class="col-md-8">
							<select name="DHired_Day" id="DHired_Day" required>
								<option value="-1">Day</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
 
							<select id="DHired_Month" name="DHired_Month" required>
								<option value="-1">Month</option>
								<option value="January">Jan</option>
								<option value="February">Feb</option>
								<option value="March">Mar</option>
								<option value="April">Apr</option>
								<option value="May">May</option>
								<option value="June">Jun</option>
								<option value="July">Jul</option>
								<option value="August">Aug</option>
								<option value="September">Sep</option>
								<option value="October">Oct</option>
								<option value="November">Nov</option>
								<option value="December">Dec</option>
							</select>
 
							<select name="DHired_Year" id="DHired_Year" required>
								<option value="-1">Year</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
							</select>
                      </div>
                    </div>
				</div>

				  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "DQFR">End Date(Optional):</label>

                      <div class="col-md-8">
							<select name="DQFR_Day" id="DQFR_Day">
								<option value="">Day</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
 
							<select id="DQFR_Month" name="DQFR_Month">
								<option value="">Month</option>
								<option value="January">Jan</option>
								<option value="February">Feb</option>
								<option value="March">Mar</option>
								<option value="April">Apr</option>
								<option value="May">May</option>
								<option value="June">Jun</option>
								<option value="July">Jul</option>
								<option value="August">Aug</option>
								<option value="September">Sep</option>
								<option value="October">Oct</option>
								<option value="November">Nov</option>
								<option value="December">Dec</option>
							</select>
 
							<select name="DQFR_Year" id="DQFR_Year">
								<option value="">Year</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
							</select>
                      </div>
                    </div>
                  </div>
  
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "ANNUALINCOME">Annual Income:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="ANNUALINCOME" name="ANNUALINCOME" placeholder=
                            "RM" type="text" oninput="this.value = this.value.toUpperCase()"  value="RM "  required>
                      </div>
                    </div>
                  </div> 
                 
                 <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
						<button class="btn btn-md btn-primary" type="submit" name="btnSubmit"><i class="fa fa-upload fw-fa"></i> Add</button>
                     </div>
                    </div>
                  </div>          
</form>
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
  