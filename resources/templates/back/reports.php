
<div class="row">
    
<h1 style = "color: #9a1e35" class="page-header"> All Reports</h1>
<div id="myOverlay" class="overlay">


                <form action="index.php?reports" method="GET" style="margin:auto;max-width:300px;" >
                <input type="text" id="search" placeholder="Search.." name="search_reports">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>

</div>
<hr>
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
       <?php display_search_reports(); ?>
        <?php display_reports(); ?>

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
            <li> <strong> Reports </strong>
                <ol>
                <li>This page will show a report each product that is ordered. It will display the Product ID, Order ID, name of the Building.</li>
                <img src="../../resources/uploads/reports.png" alt="" width="100%">
                <li>If you click the <img src="../../resources/uploads/report_id.png" alt="" width="9%"" alt=""> button where the Report ID number is located more information can be viewed regarding that order id.</li>
                </ol>  

                <li> <strong> Search Reports </strong>
                <ol>
                <li> To begin your search, select the Search bar located at the top of page.</li>
                <img src="../../resources/uploads/search_bar.png" alt="" width="50%">
                <li>Reports can be sorted by <strong> ORDER ID,  BUILDING NAME, </strong> or <strong>ORDER NAME</strong></li>
                <li>To return to the full list, select the magnifying lense <span><img src="../../resources/uploads/lense.png" alt="" width="9%"></span> next to the search bar.</li>
                
                </ol>  

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>