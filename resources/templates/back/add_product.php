<?php add_product(); ?>
    <div class="col-md-12">
    <div class="row">
    <h1 style = "color: #9a1e35" class="page-header">Add Product</h1>

    </div>
        

    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
                <div class="form-group">
                    <label for="product-title">Product Title </label>
                        <input type="text" name="product_title" class="form-control" required>

                </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control" required></textarea>
    </div>

    <div class="form-group">
           <label for="product-title">Short Description</label>
      <textarea name="short_desc" id="" cols="30" rows="3" class="form-control" required></textarea>
    </div>

    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" step="0.01" name="product_price" class="form-control" size="60" required>
      </div>
    </div>

  </div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>
        <hr>

     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Product Category</label>
             <select name="product_category_id" id="" class="form-control" required>
            <option value="">Select Category</option>
            <?php show_categories_add_product_page(); ?>  
        </select>

    </div>

    <!-- Product Attributes-->


   <div class="form-group">
          <label for="product-title">Product Quantity</label>
        <input type="number" name="product_quantity" class="form-control" size="60" required>
    </div>


    <div class="form-group">
          <label for="product-title">Product Location</label>
          <h6><cite>Next Available Location:</cite></h6>
        <input type="number" name="product_location" class="form-control" required placeholder="<?php echo show_last_product_number();?>" >
    </div>

    <div class="form-group">
          <label for="product-title">Product MFG Number </label>
        <input type="text" name="product_number" class="form-control" required>
    </div>
    <div class="form-group">
          <label for="product-title">Product UOM </label>
        <input type="text" name="product_uom" class="form-control" required>
    </div>

    <hr>
    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file" required>
      
    </div>

</aside><!--SIDEBAR-->


    
</form>

