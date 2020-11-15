
<div class="row">
    
<h1 style = "color: #9a1e35" class="page-header"> All Reports</h1>
<h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Report ID</th>
           <th>Product ID</th>
           <th>Order ID</th>
           <!-- <th>Product Title</th>
           <th>Location</th>
           <th>MFG Number</th>
           <th>Product Price</th>
           <th>Product Quantity</th> -->
           <th>Building</th>
           <!-- <th>View Order</th> -->
           <!-- <th>Delete</th> -->
           
      </tr>
    </thead>
    <tbody>
       
        <?php display_reports(); ?>

    </tbody>
</table>
</div>
