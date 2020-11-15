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
