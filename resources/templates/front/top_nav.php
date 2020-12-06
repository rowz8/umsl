 <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index2.php">Custodial Center</a>

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a class="font-weight-bold " href="shop.php">Shop</a>
            </li>


            <li>
                <a href="index.php">Login</a>
            </li>


            <li class="<?php echo $_COOKIE['role'] == "admin" ? 'show' : 'hidden'?>">
                <a href="admin">Admin</a>
            </li>
            
                <li>
                <a href="checkout.php">Checkout</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="announcements.php">Meetings</a>
            </li>
            <li>
                <a class="font-weight-bold " href="team.php">Team</a>
            </li>

            <li>
                <a href="search.php">Search</a>
            </li>
       
                <ul  class="nav navbar-right top-nav">
              <li class="dropdown">
                    <a style="color:#ebab04" "href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    <?php
                    if(isset($_SESSION['username'])){
                        echo $_COOKIE['username'];
                    }else {
                        echo " unregistered user";
                    }
                    ?>
                     
                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="../../../../umsl/public/admin/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                                                                                                               
            </ul>
               
            </ul>  

        

                                                                                                          
    </div>
    <!-- /.navbar-collapse -->
   
</div>


