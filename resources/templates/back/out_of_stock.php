 
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
            <li> <strong> In Stock Items </strong>
                <ol>
                <li>All products in stock will be separated in categories. Select the category that the product is in.</li>
                <img src="../../resources/uploads/out_stock.png" alt="" width="80%">
                <li>At the bottom of the page it displays all the products that are in stock based on the category selected </li>
                <img src="../../resources/uploads/category_out_stock.png" alt="" width="80%">
                <li>If a product is click it will redirect you to the Edit Product page.</li>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>




