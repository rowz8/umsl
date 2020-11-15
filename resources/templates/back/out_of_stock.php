 
 <div class="row">

    <h1 style = "color: #9a1e35" class="page-header">Out of Stock Items</h1>
    
    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>
    

   <div class="col-md-3">
    <p class="lead">Select a Category </p>
    <div class="list-group">

        <?php get_categories_back();?>

    
    </div>
</div>

    <table class="table table-hover">
        <thead>
        <tr>
            <!-- <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Location</th>
            <th>MFG Number</th>
            <th>Delete</th> -->
        </tr>
        </thead>
        <tbody>
            
            
     
        </tbody>
    </table>
<?php get_out_of_stock_products(); ?>
             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->






