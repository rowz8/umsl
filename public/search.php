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


   