</div>


 <div class="row">

     <h1 style = "color: #9a1e35" class="page-header"> Slides  </h1>
     <h4 class ="text-center" style = "color: #ebab04" ><?php display_message(); ?></h4>

    <div class="col-xs-4">

    <form action="" method="post" enctype="multipart/form-data">

    <?php add_slides(); ?>

    <div class="form-group">

    <input type="file" name="file">

    </div>

    <div class="form-group">
    <label for="title">Slide Title</label>
    <input type="text" name="slide_title" class="form-control">

    </div>

        <div class="form-group">

            <input type="submit" name="add_slide" class= "btn btn-primary">

        </div>

 </form>

 </div>


 <div class="col-xs-8">
  <?php get_current_slide_in_admin(); ?>



 </div>

    </div><!-- ROW-->

    <hr>

    <h1>Slides Available</h1>

    <div class="row">

    <?php get_slide_thumbnails(); ?>
    </div>
    
  </div>

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
            <li> <strong> Slides </strong>
                <ol>
                <li> This page will display the SLIDES AVAILABLE.</li>
                <img src="../../resources/uploads/slides.png" alt="" width="100%">
                <li>Under SLIDES AVAILABLE, you can view all the slides that have been uploaded.</li>
                <li>To upload a slide, enter the slide title under <span><img src="../../resources/uploads/slide_title.png" alt="" width="50%"></span> text field</li>
                <li>Click on the CHOOSE FILE button and choose a file from your computer.</li>
                <li>Click on the submit <span><img src="../../resources/uploads/submit.png" alt="" width="9%"></span> button </li>
                <li>To delete a slide, click on the slide. A dialog window will appear. Then, click OK.</li>
                </ol>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
</div>