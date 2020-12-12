<?php add_category(); ?>
<div id="page-wrapper">

            <div class="container-fluid">

    <h1 style = "color: #9a1e35" class="page-header"> Product Categories </h1>
    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>


    <div class="col-md-4">
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input name ="cat_title" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            
            <input name="add_category" type="submit" class="btn btn-primary" value="Add Category">
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

        <?php show_categories_in_admin(); ?>

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
            <li> <strong> Product Categories </strong>
                <ol>
                <li> The Product Categories page displays and allows you to add a new category </li>
                <img src="../../resources/uploads/categories.png" alt="" width="100%">
                <li>To add a new Category type the category title at the category <span><img src="../../resources/uploads/cat_title.png" alt="" width="50%"></span> field </li>
                <li> Click the <span><img src="../../resources/uploads/add_cat_btn.png" alt="" width="20%"></span> button to add the new category title.</li>
                <li>To Delete a Category click the delete <span><img src="../../resources/uploads/delete_cat_btn.png" alt="" width="9%"></span> button </li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>