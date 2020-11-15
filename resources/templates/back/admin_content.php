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
                <div class="huge"><?php echo count_all_records('orders'); ?></div>
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

<div class="col-lg-4">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel Processing Orders</h3>
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
            <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
</div>

<!-- STATUS APPROVED -->
<div class="row">
<div class="col-lg-4">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel Approved Orders</h3>
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
            <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
</div>

<!-- STATUS COMPLETED -->
<div class="row">
<div class="col-lg-4">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel Completed Orders</h3>
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
            <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
</div>



</div>
    

<!-- /.row -->
