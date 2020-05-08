<?php
check_message(); 
?> 
<style type="text/css">
	#example {
		white-space: nowrap;
	}
</style>
  <div class="row">
      <div class="col-lg-12"> 
            <h1 class="page-header">Student Score <!--<small>|  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |</small>--> </h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>No.</th>
				  		<th>Student ID</th>
						<th>Lesson ID</th>
				  		<th>Exercise ID</th>
				  		<th>Score</th>
						<th>Submitted</th>
						<th>Submitted On</th>
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblscore`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="3%" align="center"></td>';
						echo '<td width="7%">'.$result->StudentID. '</td>';
				  		echo '<td width="7%">'.$result->LessonID.'</td>';
						echo '<td width="10%">'.$result->ExerciseID.'</td>';
				  		echo '<td>'.$result->Score.'</td>';
						echo '<td>'.$result->Submitted.'</td>';
						echo '<td>'.date_format(date_create($result->SubmittedOn), "d / m / Y @ h:i A").'</td>';		
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				 	
				</table>
				<div class="btn-group">
				<!--<a href="print.php" target="_blank" class="btn btn-default">PRINT</a> -->
				<!--  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>-->
				</div>
				</form> 