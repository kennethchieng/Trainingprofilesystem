<?php  
  @$StudentID = $_GET['id'];
  if($StudentID==''){
  redirect("index.php");
}
  $work = New Work();
  $singlestudent = $work->single_students($StudentID);
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
            <h1 class="page-header">Edit Work Details</h1>
        </div>
          <!-- /.col-lg-12 -->
	</div>
	
	<input  id="No" name="No"  type="hidden" value="<?php echo $singlestudent->No; ?>">
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="COMPANY">Company:</label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="COMPANY" name="COMPANY" placeholder="Company" type="text" oninput="this.value = this.value.toUpperCase()" value="<?php echo $singlestudent->COMPANY; ?>" requireds>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="COMADDRESS">Company Address:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="COMADDRESS" name="COMADDRESS" placeholder="Company Address" type="text" oninput="this.value = this.value.toUpperCase()" value="<?php echo $singlestudent->COMADDRESS; ?>" required>
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="STATUS">Status:</label>
					<div class="col-md-8">
                         <input type="radio" name="STATUS" value="Employed" checked> Employed &nbsp; 
						 <input type="radio" name="STATUS" value="Quit"> Quit &nbsp;
						 <input type="radio" name="STATUS" value="Fired"> Fired &nbsp;
						 <input type="radio" name="STATUS" value="Retired"> Retired 
                    </div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="DQFR">Date Quited/Fired/Retired:</label>
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
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="ANNUALINCOME">Annual Income:</label>
					<div class="col-md-8">
                         <input class="form-control input-sm" id="ANNUALINCOME" name="ANNUALINCOME" placeholder="Annual Income" type="text" oninput="this.value = this.value.toUpperCase()" value="<?php echo $singlestudent->ANNUALINCOME; ?>" required>
                    </div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="No"></label>
					<div class="col-md-8">
                        <button class="btn btn_kcctc" name="save" type="submit" >Save</button> 
                        <!--<a href="index.php?view=view&id=<?php echo $StudentID; ?>" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Student Profile</a>-->
                    </div>
			</div>
		</div>
 
<!--/.fluid-container-->
 
</form>