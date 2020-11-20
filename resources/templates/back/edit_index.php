<?php require_once("../../resources/config.php"); ?>

<?php
if(isset($_GET['id'])) {


  $query = query("SELECT * FROM orders WHERE order_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

  while($row = fetch_array($query)) {

  $order_status          = escape_string($row['order_status']);
  
  }
  update_order();
  }
?>

<?php
function show(){ 
  if(isset($_GET['id'])){
   
  $show = <<<DELIMETER

    <td><a class = "btn btn-danger btn-lg" href ="index.php?delete_order_id={$_GET['id']}">Delete</a></td>

DELIMETER;
    } echo $show;


}


?>
<!-- /.row -->

<div class="col-md-12">
  <div class="row">
  <h1 class="page-header">
   Edit Order Status
  </h1>
  </div>



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
       
              <?php show_order(); ?>
        
              </tbody>
          </table>
      


<form action="" method="post" enctype="multipart/form-data">

  <div class="col-md-8">



  <!-- SIDEBAR-->

 <aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
       <!-- <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft"> -->
       <?php echo show(); ?>
       <!-- <a class = "btn btn-danger btn-lg" href ="index.php?delete_order_id={$row['order_id']}">Delete <span class = "glyphicon glyphicon-remove"></span></a> -->
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
         
        
    </div>

<br>

    <br>

   
<!--
 <div class="form-group">
      <label for="order_status">Order Status</label>
        <input type="checkbox" name="order_status" class="form-control" value="<?php echo $order_status; ?>">
</div>
-->
     
     <div>
  <input type="radio" id="Approved" name="order_status" value="Approved"
         checked>
  <label for="approved">Approved</label>
</div>

<div>
  <input type="radio" id="Processing" name="order_status" value="Processing">
  <label for="processing">Processing</label>
</div>

<div>
  <input type="radio" id="Completed" name="order_status" value="Completed">
  <label for="completed">Completed</label>
</div>

<div>
  <input type="radio" id="Cancelled" name="order_status" value="Cancelled">
  <label for="cancelled">Cancelled</label>
</div>
  <!--  SIDEBAR -->
    </aside>

    
</form>
    
 <?php
// function that displays order details
function show_order(){
    

    $query = query("SELECT * FROM reports WHERE order_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {

    $product_title          = escape_string($row['product_title']);
    $product_location       = escape_string($row['product_location']);
    $product_quantity       = escape_string($row['product_quantity']);
    $product_number         = escape_string($row['product_number']); 
    $order_building         = escape_string($row['order_building']); 
    $order_name             = escape_string($row['order_name']); 
        
        $view_order = <<<DELIMETER
             <tr>
            
            <td>{$row['order_id']}</td>
            <td>{$row['order_building']}</td>
            <td>{$row['order_name']}</td>
            <td>{$row['product_title']}</td>
            <td>CUST{$row['product_location']}</td>
            <td>{$row['product_number']}</td>
            <td>{$row['product_quantity']}</td>
            
            </tr>
             
        
DELIMETER;
    echo $view_order;
    
    }
  
    
}
?>