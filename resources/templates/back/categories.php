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
