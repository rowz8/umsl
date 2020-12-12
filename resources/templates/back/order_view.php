<?php 


if(isset($_GET['order_id'])) {


  $query = query("SELECT * FROM reports WHERE order_id = " . escape_string($_GET['order_id']) . " ");
  confirm($query);

  while($row = fetch_array($query)) {

  $product_title          = escape_string($row['product_title']);
  $product_location       = escape_string($row['product_location']);
  $product_quantity       = escape_string($row['product_quantity']);
  $product_number         = escape_string($row['product_number']);
  $order_building         = escape_string($row['order_building']);
  $product_price          = escape_string($row['product_price']);

  }

}
  ?>

  <div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            Order View
            <?php order_date() ?>
        </h1>
    </div>



  <form action="" method="post" enctype="multipart/form-data">
 
      <div class="row">
          <table class="table table-hover">
            <thead>

              <tr>

                   <th>Order ID</th>
                   <th>Building</th>
                   <th>Name</th>
                   <th>Product Title</th>
                   <th>Location</th>           
                   <th>MFG Number</th>
                   <th>Product Quantity</th>

              </tr>
                
            </thead>
            <tbody>
       
        <?php show_order_details(); ?>
        
        </tbody>
                </table>
                </div>
            </div><!--Main Content-->

        <!-- SIDEBAR-->

            <aside id="admin_sidebar" class="col-md-4">
              <div class="form-group">
        
        <?php show_buttons(); ?>
        
    </div>
    
  </form>

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
            <li> <strong> Delete Order </strong>
                <ol>
                <li> On the <strong> ORDER VIEW </strong> page, you can delete the entire order by pressing the <span><img src="../../resources/uploads/delete_btn.png" alt="" width="50%"></span> button. </li>
            <li> <strong> Print Orders </strong>
                <ol>
                <li> To print orders, page press the <span><img src="../../resources/uploads/print.png" alt="" width="50%"" alt=""></span> button </li>
                </ol>          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>