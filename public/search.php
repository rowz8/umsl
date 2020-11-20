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





<?php
function display_search(){
if(isset($_GET['search'])){
    
    $search = escape_string($_GET['search']);

    $query = query("SELECT * FROM products WHERE product_title LIKE '%$search%' AND product_quantity >=1");
    confirm($query);
    
    if(mysqli_num_rows($query) == 0){
        set_message("Product not found");
        redirect("search.php");
        
    } else{
            while($row = fetch_array($query)) {
            $orders = <<<DELIMETER
            
            <tr>
            <td>{$row['product_title']}</td>
            <td>CUST{$row['product_location']}</td>
            <td>&#36; {$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
            <td><a href=item.php?id={$row['product_id']} class = "btn btn-default">More Info </a> </td>
            <td><a class="btn btn-success" href="../resources/cart.php?add={$row ['product_id']}">ADD</a></td>
           
            
            </tr>
DELIMETER;
    echo $orders;
            }          
        }
    } 
}



?>



<?php include(TEMPLATE_FRONT .  "/footer.php");  ?>


   