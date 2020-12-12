<div class="col-lg-12">

    <h1 style = "color: #9a1e35" class="page-header"> Meetings </h1>
    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>

    <a href="index.php?add_announcements" class="btn btn-primary">Add a Meeting </a>


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
            <li> <strong> Meetings </strong>
                <ol>
                <li> This page will show a list of all meetings that will display at the meetings page.</li>
                <img src="../../resources/uploads/meetings_page.png" alt="" width="100%">
                <li>To add a new Meeting click the <span><img src="../../resources/uploads/add_meeting_btn.png" alt="" width="10%"></span> button </li>
               
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