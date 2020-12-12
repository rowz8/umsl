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
            <?php buildings_front(); ?>   
        </select>

    </div>
        </tbody>
        </table>
       
   
<input type="submit"  name="update" class="btn btn-primary btn-lg" value="Update">
  
</form>

<!--  ***********CART TOTALS*************--> 
        
<?php include(TEMPLATE_FRONT .  "/footer.php");  ?>

