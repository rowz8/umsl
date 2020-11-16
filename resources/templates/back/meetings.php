
<div class="col-lg-12">

    <h1 style = "color: #9a1e35" class="page-header"> Users</h1>
    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>

    <a href="index.php?add_announcements" class="btn btn-primary">Add a Meeting</a>


    <div class="col-md-12">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Date </th>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Month</th>
                    <!-- <th>Edit</th> -->
                </tr>
            </thead>
            <tbody>

                <tr>

                    <?php meetings(); ?>

                </tr>


            </tbody>
        </table> <!--End of Table-->
    

    </div>

</div>
