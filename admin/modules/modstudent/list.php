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
            <h1 class="page-header">List of Student <small><!--|  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |--></small> </h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    					
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>No.</th>
				  		<th><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Student ID</th>
				  		<th>Name</th>
						<th>IC No.</th>
				  		<th>Contact No.</th>
						<th>Email</th>
						<th>Business Type</th>
						<th>Finished Module</th>
				  		<th width="10%">Action</th>
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblstudent`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="3%" align="center"></td>';
						echo '<td width="8%"><input type="checkbox" name="selector[]" id="chkall" value="'.$result->StudentID.'"> ' . $result->StudentID.' </td>';
				  		echo '<td>'. $result->Fname.' ' . $result->Lname.'</td>';
						echo '<td width="8%">'. $result->ICNum.'</td>';
				  		echo '<td width="8%">'. $result->MobileNo.'</td>';
						echo '<td >'. $result->Email.'</td>';
						echo '<td>'. $result->BusinessType.'</td>';
						echo '<td>'. $result->FinishedModule.'</td>';
				  		echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->StudentID.'" class="btn btn-primary btn-xs" ><i class="fa fa-edit fa-fw" ></i></a>
				  					 <!--<a title="Delete" href="controller.php?action=delete&id='.$result->StudentID.'" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o  fa-fw"></i> </a>-->
				  					 <a title="View profile" href="index.php?view=view&id='.$result->StudentID.'" class="btn btn-primary btn-xs" ><i class="fa fa-eye" aria-hidden="true"></i></a>
									 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				 	
				</table>
				<div class="btn-group">
				<a href="index.php?view=email" name="email" target="_blank" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send email</a> 
				<a href="print.php" target="_blank" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print</a> 
				<button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				