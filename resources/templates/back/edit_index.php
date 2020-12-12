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


</div>
</div>

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
            <li> <strong> Edit Order Status </strong>
                <ol>
                <li>At the Edit Order Status page you can find information regarding the order.</li>
                <img src="../../resources/uploads/edit_order_status.png" alt="" width="80%">
                <li>At the bottom of the page it displays the order # <span><img src="../../resources/uploads/order_num.png" alt="" width="9%"></span> you are editing </li>
                <li>A list of order status is displayed only one option can be selected at the time with no specific order
                <ol>
                <li>Approved</li>
                <li>Processing</li>
                <li>Completed</li>
                <li>Cancelled</li>
                </ol>
                </li>
                <li>The order can be updated by clicking the <span><img src="../../resources/uploads/update_btn.png" alt="" width="35%"></span> button.</li>
                <li>The order can be deleted by clicking the <span><img src="../../resources/uploads/delete_btn.png" alt="" width="35%"></span> button.</li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>