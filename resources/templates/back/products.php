
             <div class="row">

    <h1 style = "color: #9a1e35" class="page-header"> All Products</h1>

    <div id="myOverlay" class="overlay">
  
            
                <form action="index.php?products" method="GET" style="margin:auto;max-width:300px;" >
                <input type="text" id="search" placeholder="Search.." name="search_products">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>

</div>
<hr>
    
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
            <li> <strong> View Products </strong>
                <ol>
                <li>This page will  display all the products regardless if they are in stock or out of stock</li>
                <img src="../../resources/uploads/products.png" alt="" width="100%">
                <li>If you click the <img src="../../resources/uploads/product_btn.png" alt="" width="9%"" alt=""> button where the Product ID number is located more information can be viewed regarding that product id.</li>
                </ol>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>