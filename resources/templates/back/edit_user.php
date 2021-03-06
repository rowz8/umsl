<?php

if(isset($_GET['id'])) {
  
  $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

  while($row = fetch_array($query)) {

    $username               = escape_string($row['username']); 
    $password               = escape_string($row['password']);
    $email                  = escape_string($row['email']);
    $user_firstname         = escape_string($row['user_firstname']);
    $user_lastname          = escape_string($row['user_lastname']); 
    $role                   = escape_string($row['user_role']);
    $user_photo             = escape_string($row['user_photo']);
    $user_photo             = display_image($row['user_photo']);
    $user_team              = escape_string($row['user_team']);
    $user_brief              = escape_string($row['user_brief']);
  
  }
  update_user();
}

?>

   <h1 style = "color: #9a1e35" class="page-header"> Edit User <small style = "color: #ebab04" > Page </small> </h1>

    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4> 

<div class="col-md-6 user_image_box">
    
<span id="user_admin" class='fa fa-user fa-4x'></span>

</div>


<form action="" method="post" enctype="multipart/form-data">

  <div class="col-md-6">

    <!-- Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
            </div>

    <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
            </div>

    <!-- Firstname -->
            <div class="form-group">
                <label for="first name">First Name</label>
                <input type="text" name="user_firstname" class="form-control" value="<?php echo $user_firstname; ?>">
            </div> 

    <!-- Lastname -->
            <div class="form-group">
                <label for="last name">Last Name</label>
                <input type="text" name="user_lastname" class="form-control" value="<?php echo $user_lastname; ?>">
            </div> 

             <!-- User-Role -->
            <div class="form-group">
                <label for="user role">Role</label>
                <!-- <input type="radio" name="user_role" class="form-control" value="<?php echo $role; ?>"> -->
                 <input type="radio" name="user_role" class="custom-radio" value="Team Lead" required>&nbsp; Team Lead |
                 <input type="radio" name="user_role" class="custom-radio" value="admin" required>&nbsp; Admin 
            </div> 
    <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
            </div>
    <!-- User Meet Team Display -->
                <div class="form-group">
                 <label for="userType">Do you want to display the user at the team Page?</label>
                 <input type="radio" name="user_team" class="custom-radio" value="1" required>&nbsp; Yes |
                 <input type="radio" name="user_team" class="custom-radio" value="0" required>&nbsp; No 
                </div>

    <!-- Password -->
            

    <!-- User Brief -->
            <div class="form-group">
                <label for="user brief">Brief Description: </label>
                <input type="text" name="user_brief" class="form-control" value="<?php echo $user_brief; ?>" >
            </div>

    <!-- Delete  -->
            <div class="form-group">
                <?php show_buttons2(); ?>
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                
            </div>

     <!-- User Photo -->
        <div class="form-group">
            <label for="photo">User Photo</label>
            <input type="file" name="file">
        </div>
  </div>
</form>

<?php function show_buttons2(){ 
  if(isset($_GET['id'])){
   
  $show = <<<DELIMETER

    <td><a class = "btn btn-danger"  style= "text-center" href ="index.php?delete_user_id={$_GET['id']}">Delete</a></td>
    

DELIMETER;
    } echo $show;


}
?>

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
            <li> <strong> Add Users </strong>
                <ol>
                <li> This page will allow you to edit the users information.</li>
                <img src="../../resources/uploads/edit_user_page.png" alt="" width="100%">
                <li>To edit an User make the necessary corrections on the corresponded fields.</li>
                <li>If not corrections are needed just click the update button</li>
                <li>Select the role the user will have under the website.</li>
                <li>Select whether this user will be put on the team page by clicking YES or NO.</li>
                <li>Enter a brief description to display at the Meet the Team Page</li>
                <li>To change a photo, under USER PHOTO click on CHOOSE FILE button and upload it from your computer.</li>
                <li>To update the user click the Update <span><img src="../../resources/uploads/update_btn.png" alt="" width="9%"></span> button </li>
                <li>To delete the user click the Delete an User <span><img src="../../resources/uploads/delete_btn.png" alt="" width="9%"></span> button </li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>