<?php require_once("../resources/config.php"); ?>

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>

<meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Page Content -->
    <div class="container">

<div class="col-md-12">
  <div class="row">
  <h1 class="page-header">
   Buildings



  </h1>
  </div>


<form action="../public/processing.php"  method="post" enctype="multipart/form-data">

  <!-- SIDEBAR-->

     <div class="form-group">
      
        
     <table class="table table-hover">
        <tbody>
          <div class="form-group">
         <label for="product-title">Product Category</label>

             <select name="building_id" id="" class="form-control" required> 
              <option  value="">Select Building</option>
            <?php damnbuildings(); ?>   
        </select>

    </div>
        </tbody>
        </table>
       
   
<input type="submit"  name="update" class="btn btn-primary btn-lg" value="Update">
  
</form>



<?php
function damnbuildings(){

    $query = query ("SELECT * FROM buildings");
    confirm($query);
            while($row = mysqli_fetch_array($query)){
                $building_options = <<<DELIMETER

                 <option value="{$row['building_name']}">{$row['building_name']}</option>            
DELIMETER;    
        echo $building_options;
    }
}



function add_building_order(){
    if(isset($_POST[‘update])){

    
    $building_id    = escape_string($_POST['building_id']); 
    $building_name    = escape_string($_POST['building_name']); 
    
    
    }$_POST['building_name'];
    echo $_POST['building_id'];
}



?>
<!--  ***********CART TOTALS*************--> 
        
<?php include(TEMPLATE_FRONT .  "/footer.php");  ?>
