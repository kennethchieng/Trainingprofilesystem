<style type="text/css">
 
  .secondrow > .row {
    border: 4px solid #ddd;
    padding: 10px 20px;
    text-align: center; 
    margin: 30px;
    min-height: 50px;
     border-radius: 20%;
  }
  .imgstretch{ 
    padding: 40px 50px;
  }
  .imgstretch img {
    width: 40%;
    height: 70px;
  }

 
</style>

<div class="container">
  <h3>Administrator Panel: Welcome, <?php echo $_SESSION['NAME'];?></h3>
  
  <div class="row"> 
    <div class="col-md-5 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/lesson/index.php" title="Lessons"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/lesson1.gif"> 
         </div>
         <label>Lessons</label>
        </a>
      </div>
    </div> 
    <div class="col-md-5 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/exercises/index.php" title="Exercises"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/exercises.jpg"> 
         </div>
         <label>Exercises</label>
        </a>
      </div>
    </div>
    <div class="col-md-5 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/announcement/index.php" title="Announcements"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/bullhorn-icon.png"> 
         </div>
         <label>Announcements</label>
        </a>
      </div>
    </div> 
    <div class="col-md-5 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/score/index.php" title="Score"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/score.jpg"> 
         </div>
         <label>Student Score</label>
        </a>
      </div>
    </div> 	
	<div class="col-md-5 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/modstudent/index.php" title="Reports"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/user.png"> 
         </div>
         <label>Students</label>
        </a>
      </div>
    </div> 
       <?php if($_SESSION['TYPE']=="Administrator"){ ?>
    <div class="col-md-5 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/user/index.php" title="Manage Users"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/user.png"> 
         </div>
         <label>Manage Users</label>
        </a>
      </div>
    </div>
  <?php } ?>
  </div>
</div>