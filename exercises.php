<h1><?php echo $title;?></h1>
<div class="col-lg-12">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">No.</th>
				<th>Exercise ID</th>
				<th>Lesson ID</th>
				<th>Chapter</th>
				<th>Title</th> 
				<th width="10%">Action</th>
			</thead>
			<tbody>
				<?php 
				$mydb->setQuery("SELECT * FROM `tbllesson` l, `tblexercise` e WHERE l.`LessonID`=e.`LessonID`");
				$cur = $mydb->loadResultList();
				
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td width="5%" align="center"></td>';
					echo '<td>'.$result->ExerciseID.'</td>';
					echo '<td>'.$result->LessonID.'</td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="index.php?q=question&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-eye"> View Exercises</i></a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>