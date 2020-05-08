<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Training Profile System | Register</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
  <style type="text/css">
    #title-header {
  background-color: #dddddd; 
  border-bottom: 1px solid #ddd; 
  height: 130px;  
  padding: 10px 0px;
  text-align: center;
  color: #000000;
  font-size: 18px;
}
 
  </style>
<section id="title-header">
  <div class="title">  
     <h1 style=text-align:center;>REGISTRATION</h1>
  </div>
</section> 
<div class="container" style="min-height: 500px;">  
      <p class="page-header" style="font-size: 30px;">Create an account</p>
      <?php check_message(); ?>
    <div id="login-dp">
		<form class="form-horizontal span6" action="" method="POST" enctype="multipart/form-data" id="login-nav">
		
                <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" oninput="this.value = this.value.toUpperCase()" value="" required>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" oninput="this.value = this.value.toUpperCase()" value=""  required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "Gender">Gender:</label>

                      <div class="col-md-8">
                         <input type="radio" name="Gender" value="Male" required> Male &nbsp; 
						 <input type="radio" name="Gender" value="Female" required> Female
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "ICNum">IC Number:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" maxlength="12" id="ICNum" name="ICNum" placeholder=
                            "IC Number" type="text" value="" required>
                      </div>
                    </div>
                  </div> 
				  
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "Age">Age:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" maxlength="2" id="Age" name="Age" placeholder=
                            "Age" type="text" value="" required>
                      </div>
                    </div>
                  </div>				  

                   <!-- <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "BDay">Birthday:</label>

                      <div class="col-md-8">
							<select name="BDay_Day" id="BDay_Day">
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
 
							<select id="BDay_Month" name="BDay_Month">
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
 
							<select name="BDay_Year" id="BDay_Year">
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
                  </div> -->				  
  
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Address" type="text" oninput="this.value = this.value.toUpperCase()"  value=""  required>
                      </div>
                    </div>
                  </div> 
                 
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Contact Number" type="text" value="" required>
                      </div>
                    </div>
                  </div> 				

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "Email">Email Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="Email" name="Email" placeholder=
                            "Email Address" type="text" value="">
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "BType">Business Type:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="BType" name="BType" placeholder=
                            "Business Type" type="text" oninput="this.value = this.value.toUpperCase()"  value="" required>					  
                      </div>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "Occupation">Occupation:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="Occupation" name="Occupation" placeholder=
                            "Occupation" type="text" oninput="this.value = this.value.toUpperCase()"  value="" required>					  
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "FModule">Finished Module:</label>

                      <div class="col-md-8">
						<input type="checkbox" id="FModule" name="FModule[]" value="Computer_101"/> Computer 101 &nbsp;
						<input type="checkbox" id="FModule" name="FModule[]" value="Photoshop"/> Adobe Photoshop &nbsp;
						<input type="checkbox" id="FModule" name="FModule[]" value="Rural_ICT"/> Rural ICT &nbsp;
						<input type="checkbox" id="FModule" name="FModule[]" value="Microsoft_Office"/> Microsoft Office </br>
						<input type="checkbox" id="FModule" name="FModule[]" value="Animation"/> Animation &nbsp;
						<input type="checkbox" id="FModule" name="FModule[]" value="Videography"/> Videography &nbsp;
						<input type="checkbox" id="FModule" name="FModule[]" value="Photography"/> Photography &nbsp;
						<input type="checkbox" id="FModule" name="FModule[]" value="AutoCAD"/> AutoCAD &nbsp;
                      </div>
                    </div>
                  </div> 				  
                  
				  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for="OKU">Disability:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="OKU" name="OKU" placeholder="Disability" type="text" value="NONE">
                      </div>
                    </div>
                  </div>
				  
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for="USERNAME">Username:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder="Username" type="text" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for="PASS">Password:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PASS" name="PASS" placeholder="Password" type="password" value="">
                      </div>
                    </div>
                  </div>
  
                 <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button type="submit" name="btnRegister" class="btn btn-primary btn-sm">Register</button><br><br>
                        <a href="login.php"><i class="fa fa-arrow-left"></i> Back to Login</a>
                           
                     </div>
                    </div>
                  </div> 
        
 
          
        </form>
    </div>
</div>

<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
	$student->Gender         = $_POST['Gender'];
	$student->ICNum         = $_POST['ICNum'];
	$student->Age         = $_POST['Age'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];
	$student->Email         = $_POST['Email'];
	$student->BusinessType         = $_POST['BType'];
	$student->Occupation         = $_POST['Occupation'];	
	$student->FinishedModule         = $_POST['FModule'];
	$student->OKU      = $_POST['OKU'];
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("register.php");
}

?>
 </section>
 