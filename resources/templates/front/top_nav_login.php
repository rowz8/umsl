 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custodial Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]
    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#">Custodial Center</a>

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a style="font-size:11pt;"  href="#">Shop</a>
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
                <a style="font-size:11pt;" href="#">Contact</a>
            </li>
            <li>
                <a style="font-size:11pt;" href="#">Meetings</a>
            </li>
            <li>
                <a style="font-size:11pt;"  href="#">Team</a>
            </li>

            <li>
                <a style="font-size:11pt;" href="#">Search</a>
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
            
                <a class="btn btn-success btn-block" style="font-size:11pt;" href="#">Checkout</a>
           
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
