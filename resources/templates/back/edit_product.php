<?php 


if(isset($_GET['id'])) {


  $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

  while($row = fetch_array($query)) {

  $product_title          = escape_string($row['product_title']);
  $product_category_id    = escape_string($row['product_category_id']);
  $product_price          = escape_string($row['product_price']);
  $product_description    = escape_string($row['product_description']);
  $short_desc             = escape_string($row['short_desc']);
  $product_location       = escape_string($row['product_location']);
  $product_quantity       = escape_string($row['product_quantity']);
  $product_uom            = escape_string($row['product_uom']);
  $product_image          = escape_string($row['product_image']);
  $product_image          = display_image($row['product_image']);
  $product_number         = escape_string($row['product_number']);
  
  }
  
  update_product();
  }
  ?>

  <div class="col-md-12">
  <div class="row">
  <h1 class="page-header">
   Edit Product
  </h1>
  </div>
               
  <form action="" method="post" enctype="multipart/form-data">

  <div class="col-md-8">
    
    <!-- Product Title -->
 <div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>">
       
    </div>

    <!-- Product Description -->
    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
    </div>



    <div class="form-group row">

      <!-- Product Price -->
      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" step="0.01" name="product_price" class="form-control" size="60" value="<?php echo $product_price; ?>">
      </div>
    </div>


    <!-- Product Short Description -->
    <div class="form-group">
           <label for="product-title">Product Short Description</label>
      <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"><?php echo $short_desc; ?></textarea>
    </div>

 </div><!--Main Content-->

  <!-- SIDEBAR-->

 <aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
        <?php show_button(); ?>
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
    </div>

     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Product Category</label>
        <select name="product_category_id" id="" class="form-control">
            <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id); ?></option>

            <?php show_categories_add_product_page(); ?>
           
        </select>


  </div>

    <!-- Product Quantity-->

    <div class="form-group">
      <label for="product-title">Product Quantity</label>
        <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
    </div>

  <!-- Product Location -->
    <div class="form-group">
    <label for="product-title">Product Location </label>
        <input type="text" name="product_location" class="form-control" value="<?php echo $product_location; ?>">
       
    </div>

  <!-- Product MFG Number -->
   <div class="form-group">
           <label for="product-title">Product MFG Number</label>
      <textarea name="product_number" id="" cols="30" rows="3" class="form-control"><?php echo $product_number; ?></textarea>
    </div>
    <div class="form-group">
           <label for="product-title">Product UOM</label>
      <textarea name="product_uom" id="" cols="30" rows="1" class="form-control"><?php echo $product_uom; ?></textarea>
    </div>


   <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file"> <br>

        <img width='150' src="../../resources/<?php echo $product_image; ?>" alt="">
      
    </div>



  </aside><!--SIDEBAR-->


    
</form>


<?php function show_button(){ 
  if(isset($_GET['id'])){
   
  $show = <<<DELIMETER

    <td><a class = "btn btn-danger btn-lg"  style= "text-center" href ="index.php?delete_product_id={$_GET['id']}">Delete</a></td>
    

DELIMETER;
    } echo $show;


}
?>


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
            <li> <strong> Edit Products </strong>
                <ol>
                <li>This page will display all fields in order to update the product information of that specific id number click</li>
                <li>The page will only update a product if a change is made on the page.</li>
                <img src="../../resources/uploads/edit_product.png" alt="" width="100%">
                <li>The product can be updated by clicking the <span><img src="../../resources/uploads/update_btn.png" alt="" width="35%"></span> button.</li>
                <li>The product can be deleted by clicking the <span><img src="../../resources/uploads/delete_btn.png" alt="" width="35%"></span> button.</li>
                </ol>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>