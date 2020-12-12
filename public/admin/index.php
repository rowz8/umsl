<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/header.php"); ?>


<?php 
if(!isset($_SESSION['username'])) {
    redirect("../../public");
}
    ?>
       
        <div id="page-wrapper">
        

            <div class="container-fluid">

              
            <?php
            if ($_SERVER['REQUEST_URI'] == "/umsl/public/admin/" || $_SERVER['REQUEST_URI'] == "/umsl/public/admin/index.php") {

                include(TEMPLATE_BACK . "/admin_content.php");  
            }
            if(isset($_GET['orders'])) {
                include(TEMPLATE_BACK . "/orders.php");  
            }

            if(isset($_GET['approvals'])) {
                include(TEMPLATE_BACK . "/approvals.php");  
            }
            if(isset($_GET['products'])) {
                include(TEMPLATE_BACK . "/products.php");  
            }
            if(isset($_GET['reports'])) {
                include(TEMPLATE_BACK . "/reports.php");  
            }
            if(isset($_GET['add_product'])) {
                include(TEMPLATE_BACK . "/add_product.php");  
            }
            if(isset($_GET['categories'])) {
                include(TEMPLATE_BACK . "/categories.php");  
            }
            if(isset($_GET['users'])) {
                include(TEMPLATE_BACK . "/users.php");  
            }
            if(isset($_GET['slides'])) {
                include(TEMPLATE_BACK . "/slides.php");  
            }
            if(isset($_GET['buildings'])) {
                include(TEMPLATE_BACK . "/buildings.php");  
            }
            if(isset($_GET['edit_product'])) {
                include(TEMPLATE_BACK . "/edit_product.php");  
            }
            if(isset($_GET['edit_user'])) {
                include(TEMPLATE_BACK . "/edit_user.php");  
            }

            if(isset($_GET['edit_index'])) {
                include(TEMPLATE_BACK . "/edit_index.php");  
            }

            if(isset($_GET['order_id'])) {
                include(TEMPLATE_BACK . "/order_view.php");  
            }

            if(isset($_GET['report_id'])) {
                include(TEMPLATE_BACK . "/report_view.php");  
            }
            
            if(isset($_GET['add_user'])) {
                include(TEMPLATE_BACK . "/add_user.php");  
            }

            if(isset($_GET['meetings'])) {
                include(TEMPLATE_BACK . "/meetings.php");  
            }

            if(isset($_GET['add_announcements'])) {
                include(TEMPLATE_BACK . "/add_announcements.php");  
            }

            if(isset($_GET['edit_meeting'])) {
                include(TEMPLATE_BACK . "/edit_meeting.php");  
            }

            if(isset($_GET['delete_meeting_id'])) {
                include(TEMPLATE_BACK . "/delete_meeting.php");  
            }

            if(isset($_GET['delete_order_id'])) {
                include(TEMPLATE_BACK . "/delete_order.php");  
            }
            if(isset($_GET['delete_category_id'])) {
                include(TEMPLATE_BACK . "/delete_category.php");  
            }
            if(isset($_GET['delete_product_id'])) {
                include(TEMPLATE_BACK . "/delete_product.php");  
            }
            if(isset($_GET['delete_report_id'])) {
                include(TEMPLATE_BACK . "/delete_report.php");  
            }
            if(isset($_GET['delete_user_id'])) {
                include(TEMPLATE_BACK . "/delete_user.php");  
            }
            if(isset($_GET['delete_slide_id'])) {
                include(TEMPLATE_BACK . "/delete_slide.php");  
            }
            if(isset($_GET['delete_building_id'])) {
                include(TEMPLATE_BACK . "/delete_building.php");  
            }
            if(isset($_GET['out_of_stock'])) {
                include(TEMPLATE_BACK . "/out_of_stock.php");  
            }
    

            if(isset($_GET['out_of_stock_id'])) {
                include(TEMPLATE_BACK . "/out_of_stock.php");  
            }


            if(isset($_GET['in_stock'])) {
                include(TEMPLATE_BACK . "/in_stock.php");  
            }
    

            if(isset($_GET['in_stock_id'])) {
                include(TEMPLATE_BACK . "/in_stock.php");  
            }

            if(isset($_GET['search_orders'])) {
                include(TEMPLATE_BACK . "/orders_search.php");  
            } 

            if(isset($_GET['search_reports'])) {
                include(TEMPLATE_BACK . "/reports_search.php");  
            } 

             if(isset($_GET['search_products'])) {
                include(TEMPLATE_BACK . "/products_search.php");  
            }
            ?>

                    <!-- displays directory -->
                <!-- <?php echo $_SERVER['REQUEST_URI'];?> -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include(TEMPLATE_BACK . "/footer.php"); ?>