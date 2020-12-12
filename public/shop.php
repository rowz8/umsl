<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php")  ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

<?php include(TEMPLATE_FRONT . DS . "side_nav.php")  ?>
           <!-- Categories go here side_nav -->

 
<div class="col-md-9">


    <div class="row carousel-holder">

        <!-- <div class="col-md-12">
             carousel - big banner slider.php 
            <?php include(TEMPLATE_FRONT . DS . "slider.php")  ?>
        </div> -->

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
                <ol>
                <li> To begin your shopping experience you can use a variety of methods to find the items you are looking for. </li>
                
                <li> Located on the left side of your screen will be a list of categories. These categories can be used to quickly narrow down your search into items such as Paper Products, Chemicals. and PPE.</li>
                <img src="../resources/uploads/side_nav.png" alt="" width="250p%">
                <li>Once you have selected a category the center of the webpage will update to include only items listed under that category.</li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>