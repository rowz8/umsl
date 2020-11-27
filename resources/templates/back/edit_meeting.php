<?php

if(isset($_GET['id'])) {
  
  $query = query("SELECT * FROM meetings WHERE meeting_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

  while($row = fetch_array($query)) {

    $meeting_title          = escape_string($row['meeting_title']);
    $meeting_description    = escape_string($row['meeting_description']);
    $meeting_location       = escape_string($row['meeting_location']);
    $meeting_date           = escape_string($row['meeting_date']);
    $meeting_time           = escape_string($row['meeting_time']); 
  
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

   
    <!-- Meeting Attributes-->


    <div class="form-group">
          <label for="meeting-time"> Time </label>
        <input type="time" name="meeting_time" class="form-control" required value=" <?php echo $meeting_time; ?>" >
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