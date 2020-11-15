
<div class="col-md-12">
<div class="row">
<h1 style = "color: #9a1e35" class="page-header"> Pending Approvals </h1>

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
            <th>Name</th>
           <th>Building</th>
           <!-- <th>Status</th> -->
          
           <!-- <th>Delete</th> -->
         
      </tr>
    </thead>
    <tbody>
        <?php get_orders_approvals(); ?>
        

    </tbody>
</table>
</div>