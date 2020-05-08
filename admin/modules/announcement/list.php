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
            <h1 class="page-header">Announcements <small>|  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |</small> </h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>No.</th>
				  		<th>Date</th>
						<th>Time</th>
				  		<th>Announcements</th>
				  		<th width="10%">Action</th>
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblannouncement`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="5%" align="center">'.$result->AnnouncementID. '</td>';
				  		echo '<td width="10%">'. date_format(date_create($result->AnnouncementDate), "d / m / Y") .'</td>';
						echo '<td width="7%">'. date_format(date_create($result->AnnouncementTime), "h:i A").'</td>';
				  		echo '<td>'. $result->AnnouncementContent.'</td>';
				  		echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->AnnouncementID.'" class="btn btn-primary btn-xs" ><i class="fa fa-edit fa-fw" ></i></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->AnnouncementID.'" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o  fa-fw"></i> </a>
									 </td>';
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