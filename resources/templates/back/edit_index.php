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

 <aside id="admin_sidebar" class="col-lg-4">

     
     <div class="form-group">
       <!-- <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft"> -->
       <?php show(); ?>
       <!-- <a class = "btn btn-danger btn-lg" href ="index.php?delete_order_id={$row['order_id']}">Delete</a> -->
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
         
        
    </div>

<br>

    <div class="form-group">
      <label for="order_status">Order # </label>
        <input type="text" name="order_id" class="form-control" value="<?php echo $_GET['id'] ?>">
    </div>

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