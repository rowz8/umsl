<?php 


if(isset($_GET['report_id'])) {


  $query = query("SELECT * FROM reports WHERE report_id = " . escape_string($_GET['report_id']) . " ");
  confirm($query);

  while($row = fetch_array($query)) {

  $product_title          = escape_string($row['product_title']);
  $product_location       = escape_string($row['product_location']);
  $product_quantity       = escape_string($row['product_quantity']);
  $product_number         = escape_string($row['product_number']);
  $order_building         = escape_string($row['order_building']);
  
  }

}
  ?>

  <div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            Report View
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
       
        <?php show_report_details(); ?>
        
        </tbody>
                </table>
                </div>
            </div><!--Main Content-->

        <!-- SIDEBAR-->

            <aside id="admin_sidebar" class="col-md-4">
              <div class="form-group">
        
        <?php show_buttons3(); ?>
        
    </div>
    
  </form>

<?php
function show_buttons3(){
    if(isset($_GET['report_id'])) {
        
        $show_buttons= <<<DELIMETER

        <input type="button" class="btn btn-warning btn-lg" value="Print this page" onClick="window.print()">
          
        <td><a class = "btn btn-danger btn-lg" href ="index.php?delete_report_id={$_GET['report_id']}">Delete</a></td>
          
        </aside><!--SIDEBAR-->
        


DELIMETER;
        
    echo $show_buttons;
    }
}

?>