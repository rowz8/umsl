<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php")  ?>
    <!-- Page Content -->
    <div class="container">
       <header>
           <h3>Shop</h3>
           <hr>
           </header>
        <!-- Title -->
        
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

          <?php get_products(); ?>
                            
        </div>
    </div>

        </div>
        <!-- /.row -->

 <?php include(TEMPLATE_FRONT . DS . "footer.php");?>