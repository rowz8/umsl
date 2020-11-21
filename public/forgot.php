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

                <div class="form-group"><label for="">
                    Username<input type="text" name="username" class="form-control" placeholder="username"></label>
                </div>
                <div class="form-group"><label for="email">
                    Email<input type="email" name="email" placeholder="email" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                   New Password<input type="password" name="password" placeholder="password" class="form-control"></label>
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


<?php
function forgot_psw(){
    if(isset($_POST['forgot'])){
        $username               = escape_string($_POST['username']);
        $password               = escape_string($_POST['password']);
        $email                  = escape_string($_POST['email']);
        // hash format to encrypt the password
            $hashFormat = "$2y$10$"; 
        // is a string at least 22 characters
            $salt = "iusesomecrazystrings22";

            $hashF_and_salt = $hashFormat . $salt;
        // need to declare the variable again for it to take the encrypted password other wise it will not be encrypted.
            $password = crypt($password,$hashF_and_salt); 
        
        $query = query("SELECT * FROM users where username = '{$username}' AND email = '{$email}'");
            confirm($query);

        $row = fetch_array($query);

        if(mysqli_num_rows($query)==0){
            set_message("Your Email or Username are incorrect");
            // $username = "unregistered user";
            redirect("../public/forgot.php");
            
            } 
            else {

            
            
             //  make sure there is a space after the word SET so the database can be updated 
                $query ="UPDATE users SET ";
                $query.="password                  = '{$password }'";

                $send_update_query = query($query);
                confirm($send_update_query);
                set_message("User {$username} has been Updated");
                redirect("../public/index.php");
                
            
        }
    }
}



?>

     