
<div class="col-md-12">
<div class="row">
<h1 style = "color: #9a1e35" class="page-header"> All Products </h1>
<div id="myOverlay" class="overlay">
  

                <form action="index.php?products_search" method="GET" style="margin:auto;max-width:300px;" >
                <input type="text" id="search" placeholder="Search.." name="search_products">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>

</div>
<hr>
<h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
          <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Location</th>
            <th>MFG Number</th>
         
      </tr>
    </thead>
    <tbody>
    
    <?php display_search_products(); ?>
        

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
            <li> <strong> All Orders </strong>
                <ol>
                <li> All orders will be shown along with the date, amount of orders, status, name for the person who ordered, and the name of the buildings.</li>
                <img src="../../resources/uploads/orders.png" alt="" width="100%">
                <li>To view a specific order, click on <span> <img src="../../resources/uploads/order_id.png" alt="" width="50p%"> </span>the blue box with a number in it under <strong> ID </strong>. </li>
                <li>The <strong> ORDER DETAILS </strong> will appear. This page includes the Order ID number, building, name of person who ordered it. Product name, location ID, MFG number, and product quantity.</li>
                </ol>  

                <li> <strong> Search Products </strong>
                <ol>
                <li> To begin your search, select the Search bar located at the top of page.</li>
                <img src="../../resources/uploads/search_bar.png" alt="" width="50%">
                <li>All products can be sorted by the <strong> PRODUCT NAME </strong> </li>
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