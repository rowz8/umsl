
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
            <li> <strong> Pending Approvals </strong>
                <ol>
                <li> The <strong> Pending Approvals </strong> page shows the order ID, date of order, amount, the person who ordered name, and building number.</li>
                <img src="../../resources/uploads/approvals.png" alt="" width="100%">
                <li>To view more information regarding the order click the order id <span><img src="../../resources/uploads/approval_btn.png" alt="" width="9%"></span> button</li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>