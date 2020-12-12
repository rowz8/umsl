
<div class="col-lg-12">

    <h1 style = "color: #9a1e35" class="page-header"> Users</h1>
    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>

    <a href="index.php?add_user" class="btn btn-primary">Add User</a>


    <div class="col-md-12">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name </th>
                    <th>Role</th>
                    <th>Email</th>
                    <!-- <th>Delete</th> -->
                    <!-- <th>Edit</th> -->
                </tr>
            </thead>
            <tbody>

                <tr>

                    <?php display_users(); ?>

                </tr>


            </tbody>
        </table> <!--End of Table-->
    

    </div>

</div>

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
            <li> <strong> Users </strong>
                <ol>
                <li> This page will show a list of all users.</li>
                <img src="../../resources/uploads/users_page.png" alt="" width="100%">
                <li>To add a new User click the <span><img src="../../resources/uploads/add_user.png" alt="" width="10%"></span> button </li>
               
                <li>To Edit an User click the edit <span><img src="../../resources/uploads/edit_user.png" alt="" width="9%"></span> button </li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>