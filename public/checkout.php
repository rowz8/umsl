
<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php");?>


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">

      <h1>Checkout</h1>
    <h4 class = "text-center" style = "color: #9a1e35"> <?php display_message();?></h4>
    <!-- PayPal form & inputs -->
    <form action="">
        

            <table class="table table-striped">
                <thead>
                <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub-total</th>
                <!-- <th>Order By</th> -->
                </tr>
                </thead>
                <tbody>
                        <?php cart(); ?>
                    
                </tbody>

            </table>
            <?php echo show_paypal(); ?>
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo isset ($_SESSION['item_quantity']) ?  $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
</tr>


<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">&#36; <?php echo isset ($_SESSION['item_total']) ?  $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?></span></strong> </td>
</tr>



</tbody>

</table>


</div><!-- CART TOTALS-->
<br>

 </div><!--Main Content-->
 </div>  <!--/.container-->
<?php include(TEMPLATE_FRONT . DS . "footer.php");?>
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
                  <li> <strong> Updating Shopping Cart </strong>
                    <ul>
                      <li>Adding or removing an item listed in your shopping cart can be controlled using the buttons located on the right side of your screen</li>
                      <li>The <span><img src="../resources/uploads/minus.png" alt="" width="50p%"></span>  symbol will subtract from the total amount of the selected item.</li>
                      <li>The <span><img src="../resources/uploads/plus.png" alt="" width="50p%"></span>  symbol will subtract from the total amount of the selected item.</li>
                      <li>The <span><img src="../resources/uploads/remove.png" alt="" width="50p%"></span>  symbol will subtract from the total amount of the selected item.</li>
                      <img src="../resources/uploads/checkout.png" alt="" width="450p%">
                      <li> When updating the quantity desired, you will be warned if the requested amount is higher then the available stock.</li>
                      <img src="../resources/uploads/checkout2.png" alt="" width="450p%">
                    </ul>
                  </li>
              </ul>

              <ul>
                  <li> <strong> Checkout </strong>
                    <ul>
                      <li>Once the desired items are in your shopping cart, select the Cart button located in the dashboard. Next, select <span><img src="../resources/uploads/btn_checkout.png" alt="" width="150p%"></span> located at the bottom of the pop-up.</li>
                      <img src="../resources/uploads/cart_nav.png" alt="" width="150p%">
                      <li>After you have verified the correct items have been placed in your cart, select the <strong> Order Now! </strong> button to proceed.</li>
                      <li>Next you must select the location from the list provided in which the items will be used and press <strong> Update. </strong></li>
                    </ul>
                  </li>
              </ul>

              <ul>
                  <li> <strong> Buildings </strong>
                    <ul>
                      <img src="../resources/uploads/buildings.png" alt="" width="450p%">
                      <li>Once you have updated the location your order will be complete. You will be greeted with the following <strong> Thank You! </strong> page to verify your order has been placed.</li>
                      <img src="../resources/uploads/thank_you.png" alt="" width="450p%">
                      <li>Once your order has been completed you will be automatically logged out.</li>
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
