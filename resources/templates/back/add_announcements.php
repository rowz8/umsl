<?php add_meeting(); ?>
    <div class="col-md-12">
    <div class="row">
    <h1 style = "color: #9a1e35" class="page-header">Add Announcement</h1>
    <h4><?php display_message(); ?></h4>
    </div>
        

    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
                <div class="form-group">
                    <label for="meeting-title">Meeting Title </label>
                        <input type="text" name="meeting_title" class="form-control" required>

                </div>


    <div class="form-group">
           <label for="meeting-description">Meeting Description</label>
      <textarea name="meeting_description" id="" cols="30" rows="10" class="form-control"required></textarea>
    </div>

    <div class="form-group">
           <label for="meeting-location">Meeting Location</label>
      <textarea name="meeting_location" id="" cols="30" rows="3" class="form-control"required></textarea>
    </div>

    

  </div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     <div class="form-group">
       <!-- <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft"> -->
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>
        <hr>

     <!-- Meeting Date -->

    <div class="form-group">
         <label for="meeting-title">Date</label>
             <input type="date" name="meeting_date" class="form-control"required>

    </div>

    <div class="form-group">
          <label for="meeting-time"> Time </label>
        <input type="time" name="meeting_time" class="form-control" required>
    </div>

    <hr>
    

</aside><!--SIDEBAR-->


    
</form>

 <h6 class="text-center">Help     <!-- Button trigger modal -->
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
        <span class ="glyphicon glyphicon-info-sign"></span>
        </button>
    </h6>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Guide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <li> <strong> Add a Meeting </strong>
                <ol>
                <li> This page will allow you to create new meetings</li>
                <img src="../../resources/uploads/add_meeting_page.png" alt="" width="100%">
                <li>The meeting’s fiels are all required in order to add a meeting. </li>
                <li>To add a new Meeting click the <span><img src="../../resources/uploads/publish_btn.png" alt="" width="10%"></span> button </li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>