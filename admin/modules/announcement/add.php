                      <?php 
                         if (!isset($_SESSION['USERID'])){
                              redirect(web_root."admin/index.php");
                             }

                       ?> 
                     <form class="form-horizontal span6" action="controller.php?action=add" method="POST" style="margin-top: 20px;"> 
                        <div class="row">
                           <div class="col-lg-12">
                              <h1 class="page-header">Add New Announcement</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                         </div>

                       <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "AnnouncementContent">Announcement:</label>

                          <div class="col-md-8">
                            <textarea  class="form-control input-sm" id="AnnouncementContent" name="AnnouncementContent" placeholder=
                                "Announcement Content" type="text" rows="20" cols="50"></textarea>
                            
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