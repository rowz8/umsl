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
    <label for="meeting-title">Day</label>
           <select name="meeting_day" id="" class="form-control"required>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                
            </select>
    </div>
    <!-- Meeting Attributes-->


    <div class="form-group">
          <label for="meeting-time"> Time </label>
        <input type="time" name="meeting_time" class="form-control" required>
    </div>

    <div class="form-group">
    <label for="meeting-title">Month</label>
           <select name="meeting_month" id="" class="form-control"required>
                <option value="Jan">January</option>
                <option value="Feb">February</option>
                <option value="March">March</option>
                <option value="Apr">April</option>
                <option value="May">May</option>
                <option value="Jun">June</option>
                <option value="Jul">July</option>
                <option value="Aug">August</option>
                <option value="Sept">September</option>
                <option value="Oct">October</option>
                <option value="Nov">November</option>
                <option value="Dec">December</option>
                
                
            </select>
    </div>


    

    <hr>
    

</aside><!--SIDEBAR-->


    
</form>
