<?php

if(isset($_GET['id'])) {
  // gives me an error on  WHERE user_id 
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

    <!-- Delete  -->
            <div class="form-group">
                <?php show_buttons(); ?>
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                
            </div>

     <!-- User Photo -->
        <div class="form-group">
            <label for="photo">User Photo</label>
            <input type="file" name="file">
        </div>
  </div>
</form>

<?php function show_buttons(){ 
  if(isset($_GET['id'])){
   
  $show = <<<DELIMETER

    <td><a class = "btn btn-danger"  style= "text-center" href ="index.php?delete_user_id={$_GET['id']}">Delete</a></td>
    

DELIMETER;
    } echo $show;


}
?>