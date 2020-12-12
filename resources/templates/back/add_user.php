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

                 <!-- User Meet Team Display -->
                <div class="form-group">
                 <label for="userType">Do you want to display the user at the team Page?</label>
                 <input type="radio" name="user_team" class="custom-radio" value="1" required>&nbsp; Yes |
                 <input type="radio" name="user_team" class="custom-radio" value="0" required>&nbsp; No 
                </div>

                <div class="form-group">
                <label for="user brief">Brief Description: </label>
                <input type="text" name="user_brief" class="form-control" required >
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

  </div>    
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
            <li> <strong> Add Users </strong>
                <ol>
                <li> This page will allow you to add new users to the website.</li>
                <img src="../../resources/uploads/add_user_page.png" alt="" width="100%">
                <li>To add a new User fill out the username, email, first and last name, and the password fields.</li>
                <li>Select the role the user will have under the website.</li>
                <li>Select whether this user will be put on the team page by clicking YES or NO.</li>
                <li>Enter a brief description to display at the Meet the Team Page</li>
                <li>To add a photo, under USER PHOTO click on CHOOSE FILE button and upload it from your computer.</li>
                <li>To add a user click the Add User <span><img src="../../resources/uploads/add_user_page_btn.png" alt="" width="9%"></span> button </li>
                <li>To delete a user click the Delete an User <span><img src="../../resources/uploads/delete_btn.png" alt="" width="9%"></span> button </li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>