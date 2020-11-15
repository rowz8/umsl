
<div class="col-md-12">
<div class="row">
<h1 style = "color: #9a1e35" class="page-header"> All Orders </h1>

<h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Order id</th>
           <th>Date</th>
           <th>Amount</th>
           <!-- <th>Transaction</th> -->
            <th>Status</th>
          <!-- <th>Currency</th> -->
           <th>Name</th>
           <th>Building</th>
           <!-- <th>View Order</th> -->
           <!-- <th>Delete</th> -->
         
      </tr>
    </thead>
    <tbody>
        <?php display_orders(); ?>
        

    </tbody>
</table>
</div>