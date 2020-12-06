
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
