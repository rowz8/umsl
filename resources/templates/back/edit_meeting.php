<?php

if(isset($_GET['id'])) {
  // gives me an error on  WHERE user_id 
  $query = query("SELECT * FROM meetings WHERE meeting_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

  while($row = fetch_array($query)) {

    $meeting_title          = escape_string($row['meeting_title']);
    $meeting_description    = escape_string($row['meeting_description']);
    $meeting_location       = escape_string($row['meeting_location']);
    $meeting_date           = escape_string($row['meeting_date']);
    $meeting_time           = escape_string($row['meeting_time']); 
    $meeting_month          = escape_string($row['meeting_month']);
    $meeting_day            = escape_string($row['meeting_day']);


   
  }
  update_meeting();
  }
  ?>

   <h1 style = "color: #9a1e35" class="page-header"> Edit Meetings <small style = "color: #ebab04" > Page </small> </h1>

    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4> 

    <div class="col-md-6 user_image_box">
    
    

</div>


<form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
                <div class="form-group">
                    <label for="meeting-title">Meeting Title </label>
                        <input type="text" name="meeting_title" class="form-control" required value="<?php echo $meeting_title; ?>">

                </div>


    <div class="form-group">
           <label for="meeting-description">Meeting Description</label>
      <textarea name="meeting_description" id="" cols="30" rows="10" class="form-control" required > <?php echo $meeting_description; ?></textarea>
    </div>

    <div class="form-group">
           <label for="meeting-location">Meeting Location</label>
      <textarea name="meeting_location" id="" cols="30" rows="3" class="form-control" required > <?php echo $meeting_location; ?></textarea>
    </div>

    

  </div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     <div class="form-group">
        <?php show_buttons3(); ?>
       <!-- <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft"> -->
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
    </div>
        <hr>

     <!-- Meeting Date -->

    <div class="form-group">
         <label for="meeting-title">Date</label>
             <input type="date" name="meeting_date" class="form-control" required value=" <?php echo $meeting_date; ?>">

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
        <input type="time" name="meeting_time" class="form-control" required value=" <?php echo $meeting_time; ?>" >
    </div>

    <div class="form-group">
    <label for="meeting-title">Month</label>
           <select name="meeting_month" id="" class="form-control" required >
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


<?php function show_buttons3(){ 
  if(isset($_GET['id'])){
   
  $show = <<<DELIMETER

    <td><a class = "btn btn-danger btn-lg"  style= "text-center" href ="index.php?delete_meeting_id={$_GET['id']}">Delete</a></td>
    

DELIMETER;
    } echo $show;


}
?>