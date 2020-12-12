    <script type="text/javascript">
        var phpRed = <?php echo adminGuard();?>
    </script> 
    
<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<h1 style="color: #9a1e35;" class="page-header">
    Dashboard <small style="color: #ebab04;" >Statistics Overview</small>
</h1>

<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> Dashboard
    </li>
    <h4 class ="text-center" style = "color: #9a1e35" ><?php display_message(); ?></h4>
</ol>
</div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
<div class="row">

    <div class="col-lg-4 col-md-6">
<div class="panel panel-yellow">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-3">
                <i class="fa fa-shopping-cart fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
                <div class="huge"><?php echo count_all_records_processing(); ?></div>
                <div>New Orders!</div>
            </div>
        </div>
    </div>
    <a href="index.php?orders">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
        </div>
    </a>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="panel panel-red">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-3">
                <i class="fa fa-support fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
                <div class="huge"><?php echo count_all_records('products'); ?></div>
                <div>Products!</div>
            </div>
        </div>
    </div>
    <a href="index.php?products">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
        </div>
    </a>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="panel panel-green">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
                <div class="huge"><?php echo count_all_records('categories'); ?></div>
                <div>Categories!</div>
            </div>
        </div>
    </div>
    <a href="index.php?categories">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
        </div>
    </a>
</div>
</div>


</div>

<!-- /.row -->


<!-- STATUS PROCESSING -->
<div class="row">
<div class="col-lg-4">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel Processing Orders  <span style="float: right" class="badge badge-pill badge-danger"><?php echo count_all_records_processing(); ?></span></h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <!-- <th>Order Transactions</th> -->
                        <th>Order Date</th>
                        <th>Amount (USD)</th>
                        <th>Order Name </th>
                        <th>Building</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php echo  get_orders_in_panel_processing();?>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="text-right">
            <a href="index.php?orders">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
</div>
<div>
<!-- STATUS APPROVED -->
<div class="row">
<div class="col-lg-4">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel Approved Orders  <span style="float: right" class="badge badge-pill badge-danger"><?php echo count_all_records_approved(); ?></span> </h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                         <th>Order #</th>
                        <!-- <th>Order Transactions</th> -->
                        <th>Order Date</th>
                        <th>Amount (USD)</th>
                        <th>Order Name </th>
                        <th>Building</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php echo  get_orders_in_panel_approved();?>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="text-right">
            <a href="index.php?approvals">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
</div>

<!-- STATUS COMPLETED -->
<div class="row">
<div class="col-lg-4">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel Completed Orders  <span style="float: right" class="badge badge-pill badge-danger"><?php echo count_all_records_completed(); ?></span> </h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                         <th>Order #</th>
                        <!-- <th>Order Transactions</th> -->
                        <th>Order Date</th>
                        <th>Amount (USD)</th>
                        <th>Order Name </th>
                        <th>Building</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php echo  get_orders_in_panel_completed();?>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="text-right">
            <a href="index.php?orders">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
</div>



</div>
<!-- /.row -->

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
            <li> <strong> Shop </strong>
                <ol>
                <li> The <strong> Shop  </strong> button located at the top left of your screen just above the administer toolbar will redirect you to the Custodial Center. The functionality of this webpage will be described in further detail in the <strong> Team Lead </strong> section of this document. </li>
                
                </ol>

                  <li> <strong> Statistical Overview </strong>
                    <ol>
                      <li>New Orders will navigate to the ALL ORDERS page.
                      <ol>
                      <li>(Discussed in the Orders section.)</li>
                      </ol>
                      </li>

                       <li>Products will navigate to the ALL PRODUCTS page.
                      <ol>
                      <li>(Discussed in the Orders section.)</li>
                      </ol>
                      </li>
                      
                      <li>Categories will navigate to the PRODUCT CATEGORIES page.</li>
                    </ol>
                  </li>


                  <li> <strong> Panels </strong>
                    <ol>
                      <li>There are three panels displayed on the Dashboard page.
                      <ol>
                      <li>Transactions Panel Processing Orders gives an overview of the transactions being processed.</li>
                      <li>(Click VIEW ALL TRANSACTION to get more details)</li>
                      </ol>
                      </li>

                       <li>The  Transactions Panel Approved Orders gives an overview of the approved transactions.
                      <ol>
                      <li>(Click VIEW ALL TRANSACTION to get more details)</li>
                      </ol>
                      </li>
                      
                      <li>Transactions Panel Completed Orders will display completed orders.
                      <ol>
                      <li>(Click VIEW ALL TRANSACTION to get more details)</li>
                      </ol>
                      </li>
                    </ol>
                  </li>

                  <li> <strong> Side Navigation </strong>
                    <ol>
                      <li>On your left you will find the side navigation for the administrator. </li>
                      <img src="../../resources/uploads/side_nav_back.png" alt="">

                     <li>Each tab will navigate to a specific page. For more details click on a tab </li>
                    </ol>
                  </li>


              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
