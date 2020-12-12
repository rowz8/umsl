<?php require_once("../resources/config.php"); ?>

  
       <?php include(TEMPLATE_FRONT. DS . "top_nav_login.php"); ?>
        <!-- /.container -->
    </nav>

 <!-- Page Content -->
    <div class="container">


      <header>

    <h1 class="text-center">Login     <!-- Button trigger modal -->
        
    </h1>

        


            <h3 class ="text-center" style = "color: #9a1e35" ><?php display_message();?></h3>
            <br>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">

            <?php login_user();?>

                <div class="form-group"><label for="">
                    Username<input type="text" name="username" class="form-control" placeholder="username" required></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" placeholder="password" class="form-control" required></label>
                </div>
                
                
                <div class="form-group">
                  <input type="submit" name="login" class="btn btn-success" >
                  
                </div>
            </form>
            <br>
            <form class="" action="../public/forgot.php" method="post" enctype="multipart/form-data">
            <!-- <div class="form-group">
            <INPUT TYPE = "submit" Name = "forgot2" VALUE = "Forgot Password" class="btn btn-danger">
             </div> -->
            </form>
        </div>  


    </header>

    </div>
    <!-- /.container -->

     <?php include (TEMPLATE_FRONT . DS . "footer.php")?>

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
            <li> <strong> Team Lead </strong>
                <ol>
                <li> Logging in is a requirement before placing any order </li>
                <li> Login information can be retrieved from your direct Supervisor or webpage Administrator.</li>
                <img src="../resources/uploads/Screen Shot 2020-12-11 at 8.11.57 AM.png" alt="" width="350p%">
                <li>Login with the provided username and password then select SUBMIT</li>
                </ol>

                  <li> <strong> Administrators </strong>
                    <ol>
                      <li>Navigate to the Login page which is the homepage for the application.</li>
                      <img src="../resources/uploads/Screen Shot 2020-12-11 at 8.11.57 AM.png" alt="" width="350p%">
                      <li>Tabs will be unavailable until logged in.</li>
                      </ol>
                 <li> <strong> Dashboard (Statistical Overview) </strong>
                    <ol>
                      <li>After logging into the application, it will navigate to the <strong> Dashboard </strong> page. This page offers an overview of new orders, products, and product categories. It also views the orders being processed, approved orders, and complete orders.</li>
                    </ol>
                  </li>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>




     