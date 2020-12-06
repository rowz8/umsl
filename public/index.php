<?php require_once("../resources/config.php"); ?>

  
       <?php include(TEMPLATE_FRONT. DS . "top_nav_login.php"); ?>
        <!-- /.container -->
    </nav>

 <!-- Page Content -->
    <div class="container">


      <header>
            <h1 class="text-center">Login</h1>
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
            <div class="form-group">
            <INPUT TYPE = "submit" Name = "forgot2" VALUE = "Forgot Password" class="btn btn-danger">
             </div>
            </form>
        </div>  


    </header>

    </div>
    <!-- /.container -->

     <?php include (TEMPLATE_FRONT . DS . "footer.php")?>




     