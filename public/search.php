<?php require_once("../resources/config.php"); ?>

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>


<div id="myOverlay" class="overlay">
  

<form action="search.php" method="GET" style="margin:auto;max-width:300px;" >
                <input type="text" id="search" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>

</div>
</div>
<hr>
<h4 class="text-center"style = "color: #9a1e35"><?php display_message(); ?> </h4>
<br>
<div class="container">
<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Product Title</th>
           <th>Product Location</th>
           <th>Price</th>
           <th>Available</th>
           <th>Sold by:</th>
           <th>More Info</th>
            <th>Order</th>
         
         
      </tr>
    </thead>
    <tbody>
        <?php display_search(); ?>
        

    </tbody>
</table>
</div>

</div>

<?php include(TEMPLATE_FRONT .  "/footer.php");  ?>
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
                <ul>
                  <li>The search function will allow you to refine your search provided you already know the name of the product.
                    <ul>
                      <li>To begin your search, select the Search tab located in the dashboard.</li>
                      <li>In the top center of the page will be a search bar to enter in the product name.</li>
                      <img src="../resources/uploads/search.png" alt="" width="450p%">
                      <li>Once you have found your item you can use the <span><img src="../resources/uploads/more_info.png" alt="" width="150p%"></span> button to access a detailed description.</li>
                      <img src="../resources/uploads/more_info2.png" alt="" width="450p%">
                      <li>After you have verified the item you have selected, click the <img src="../resources/uploads/add.png" alt="" width="50p%"> button to add the item to your shopping cart</li>
                    </ul>
                  </li>
              </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>


   