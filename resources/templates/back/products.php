
             <div class="row">

    <h1 style = "color: #9a1e35" class="page-header"> All Products</h1>
    
    <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>
    
    <br>
    
    <table class="table table-hover">

        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Location</th>
            <th>MFG Number</th>
           
        </tr>
        </thead>
        <tbody>
              <div class="row">
        <?php get_products_in_admin(); ?>
        </div>
        </tbody> 
        </table>

             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



