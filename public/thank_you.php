<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php")  ?>

<h1 class="text-center"><?php  display_message(); ?></h1>


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">

      <h1 class="text-center">Thank You!</h1>
    
<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
           <th class = "text-center">Order ID</th>
           <th class= "text-center">Total</th>
           <th class= "text-center">Building</th>
            
          
    
          </tr>
        </thead>
        <tbody>
            <tr>
            
                 <?php last_order(); ?>   

        </tbody>
    </table>
    
</form>





<!--  ***********CART TOTALS*************-->
           
<!-- session_destroy(); -->
<?php header( "refresh:3;url=../public/index.php" ); ?>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php"); session_destroy();?>