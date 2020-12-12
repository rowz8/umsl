
<!-- Configuration-->
<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>

     <!--Navigation -->

         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <br>
                    <h3 class="section-subheading text-muted"></h3>
                    
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
<!--                    <form name="sentMessage" id="contactForm" method ="post">-->
                <!-- mailto() function -->
                     <form name="" id="contactForm" method ="post" action="mailto:facilitiesstoreroom@umsl.edu">


<!--                        <?php send_message(); ?>-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <input type="text" name ="" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
<!--
                                <div class="form-group">
                                    <input type="email" name ="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
-->
<!--
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject: *" id="phone" required data-validation-required-message="Please enter your subject.">
                                    <p class="help-block text-danger"></p>
                                </div>
-->
                            </div>
                            <div class="col-md-6">
<!--
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
-->
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
<!--                                <button name="submit" type="submit" class="btn btn-xl">Send Message</button>-->
                                
                                <button type="submit" value="Send" class="btn btn-xl">Send Message</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>
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
                <ul>
                  <li> <strong> Contact </strong>
                    <ul>
                      <li>The <strong> Contact Us </strong> page offers a means to contact your administrator should any issues arise with the Custodial Center webpage.
</li>
                      <img src="../resources/uploads/contact.png" alt="" width="450p%">
                    </ul>
                  </li>
              </ul>

              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
