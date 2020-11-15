<?php add_user();?>
 
  <h1 style = "color: #9a1e35" class="page-header"> Add User <small style = "color: #ebab04" > Page </small> </h1>
  <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>         

<div class="col-md-6 user_image_box">
    
<span id="user_admin" class='fa fa-user fa-4x'></span>

</div>

<form action="" method="post" enctype="multipart/form-data">

  <div class="col-md-6">

    <!-- Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" required >
            </div>

    <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control"  required >
            </div>

    <!-- Firstname -->
            <div class="form-group">
                <label for="first name">First Name</label>
                <input type="text" name="user_firstname" class="form-control" required  >
            </div> 

    <!-- Lastname -->
            <div class="form-group">
                <label for="last name">Last Name</label>
                <input type="text" name="user_lastname" class="form-control"  required >
            </div> 

            <!-- role
            <div class="form-group">
                <label for="user role">Role</label>
                <input type="text" name="user_role" class="form-control"  required >
            </div>  -->

    <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required >
            </div>

              <!-- User Role -->
         <div class="form-group lead">
                 <label for="userType">I'm a :</label>
                 <input type="radio" name="user_role" class="custom-radio" value="Team Lead" required>&nbsp; Team Lead |
                 <input type="radio" name="user_role" class="custom-radio" value="admin" required>&nbsp; Admin 
                </div>
  </div>

    <!-- Delete  -->
            <div class="form-group">
                <a id="user-id" class="btn btn-danger" href="">Delete</a>
                <input type="submit" name="add_user" class="btn btn-success pull-right" value="Add User" >
            </div>

     <!-- User Photo -->
        <div class="form-group">
            <label for="photo">User Photo</label>
            <input type="file" name="file" required >
        </div>

      
</form>

