
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
