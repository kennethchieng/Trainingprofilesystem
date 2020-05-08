<!-- <h1><?php echo $title;?></h1> -->
<h3 style="text-align: center;font-weight: bold;text-transform:uppercase">Welcome, <?php echo $_SESSION['Fname'].' '.$_SESSION['Lname'];?></h3> <br>
<div class="col-lg-12">  
<h2 style="font-weight: bold;">Modules available:</h2></br>
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>No.</th> 
						<th>LesssonID</th>
				  		<th>Chapter</th> 
				  		<th>Title</th>
						<th>Status</th>
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tbllesson`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="3%" align="center"></td>';
						echo '<td>'.$result->LessonID. '</td>';
				  		echo '<td>'.$result->LessonChapter. '</td>'; 
				  		echo '<td>'. $result->LessonTitle.'</td>'; 
				  		echo '<td style="font-weight: bold;font-style: italic;">'. $result->Status.'</td>';						
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>	
				</table>			 
</div>

<div class="col-lg-12">  
</br><h2 style="font-weight: bold;">Announcements: </h2></br>							
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>No.</th> 
				  		<th>Date</th>
						<th>Time</th>
				  		<th>Announcements</th>
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblannouncement`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="3%" align="center">'.$result->AnnouncementID. '</td>';
				  		echo '<td width="10%">'. date_format(date_create($result->AnnouncementDate), "d / m / Y") .'</td>';
						echo '<td width="7%">'. date_format(date_create($result->AnnouncementTime), "h:i A").'</td>';
				  		echo '<td>'. $result->AnnouncementContent.'</td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				 	
				</table>		 
</div>
<!--<div  class="col-lg-6">
  <h4></h4> 
    <ul>
      <li></li>
      <li></li>
      <li></li>  
    </ul>
<h4></h4>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>  
  </ul> 
<h4></h4> 
<ol>
    <li></li> 
    <li></li> 
    <li></li> 
    <li></li> 
    <li></li> 
    <li></li>  
</ol>
</div>-->
 

