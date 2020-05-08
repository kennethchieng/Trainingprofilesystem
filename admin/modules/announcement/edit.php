<?php  
  @$StudentID = $_GET['id'];
  if($StudentID==''){
  redirect("index.php");
}
  $announcement = New Announcement();
  $singlestudent = $announcement->single_students($StudentID);
?>

                     <form class="form-horizontal span6" action="controller.php?action=edit" method="POST" style="margin-top: 20px;"> 
						<input  id="AnnouncementID" name="AnnouncementID"  type="hidden" value="<?php echo $singlestudent->AnnouncementID; ?>">
                        <div class="row">
                           <div class="col-lg-12">
                              <h1 class="page-header">Edit Announcement</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                         </div>

                       <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "AnnouncementContent">Announcement:</label>

                          <div class="col-md-8">
                            <textarea  class="form-control input-sm" id="AnnouncementContent" name="AnnouncementContent" placeholder=
                                "Announcement Content" type="text" rows="20" cols="50" value=""><?php echo $singlestudent->AnnouncementContent; ?></textarea>
                            
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "idno"></label>

                          <div class="col-md-8">
                           <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-bullhorn fw-fa"></span> Announce</button> 
                           </div>
                        </div>
                      </div> 
                      </form>