<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php")  ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

<?php include(TEMPLATE_FRONT . DS . "side_nav.php")  ?>
           <!-- Categories go here side_nav -->


 <?php display_message();?> 
 
<div class="col-md-9">

    <div class="row carousel-holder">

        <div class="col-md-12">
            <!--  carousel - big banner slider.php -->
            <?php include(TEMPLATE_FRONT . DS . "slider.php")  ?>
        </div>

    </div>

    <!-- product display  -->
    <div class="row">
        
    <?php get_products();?>


      
    </div> <!-- row ends here  -->

</div>

</div>

</div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php");?>