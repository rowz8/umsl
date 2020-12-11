<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");?>

 <!-- Page Content -->
    <div class="container">


      <header>
            <h1 class="text-center">Forgot Password </h1>
            <h3 class ="text-center" style = "color: #9a1e35" ><?php display_message();?></h3>
            <br>

        </header>     
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                <div class="form-group"><label for="username">
                    Username<input type="text" name="username" class="form-control" placeholder="username" required></label>
                </div>
                <div class="form-group"><label for="id">
                    Id<input type="text" name="id" class="form-control" placeholder="id #" required></label>
                </div>
                <div class="form-group"><label for="email">
                    Email<input type="email" name="email" placeholder="email" class="form-control"required></label>
                </div>
                 <div class="form-group"><label for="password">
                   New Password<input type="password" name="password" placeholder="password" class="form-control" required></label>
                </div>
                    <?php forgot_psw(); ?>
                
                <div class="form-group">
                  <input type="submit" name="forgot" class="btn btn-success" >
                </div>
            </form>
        </div>  


   

    </div>
    <!-- /.container -->

     <?php include (TEMPLATE_FRONT . DS . "footer.php")?>


     