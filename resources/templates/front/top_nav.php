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
                <a style="font-size:11pt;"  href="shop.php">Shop</a>
            </li>


            <li >
                <a style="font-size:11pt;" href="index.php">Login</a>
            </li>


            <li class="<?php echo $_COOKIE['role'] == "admin" ? 'show' : 'hidden'?>">
                <a style="font-size:11pt;" href="admin">Admin</a>
            </li>
            
                <!-- <li>
                <a style="font-size:11pt;" href="checkout.php">Checkout</a>
            </li> -->
            <li>
                <a style="font-size:11pt;" href="contact.php">Contact</a>
            </li>
            <li>
                <a style="font-size:11pt;" href="announcements.php">Meetings</a>
            </li>
            <li>
                <a style="font-size:11pt;"  href="team.php">Team</a>
            </li>

            <li>
                <a style="font-size:11pt;" href="search.php">Search</a>
            </li>

            <ul class="nav navbar-right">
                <li class="dropdown">
                
                <a style="color:#ebab04" "href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size:11pt; margin-right:0px;" class="glyphicon glyphicon-shopping-cart navbar-btn"> Cart </span>
             
                
       
                <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                         <table class="table table-striped">
                <thead>
                <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub-total</th>
                
                </tr>
                </thead>
                <tbody  >
                        <?php cart_nav(); ?>
                    
                </tbody>
                 
            </table>
            
                <a class="btn btn-success btn-block" style="font-size:11pt;" href="checkout.php">Checkout</a>
           
                     </div>       
                        </li>
                    </ul>
                
                </ul>
            </ul>
            

                <ul  class="nav navbar-right">
              <li class="dropdown">
                    <a style="color:#ebab04; font-size:12pt;" "href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
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
                
                        
 
                
 

                                                                                          
            
               
            </ul>  

        

                                                                                                          
    </div>
    <!-- /.navbar-collapse -->
   
</div>


<style>
.my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
