<?php require_once("../resources/config.php"); ?>

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>

<meta name="viewport" content="width=device-width, initial-scale=1">


<h1 class="text-center"><?php  display_message(); ?></h1>

    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">

      <h1 class="text-center">Processing Your Order</h1>
      
        
    
<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
           <th class = "text-center">Order ID</th>
           <th class= "text-center">Total</th>
          
    
          </tr>
        </thead>
        <tbody>
            <tr>

                    
                 <?php   process_transaction(); ?>
    <style>
    .loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 120px;
    height: 120px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
    margin: 0 auto;
    }

    /* Safari */
    @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }
    </style> 
            
          <div class="loader"></div> 
            
        </tbody>
    </table>
    
  </form>




<!--  ***********CART TOTALS*************--> 
           
<?php


//Set Refresh header using PHP.
header( "refresh:3;url=../public/thank_you.php" );
 
?>

<?php include(TEMPLATE_FRONT .  "/footer.php");  ?>
