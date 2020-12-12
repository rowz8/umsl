<?php  add_building(); ?>
<div id="page-wrapper">

            <div class="container-fluid">

    <h1 style = "color: #9a1e35" class="page-header"> Buildings </h1>
    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>


    <div class="col-md-4">
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="building-title">Title</label>
            <input name ="building_name" type="text" class="form-control">
        </div>

        <div class="form-group">
            
            <input name="add_building" type="submit" class="btn btn-primary" value="Add Building">
        </div>      


    </form>


    </div>


    <div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
       
    </tbody>

        <?php echo display_buildings(); ?>

        </table>

    </div>


            </div>
            <!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->


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
            <li> <strong> Buildings </strong>
                <ol>
                <li> The Buildings page displays and allows you to add a new building </li>
                <img src="../../resources/uploads/buildings_page.png" alt="" width="100%">
                <li>To add a new Building type the building name at the building <span><img src="../../resources/uploads/cat_title.png" alt="" width="50%"></span> field </li>
                <li> Click the <span><img src="../../resources/uploads/add_building_btn.png" alt="" width="20%"></span> button to add the new building name.</li>
                <li>To Delete a Building click the delete <span><img src="../../resources/uploads/delete_cat_btn.png" alt="" width="9%"></span> button </li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>