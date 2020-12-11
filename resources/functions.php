<?php 
// global variable for upload images
$upload_directory = "uploads";

// requiring using composer to send mail.
// require'../vendor/autoload.php';
/* *********************************************                             HELPER FUNCTIONS                                 ********************************************* */

function last_id(){
    global $connection;
    return mysqli_insert_id($connection);
}

function set_message($msg){
    if(!empty($msg)){
    $_SESSION['message'] = $msg;
    } else {
    $msg = "";
        }
}

function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location){
 
    return header("Location: {$location}");
}


function adminGuard(){
    if($_COOKIE['role']!== "admin"){
        redirect("../index2.php");
    }
}

function query($sql){

    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;
    if(!$result){
        die ("QUERY FAILED" . mysqli_error($connection));
    }
}

// prevents sql injections.
function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

/* *********************************************                             FRONT END                                 ********************************************* */

// displays products on index page & shop page
function get_products ($perPage = "9"){
     $rows = count_all_products_in_stock();
   
    if(isset($_GET['page'])){ //get page from URL if its there

        $page = preg_replace('#[^0-9]#', '', $_GET['page']);//filter everything but numbers



    } else{// If the page url variable is not present force it to be number 1

        $page = 1;

    }


    $perPage = 9; // Items per page here 

    $lastPage = ceil($rows / $perPage); // Get the value of the last page


    // Be sure URL variable $page(page number) is no lower than page 1 and no higher than $lastpage

    if($page < 1){ // If it is less than 1

        $page = 1; // force if to be 1

    }elseif($page > $lastPage){ // if it is greater than $lastpage

        $page = $lastPage; // force it to be $lastpage's value

    }

    $middleNumbers = ''; // Initialize this variable

    // This creates the numbers to click in between the next and back buttons

    $sub1 = $page - 1;
    $sub2 = $page - 2;
    $add1 = $page + 1;
    $add2 = $page + 2;


    if($page == 1){

        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';

    } elseif ($page == $lastPage) {
        
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';

    }elseif ($page > 2 && $page < ($lastPage -1)) {

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'">' .$sub2. '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';

        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';

            $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">' .$add2. '</a></li>';


    } elseif($page > 1 && $page < $lastPage){

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page= '.$sub1.'">' .$sub1. '</a></li>';

        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';

    }


    // This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query


    $limit = 'LIMIT ' . ($page-1) * $perPage . ',' . $perPage;


    // $query2 is what we will use to to display products with out $limit variable

    $query2 = query(" SELECT * FROM products WHERE product_quantity >= 1 ". $limit);
    confirm($query2);


    $outputPagination = ""; // Initialize the pagination output variable


    // If we are not on page one we place the back link

    if($page != 1){


        $prev  = $page - 1;

        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">Back</a></li>';
    }

    // Lets append all our links to this variable that we can use this output pagination

    $outputPagination .= $middleNumbers;


    // If we are not on the very last page we the place the next link

    if($page != $lastPage){


        $next = $page + 1;

        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Next</a></li>';

    }


    // Done with pagination

   while($row = fetch_array($query2)){

        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER
        <div class="col-sm-4 col-lg-4">
             <div class="thumbnail" >
                <a href="item.php?id={$row['product_id']}"> <img style="width:90px" src="../resources/{$product_image}" alt=""> </a>   
                <div class="caption"  style="height: 215px">
                    <h5><a href="item.php?id={$row ['product_id']}">{$row['product_title']}</a></h5>
                    <h6>{$row['product_number']}</h6>
                    <p>{$row['short_desc']}.</p>
                    <h6>{$row['product_uom']}</h6>
                    
                    <a class="btn btn-success" href="../resources/cart.php?add={$row ['product_id']}">ADD</a><h4 class="pull-right">&#36; {$row['product_price']}</h4>
                    
                </div>
            </div>
        </div>       
DELIMETER;
   
        echo $product;
    }
        echo "<div class='text-center' style='clear: both;' ><ul class='pagination' >{$outputPagination}</ul></div>";
}

// gets categories
function get_categories(){
    $query = query("SELECT * FROM categories");
      confirm($query); 

    while($row = fetch_array($query)) 
    {
        $categories_links = <<<DELIMETER

            <a href='category.php?id={$row['cat_id']}' class ='list-group-item'>{$row['cat_title']}</a>
DELIMETER;       
        echo $categories_links;
    }
}

// displays products based on their categories
function get_products_in_cat_page(){
    $query = query("SELECT * FROM products WHERE product_category_id =" . escape_string($_GET['id']). " AND product_quantity >=1");
    confirm($query);
    while ($row = fetch_array($query)){
        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER

        <div class="col-sm-4 col-lg-4">
             <div class="thumbnail" >
                <a href="item.php?id={$row['product_id']}"> <img style="width:90px" src="../resources/{$product_image}" alt=""> </a>   
                <div class="caption"  style="height: 215px">
                    <h5><a href="item.php?id={$row ['product_id']}">{$row['product_title']}</a></h5>
                    <h6>{$row['product_number']}</h6>
                    <p>{$row['short_desc']}.</p>
                    <h6>{$row['product_uom']}</h6>
                    
                    <a class="btn btn-success" href="../resources/cart.php?add={$row ['product_id']}">ADD</a><h4 class="pull-right">&#36; {$row['product_price']}</h4>
                    
                </div>
            </div>
        </div>

DELIMETER;
    echo $product;
    }
}

// display name of the category in cat page
function cat_title(){
    $category_query = query("SELECT * FROM categories WHERE cat_id = ." {$product_category_id}. " ");
    confirm($category_query);
    while($category_row = fetch_array($category_query)){
        return $category_row['cat_title'];
 }
}

// gets products in shop page
function get_products_in_shop_page(){
   $query = query("SELECT * FROM products WHERE product_quantity >=1");
    confirm($query);
    while ($row = fetch_array($query)){
        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER

        <div class="col-sm-4 col-lg-4 col-md-4">
             <div class="thumbnail">
                <a href="item.php?id={$row['product_id']}"> <img style="width:90px" src="../resources/{$product_image}" alt=""> </a>   
                <div class="caption" style ="height: 200px">
                    <h4><a href="item.php?id={$row ['product_id']}">{$row['product_title']}</a></h4>
                    <h6>{$row['product_number']}</h6>
                    <h6>CUST{$row['product_location']}</h6>
                    <p>{$row['short_desc']}.</p>
                    
                    <a class="btn btn-success" href="../resources/cart.php?add={$row ['product_id']}">ADD</a> <a href=item.php?id={$row['product_id']} class = "btn btn-default">More Info </a><h4 class="pull-right">&#36; {$row['product_price']}</h4>
                    
                </div>
            </div>
        </div>

DELIMETER;
    echo $product;
    }
}

// admin login & custodial needs work.
function login_user(){
   if(isset($_POST['login'])) {
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);
       
       
        
        // hash format to encrypt the password
            $hashFormat = "$2y$10$"; 
         // is a string at least 22 characters
            $salt = "iusesomecrazystrings22";

            $hashF_and_salt = $hashFormat . $salt;
       
        // need to declare the variable again for it to take the encrypted                password other wise it will not be encrypted.
            $password = crypt($password,$hashF_and_salt); 
       

            $query = query("SELECT * FROM users where username = '{$username}' AND password = '{$password}' ");
            confirm($query);
            

                $row = fetch_array($query);
                $user_role = $row['user_role'];
                setcookie('username', $username, time() + 3.154e+7);
                setcookie('role', $user_role, time() + 3.154e+7);
        
        if(mysqli_num_rows($query)==0){
            set_message("Your Password or Username are incorrect");
            // $username = "unregistered user";
            redirect("../public/index.php");
            
            } 
            else {

            
            if($user_role==="admin"){
            redirect("admin");
             $_SESSION['username'] = $username;   
            }
            
            else{
               redirect("index2.php");
               $_SESSION['username'] = $username; 
                }
            
            } 
        

        }
            
   
        
}

// doesn't work needs to be added a third-party plug in SMTP_SERVER or configure it. 
// using mailto() instead
function send_message(){
    if(isset($_POST['submit'])){ 

        $to          =   "rowz8@me.com";
        $from_name   =   $_POST['name'];
        $subject     =   $_POST['subject'];
        $email       =   $_POST['email'];
        $message     =   $_POST['message'];

        $headers = "From: {$from_name} {$email}";

        $result = mail($to, $subject, $message,$headers);
        
        if(!$result) {

            set_message("Sorry we could not send your message");
            redirect("contact.php");
        } else {

            set_message("Your message has been sent");
            redirect("contact.php");
        }
    }    
}

// displays all the meetings in the front
function display_meetings(){
    $query = query("SELECT * FROM meetings WHERE MONTH(month) = MONTH(NOW()) ORDER BY meeting_date asc");
    confirm($query);

    while($row = fetch_array($query)) {
        $meeting_date           = $row['meeting_date'];
        $meeting_month          = $row['meeting_date'];
        $meeting_day            = $row['meeting_date'];
        $date                   = date_create($meeting_date);

        $meeting_date           = date_format($date, 'm/d/y');
        $meeting_month          = date_format($date, 'M');
        $meeting_day            = date_format($date, 'D');
        
       

        $meetings = <<<DELIMETER
 
             <div class="col-2 text-right">
				<h1 class="display-4"><span class="badge badge-secondary">{$meeting_date}</span></h1>
				<h2>{$meeting_month}</h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong>{$row['meeting_title']}</strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> {$meeting_day}</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> {$row['meeting_time']}</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> {$row['meeting_location']}</li>
				</ul>
				<p>{$row['meeting_description']}</p>
              
			</div>
            <hr>  
            
DELIMETER;
    echo $meetings;
    }
}

// displays the buildings for the order
function buildings_front(){

    $query = query ("SELECT * FROM buildings");
    confirm($query);
            while($row = mysqli_fetch_array($query)){
                $building_options = <<<DELIMETER

                 <option value="{$row['building_name']}">{$row['building_name']}</option>            
DELIMETER;    
        echo $building_options;
    }
}

// adds the building to the order
function add_building_order(){
    if(isset($_POST[‘update])){

    
    $building_id        = escape_string($_POST['building_id']); 
    $building_name      = escape_string($_POST['building_name']); 
    
    }$_POST['building_name'];
    echo $_POST['building_id'];
    
}

// displays the order at the thank you page
function last_order(){

    // display the las product added 
    $query = query("SELECT * FROM orders ORDER BY order_id DESC LIMIT 1");
    confirm($query);

    while($row= fetch_array($query)) {
        $order = <<<DELIMITER

        <td class="text-center" >{$row['order_id']}</td>
        <td class="text-center" >&#36; {$row['order_amount']}</td>
        <td class="text-center" >{$row['order_building']}</td>
        
DELIMITER;
    } echo $order;
    
}

// displays the team in the front
function team(){
    $users_query = query(" SELECT * FROM users WHERE user_team = 1");
    confirm($users_query);

    while($row = fetch_array($users_query)) {

        $user_id = $row['user_id'];
        $username = ucwords($row['username']);
        $email = $row['email'];
        $user_firstname = ucwords($row['user_firstname']);
        $user_lastname = ucwords($row['user_lastname']);
        $user_role   = ucwords($row['user_role']);
        $user_brief  = ucwords($row['user_brief']);
        
        $user_photo = display_image($row['user_photo']);

        $users = <<<DELIMETER
            
          <div class="col-sm-4 col-lg-4">
            <div class="card">
              <img  class="center" src="../resources/$user_photo" alt="$username" >
                <div class="caption" style="height: 180px">
                  <h2>$user_firstname $user_lastname</h2>
                  <p class="title">$user_role</p>
                  <p>$user_brief</p>
                  <p>$email</p>
                  <br>
            <!-- <form name="" id="contactForm" method ="post" action="mailto:$email"> -->
            <!-- <p><button type="submit" value="Send" class="button">Contact</button></p> -->
              </div>
           </div>
          </div>
        
DELIMETER;
        echo $users;

}
}

// displays the title of the category selected
function title(){
    if(isset($_GET['id'])){
        $query = query("SELECT * FROM categories WHERE cat_id =" . escape_string($_GET['id']). " ");
        confirm($query);
        while($cat = fetch_array($query)){

            $cat_t = <<<DELIMETER

            <h1 class="text-center">{$cat['cat_title']}</h1>

DELIMETER;
            echo $cat_t;
        }
    }
}

// Password forgot
// function forgot_psw(){
//     if(isset($_POST['forgot'])){
//         $username               = escape_string($_POST['username']);
//         $user_id                = escape_string($_POST['id']);
//         $password               = escape_string($_POST['password']);
//         $email                  = escape_string($_POST['email']);
        
        
//         $query = query("SELECT * FROM users where user_id = '{$user_id}' AND email = '{$email}' LIMIT 1");
//             confirm($query);

//         $row = fetch_array($query);

//         if(mysqli_num_rows($query)==0){
//             set_message("Your Email or Username are incorrect");
//             // $username = "unregistered user";
//             redirect("../public/forgot.php");
            
//             } 
//         if(mysqli_num_rows($query)==1){
//                 $uppercase      = preg_match('@[A-Z]@', $password);
//                 $lowercase      = preg_match('@[a-z]@', $password);
//                 $number         = preg_match('@[0-9]@', $password);
//                 $specialChars   = preg_match('@[^\w]@', $password);

//             if(!$uppercase || !$lowercase ||!$number || !$specialChars || strlen($password) < 8) {
//                     echo set_message("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
//                 }

//             else {

//                 // hash format to encrypt the password
//                 $hashFormat = "$2y$10$"; 
//                 // is a string at least 22 characters
//                 $salt = "iusesomecrazystrings22";

//                 $hashF_and_salt = $hashFormat . $salt;
//                 // need to declare the variable again for it to take the encrypted password other wise it will not be encrypted.
//                 $password = crypt($password,$hashF_and_salt); 
            
//                 //  make sure there is a space after the word SET so the database can be updated 
//                 $query ="UPDATE users SET ";
//                 $query.="password                = '{$password }' ";
                
//                 $send_update_query = query($query);
//                 confirm($send_update_query);
//                 set_message("User {$username} has been Updated");
//                 redirect("../public/index.php");
//             }   
            
//         }
//     }
// }

// displays the search
function display_search(){
    if(isset($_GET['search'])){
    
    $search = escape_string($_GET['search']);

    $query = query("SELECT * FROM products WHERE product_title LIKE '%$search%' AND product_quantity >=1");
    confirm($query);
    
    if(mysqli_num_rows($query) == 0){
        set_message("Product not found");
        redirect("search.php");
        
    } else{
            while($row = fetch_array($query)) {
            $orders = <<<DELIMETER
            
            <tr>
            <td>{$row['product_title']}</td>
            <td>CUST{$row['product_location']}</td>
            <td>&#36; {$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
            <td>{$row['product_uom']}</td>
            <td><a href=item.php?id={$row['product_id']} class = "btn btn-default">More Info </a> </td>
            <td><a class="btn btn-success" href="../resources/cart.php?add={$row ['product_id']}">ADD</a></td>
           
            
            </tr>
DELIMETER;
    echo $orders;
            }          
        }
    } 
}
/* *********************************************                             BACKEND                                 ********************************************* */

// Get total of number of rows from the database
function count_all_records($table){
    return mysqli_num_rows(query('SELECT * FROM '.$table));
}

// gives the number of items under processing status
function count_all_records_processing(){
    return mysqli_num_rows(query('SELECT * FROM orders WHERE order_status = "Processing"' ));
}

// gives the number of items under approved status
function count_all_records_approved(){
    return mysqli_num_rows(query('SELECT * FROM orders WHERE order_status = "Approved"' ));
}

//gives the number of items under completed status
function count_all_records_completed(){
    return mysqli_num_rows(query('SELECT * FROM orders WHERE order_status = "Completed"' ));
}

// Gets the total amount of products in stock
function count_all_products_in_stock(){

    return mysqli_num_rows(query('SELECT * FROM products WHERE product_quantity >= 1'));
}

// displays all orders regarding status a month 
function display_orders(){
    $query = query("SELECT * FROM `orders` WHERE  (`order_date` > DATE_SUB(now(), INTERVAL 30 DAY))");
    confirm($query);

    while($row = fetch_array($query)) {
        $order_date = escape_string($row['order_date']);
        $date = date_create($order_date);
        $order_date = date_format($date, 'm/d/Y G:i:A');
        $order_name = ucwords($row['order_name']);

        $orders = <<<DELIMETER
            <tr>
            <td><a class="btn btn-info" href="index.php?order_id={$row['order_id']}">{$row['order_id']}</td>
            <td>$order_date</td>
            <td>&#36; {$row['order_amount']}</td>
           <!-- <td>{$row['order_transaction']}</td> -->
           <td>{$row['order_status']}</td>
           <!--  <td>{$row['order_currency']}</td>  -->
            <td>{$order_name}</td>
            <td>{$row['order_building']}</a></td>
           
            
            </tr>
DELIMETER;
    echo $orders;
    } 
}

// deletes orders in admin
function delete_order(){
    if(isset($_GET['delete_order_id'])){


    $query = query("DELETE FROM orders WHERE order_id = ".escape_string($_GET['delete_order_id'])." ");
    confirm($query);
    set_message("Order was Deleted");
    // old path ("../../../public/admin/index.php?orders") --- live server path ("../../../admin/index.php?orders")
    redirect("index.php?orders");
    

    } else {

        redirect("index.php?orders");

    }
}

// function that displays order details
function show_order_details(){
    

    $query = query("SELECT * FROM reports WHERE order_id = " . escape_string($_GET['order_id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {

    $product_title          = escape_string($row['product_title']);
    $product_location       = escape_string($row['product_location']);
    $product_quantity       = escape_string($row['product_quantity']);
    $product_number         = escape_string($row['product_number']); 
    $order_building         = escape_string($row['order_building']); 
    $order_name             = escape_string($row['order_name']); 
        
        $view_order = <<<DELIMETER
             <tr>
            
            <td>{$row['order_id']}</td>
            <td>{$row['order_building']}</td>
            <td>{$row['order_name']}</td>
            <td>{$row['product_title']}</td>
            <td>CUST{$row['product_location']}</td>
            <td>{$row['product_number']}</td>
            <td>{$row['product_quantity']}</td>
            
            </tr>
             
        
DELIMETER;
    echo $view_order;
    
    } 
}

// function that displays order details
function show_order(){
    

    $query = query("SELECT * FROM reports WHERE order_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {

    $product_title          = escape_string($row['product_title']);
    $product_location       = escape_string($row['product_location']);
    $product_quantity       = escape_string($row['product_quantity']);
    $product_number         = escape_string($row['product_number']); 
    $order_building         = escape_string($row['order_building']); 
    $order_name             = escape_string($row['order_name']); 
        
        $view_order = <<<DELIMETER
             <tr>
            
            <td>{$row['order_id']}</td>
            <td>{$row['order_building']}</td>
            <td>{$row['order_name']}</td>
            <td>{$row['product_title']}</td>
            <td>CUST{$row['product_location']}</td>
            <td>{$row['product_number']}</td>
            <td>{$row['product_quantity']}</td>
            
            </tr>
             
        
DELIMETER;
    echo $view_order;
    
    }
  
    
}

// shows the date of the order
function order_date(){
    
    if(isset($_GET['order_id'])) {
        $query = query("SELECT * from orders WHERE order_id = " .escape_string($_GET['order_id']). "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $order_date = escape_string($row['order_date']);
            $date = date_create($order_date);
            $order_date = date_format($date, 'm/d/y');
             
            $view_date = <<<DELIMETER

            <h2 class="small">
            $order_date
            
            </h2>

DELIMETER;
        echo $view_date;
        }

    }

    
}

// shows buttons in order view prints and delete
function show_buttons(){
    if(isset($_GET['order_id'])) {
        
        $show_buttons= <<<DELIMETER

        <input type="button" class="btn btn-warning btn-lg" value="Print this page" onClick="window.print()">
          
        <td><a class = "btn btn-danger btn-lg" href ="index.php?delete_order_id={$_GET['order_id']}">Delete</a></td>
          
        </aside><!--SIDEBAR-->

DELIMETER;

    echo $show_buttons;
    }
    
}

// displays the reports in admin  
function display_reports(){
    $query = query("SELECT * FROM reports WHERE order_id = order_id");
    confirm($query);

    while($row = fetch_array($query)) {
        
        $reports = <<<DELIMETER
             <tr>
            <td><a class="btn btn-info" href="index.php?report_id={$row['report_id']}&order_id={$row['order_id']}">{$row['report_id']}</td>            
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
           <!--  <td>{$row['product_title']}</td> -->
            <!-- <td>{$row['product_location']}</td> -->
            <!-- <td>{$row['product_number']}</td> -->
            <!-- <td>&#36; {$row['product_price']}</td> -->
            <!-- <td>{$row['product_quantity']}</td> -->
            <td>{$row['order_building']}</a></td>
            </tr>
DELIMETER;
    echo $reports;
    }
}

// function that displays report details
// function show_report_details(){
    

//     $query = query("SELECT * FROM reports WHERE report_id = " . escape_string($_GET['report_id']) . " ");
//     confirm($query);

//     while($row = fetch_array($query)) {

//     $product_title          = escape_string($row['product_title']);
//     $product_location       = escape_string($row['product_location']);
//     $product_quantity       = escape_string($row['product_quantity']);
//     $product_number         = escape_string($row['product_number']); 
//     $order_building         = escape_string($row['order_building']); 
//     $order_name             = escape_string($row['order_name']); 
        
//         $view_order = <<<DELIMETER
//              <tr>
            
//             <td>{$row['order_id']}</td>
//             <td>{$row['order_building']}</td>
//             <td>{$row['order_name']}</td>
//             <td>{$row['product_title']}</td>
//             <td>CUST{$row['product_location']}</td>
//             <td>{$row['product_number']}</td>
//             <td>{$row['product_quantity']}</td>
            
//             </tr>
             
        
// DELIMETER;
//     echo $view_order;
    
//     }
  
    
// }

// displays all the products in admin
function get_products_in_admin(){
   
    $query = query("SELECT * FROM products ORDER BY product_id desc");
    confirm($query);
    while($row = fetch_array($query))
   {
        $category = show_product_category_title($row['product_category_id']); 
        $product_image = display_image($row['product_image']);

        $product = <<<DELIMETER
       
              <tr>
                <td><a class = "btn btn-danger" href = "index.php?edit_product&id={$row['product_id']}">{$row['product_id']}<a></td>
                <td>{$row['product_title']}<br>
                <img width='50' src="../../resources/{$product_image}" alt="">
                </td>
                <td>{$category}</td>
                <td>&#36; {$row['product_price']}</td>
                <td>{$row['product_quantity']}</td>
                <td>CUST{$row['product_location']}</td>
                <td>{$row['product_number']}</td>
                
            </tr>
                
           
DELIMETER;
   
        echo $product;
    }
     
}

// deletes products in admin
function delete_product() {

    if(isset($_GET['delete_product_id'])){


    $query = query("DELETE FROM products WHERE product_id = ".escape_string($_GET['delete_product_id'])." ");
    confirm($query);

    set_message("Product Deleted");
    // old path ("../../../public/admin/index.php?products")  live server path ("../../../admin/index.php?products")
    redirect("index.php?products");
    

    } else {

        
        redirect("index.php?products");

        }
    
}

// display image admin
function display_image($picture){
    global $upload_directory;
    return $upload_directory . DS . $picture;
}

//  adds new products to the page admin
function add_product(){
    if(isset($_POST['publish'])){

    $product_title          = escape_string($_POST['product_title']);
    $product_category_id    = escape_string($_POST['product_category_id']);
    $product_price          = escape_string($_POST['product_price']);
    $product_description    = escape_string($_POST['product_description']);
    $product_quantity       = escape_string($_POST['product_quantity']);
    $short_desc             = escape_string($_POST['short_desc']);
    $product_location       = escape_string($_POST['product_location']);
    $product_number         = escape_string($_POST['product_number']); 
    $product_uom            = escape_string($_POST['product_uom']); 
    $product_image          = escape_string($_FILES['file']['name']);
    $image_temp_location    = escape_string($_FILES['file']['tmp_name']);

    move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image );

    $query = query ("INSERT INTO products (product_title, product_category_id, product_price, product_description, product_quantity, product_uom, short_desc, product_location, product_number, product_image) VALUES ('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$product_quantity}', '{$product_uom}', '{$short_desc}', '{$product_location}', '{$product_number}', '{$product_image}' )");
    $last_id = last_id();
    confirm($query);
    set_message("Product {$product_title} was Added");
    redirect("index.php?products");
    }
}

// shows the next product location number available.
function show_last_product_number(){

  $query = query("SELECT * from products ORDER BY product_location DESC LIMIT 1");
  confirm($query);
    
    while($row = fetch_array($query)){
      $product_location = $row['product_location'];
      $product_location = $product_location + 1;
      return $product_location;
    }
}

// shows categories links in the add product page admin
function show_categories_add_product_page(){

    $query = query ("SELECT * FROM categories");
    confirm($query);
            while($row = mysqli_fetch_array($query)){
                $category_options = <<<DELIMETER

                 <option value="{$row['cat_id']}">{$row['cat_title']}</option>            
DELIMETER;    
        echo $category_options;
    }
}

// shows category title in the get products in admin
function show_product_category_title($product_category_id){
    $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
    confirm($category_query);
    while($category_row = fetch_array($category_query)){
        return $category_row['cat_title'];
    }
}

// edits the product
function update_product(){
    if(isset($_POST['update'])){

    $product_title          = escape_string($_POST['product_title']);
    $product_category_id    = escape_string($_POST['product_category_id']);
    $product_price          = escape_string($_POST['product_price']);
    $product_description    = escape_string($_POST['product_description']);
    $product_quantity       = escape_string($_POST['product_quantity']);
    $product_uom            = escape_string($_POST['product_uom']);
    $short_desc             = escape_string($_POST['short_desc']);
    $product_location       = escape_string($_POST['product_location']);
    $product_number         = escape_string($_POST['product_number']); 
    $product_image          = escape_string($_FILES['file']['name']);
    $image_temp_location    = escape_string($_FILES['file']['tmp_name']);

    // $value = $product_quantity + $_POST['product_quantity'];

    if(empty($product_image)){
        $get_pic = query("SELECT product_image FROM products WHERE product_id=" .escape_string($_GET['id'])."");
        confirm($get_pic);
        
        while ($pic = fetch_array($get_pic)){
            $product_image = $pic['product_image'];
        }
    }

    move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image );

    //  make sure there is a space after the word SET so the database can be updated 
    $query = "UPDATE products SET ";
    $query.="product_title                  = '{$product_title }',";
    $query.="product_category_id            = '{$product_category_id }',";
    $query.="product_price                  = '{$product_price }',";
    $query.="product_description            = '{$product_description }',";
    $query.="product_quantity               = '{$product_quantity }',";
    $query.="short_desc                     = '{$short_desc }',";
    $query.="product_location               = '{$product_location }',";
    $query.="product_number                 = '{$product_number }',";
    $query.="product_uom                    = '{$product_uom }',";
    $query.="product_image                  = '{$product_image }'";
    $query.="WHERE product_id               = " . escape_string($_GET['id']);

    $send_update_query = query($query);
    confirm($send_update_query);
    set_message("Product {$product_title} has been Updated");
    redirect("index.php?products");
    }
}

// gets categories table to categories Admin
function show_categories_in_admin(){

    $category_query = query(" SELECT * FROM categories ");
    confirm($category_query);

    while($row = fetch_array($category_query)) {

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        $category = <<<DELIMETER

        <tr>
            <td>{$cat_id}</td>
            <td>{$cat_title}</td>
            <td><a class="btn btn-danger" href ="index.php?delete_category_id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

    echo $category;

    }
}

// adds a new category in Admin
function add_category(){

    if(isset($_POST['add_category'])) {

        $cat_title = escape_string($_POST['cat_title']);
        if(empty($cat_title) || $cat_title == " ") {
           set_message("Title cannot be empty");
        } else {
        $add_new_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}')");

        confirm($add_new_cat);
        set_message("Category Created");

        }

    }
}

// deletes category in Admin
function delete_category(){
    if(isset($_GET['delete_category_id'])){


    $query = query("DELETE FROM categories WHERE cat_id = ".escape_string($_GET['delete_category_id'])." ");
    confirm($query);
    
     // old path ("../../../public/admin/index.php?categories") --- live server path ("index.php?categories")
    set_message("Category Deleted");
    redirect("index.php?categories");
    

    } else {

        redirect("index.php?categories");

    }
}

// displays user them in Admin 
function display_users(){
    $users_query = query(" SELECT * FROM users ");
    confirm($users_query);

    while($row = fetch_array($users_query)) {

        $user_id = ucwords($row['user_id']);
        $username = $row['username'];
        $email = $row['email']; 
        $user_firstname = ucwords($row['user_firstname']);
        $user_lastname = ucwords($row['user_lastname']);
        $user_role   = ucwords($row['user_role']);
        

        $user_photo = display_image($row['user_photo']);

        $user = <<<DELIMETER

        <tr>
            <td><a class="btn btn-warning" href= "index.php?edit_user&id={$row['user_id']}"><span class="glyphicon glyphicon-pencil"> {$user_id}</span></a></td>
            <td><a href ="index.php?add_user&id={$row['user_id']}"></a><img width='50' src="../../resources/{$user_photo}" alt="">
            </td>
            <td>{$username}</td>
            <td>{$user_firstname}</td>
            <td>{$user_lastname}</td>
            <td>{$user_role}</td>
            <td>{$email}</td>
           
                    <td></a></td>
        </tr>

DELIMETER;

    echo $user;

    }
}

// adds user in Admin   
function add_user(){
    if(isset($_POST['add_user'])){
   
            $username               = escape_string($_POST['username']);
            $password               = escape_string($_POST['password']);
            $user_role              = escape_string($_POST['user_role']);
            $email                  = escape_string($_POST['email']);
            $user_firstname         = escape_string($_POST['user_firstname']);
            $user_lastname          = escape_string($_POST['user_lastname']); 
            $user_photo             = escape_string($_FILES['file']['name']);
            $user_team              = escape_string($_POST['user_team']); 
            $photo_temp             = escape_string($_FILES['file']['tmp_name']);
            $user_brief             = escape_string($_POST['user_brief']);

            
            move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);

                $uppercase      = preg_match('@[A-Z]@', $password);
                $lowercase      = preg_match('@[a-z]@', $password);
                $number         = preg_match('@[0-9]@', $password);
                $specialChars   = preg_match('@[^\w]@', $password);

                if(!$uppercase || !$lowercase ||!$number || !$specialChars || strlen($password) < 8) {
                    echo set_message("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
                } 
                else {

                // hash format to encrypt the password
                $hashFormat = "$2y$10$"; 
                // is a string at least 22 characters
                $salt = "iusesomecrazystrings22";

                $hashF_and_salt = $hashFormat . $salt;
                // need to declare the variable again for it to take the encrypted password other wise it will not be encrypted.
                $password = crypt($password,$hashF_and_salt); 

        
                $query = query ("INSERT INTO users (username, password, user_role, email, user_firstname, user_lastname, user_photo, user_team, user_brief) VALUES ('{$username}', '{$password}',  '{$user_role}','{$email}', '{$user_firstname}', '{$user_lastname}', '{$user_photo}', '{$user_team}', '{$user_brief}' )");
                $last_id = last_id();
                confirm($query);
                set_message("User {$username} was created");
                redirect("index.php?users");
            
                }        
    }

}

// deletes user in Admin
function delete_user(){
    if(isset($_GET['delete_user_id'])){


    $query = query("DELETE FROM users WHERE user_id = ".escape_string($_GET['delete_user_id'])." ");
    confirm($query);
    set_message("User Deleted");
    // old path ("../../../public/admin/index.php?users") live server path ("../../../admin/index.php?users")
    redirect("index.php?users");
    

    } else {

        redirect("index.php?users");

    }
}

// update user in Admin   
function update_user(){
    if(isset($_POST['submit'])){

    $username               = escape_string($_POST['username']);
    $password               = escape_string($_POST['password']);
    $user_role              = escape_string($_POST['user_role']);
    $email                  = escape_string($_POST['email']);
    $user_firstname         = escape_string($_POST['user_firstname']);
    $user_lastname          = escape_string($_POST['user_lastname']); 
    $user_photo             = escape_string($_FILES['file']['name']);
    $image_temp_location    = escape_string($_FILES['file']['tmp_name']);
    $user_team              = escape_string($_POST['user_team']);
    $user_brief             = escape_string($_POST['user_brief']);

     if(empty($user_photo)){
         $get_pic = query("SELECT user_photo FROM users WHERE user_id = " .escape_string($_GET['id'])."");
         confirm($get_pic);
        
         while ($pic = fetch_array($get_pic)){
             $user_photo = $pic['user_photo'];
         }
     }
                
    move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $user_photo );
        
                $uppercase      = preg_match('@[A-Z]@', $password);
                $lowercase      = preg_match('@[a-z]@', $password);
                $number         = preg_match('@[0-9]@', $password);
                $specialChars   = preg_match('@[^\w]@', $password);

            if(!$uppercase || !$lowercase ||!$number || !$specialChars || strlen($password) < 8) {
                    echo set_message("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
                }

            else {

                // hash format to encrypt the password
                $hashFormat = "$2y$10$"; 
                // is a string at least 22 characters
                $salt = "iusesomecrazystrings22";

                $hashF_and_salt = $hashFormat . $salt;
                // need to declare the variable again for it to take the encrypted password other wise it will not be encrypted.
                $password = crypt($password,$hashF_and_salt); 
        
    //  make sure there is a space after the word SET so the database can be updated 
    $query ="UPDATE users SET ";
    $query.="username                  = '{$username }',";
    $query.="password                  = '{$password }',";
    $query.="email                     = '{$email }',";
    $query.="user_firstname            = '{$user_firstname }',";
    $query.="user_lastname             = '{$user_lastname }',";
    $query.="user_role                 = '{$user_role }',";
    $query.="user_photo                = '{$user_photo }', ";
    $query.="user_role                 = '{$user_role }', ";
    $query.="user_team                 = '{$user_team }', ";
    $query.="user_brief                = '{$user_brief }' ";
    $query.="WHERE user_id             = ".escape_string($_GET['id']);

                
    $send_update_query = query($query);
    confirm($send_update_query);
    set_message("User {$username} has been Updated");
    redirect("index.php?users");
            }
    }
}

//gets the orders display in the panel if status is set to approved displays a week
function get_orders_in_panel_approved(){

 $query = query("SELECT * FROM orders WHERE order_status=\"Approved\" AND (`order_date` > DATE_SUB(now(), INTERVAL 30 DAY))");
    confirm($query);

    while($row = fetch_array($query)) {

        $order_date = escape_string($row['order_date']);
        $date = date_create($order_date);
        $order_date = date_format($date, 'm/d/y');
        $order_name = ucwords($row['order_name']);
        
    $orders_panel = <<<DELIMETER
    
      <tr>
         <td><a class="btn btn-warning" href = "index.php?edit_index&id={$row['order_id']}">{$row['order_id']}</td>
        <!-- <td>{$row['order_transaction']}</td> -->
         <td>$order_date</td>
         <td> &#36; {$row['order_amount']}</td>
          <td> $order_name </td>
         <td>{$row['order_building']}</a></td>
        
         
         
         
         
      </tr>

DELIMETER;
    echo $orders_panel;
    }
}

//  show orders in processing status displays a week
function get_orders_in_panel_processing(){

 $query = query("SELECT * FROM orders WHERE order_status=\"Processing\" AND (`order_date` > DATE_SUB(now(), INTERVAL 8 DAY))");
    confirm($query);

    while($row = fetch_array($query)) {

        $order_date = escape_string($row['order_date']);
        $date = date_create($order_date);
        $order_date = date_format($date, 'm/d/y');
        $order_name = ucwords($row['order_name']);

    $orders_panel = <<<DELIMETER
    
      <tr>
         <td><a class="btn btn-danger" href = "index.php?edit_index&id={$row['order_id']}">{$row['order_id']}</td>
        <!-- <td>{$row['order_transaction']}</td> -->
         <td>{$order_date}</td>
         <td> &#36; {$row['order_amount']}</td>
         <td> {$order_name} </td>
         <td>{$row['order_building']}</a></td>
      </tr>


DELIMETER;
    echo $orders_panel;
    }
}

//  show order in completed status displays a month 
function get_orders_in_panel_completed(){

 $query = query("SELECT * FROM orders WHERE order_status=\"Completed\" AND (`order_date` > DATE_SUB(now(), INTERVAL 30 DAY))");
    confirm($query);

    while($row = fetch_array($query)) {

        $order_date = escape_string($row['order_date']);
        $date = date_create($order_date);
        $order_date = date_format($date, 'm/d/y');
        $order_name = ucwords($row['order_name']);

    $orders_panel = <<<DELIMETER
    
      <tr>
         <td> <a class="btn btn-success" href = "index.php?edit_index&id={$row['order_id']}">{$row['order_id']}</td>
        <!-- <td>{$row['order_transaction']}</td> -->
         <td>{$order_date}</td>
         <td> &#36; {$row['order_amount']}</td>
         <td>{$order_name}</td>
         <td>{$row['order_building']}  </a></td>
      </tr>

DELIMETER;
    echo $orders_panel;
    }
}

// shows orders Pending approval status displays a week approvals page
function get_orders_approvals(){

 $query = query("SELECT * FROM orders WHERE order_status=\"Processing\" ");
    confirm($query);

    while($row = fetch_array($query)) {

        $order_date = escape_string($row['order_date']);
        $date       = date_create($order_date);
        $order_date = date_format($date, 'm/d/y');
        $order_name = ucwords($row['order_name']);

        

    $orders_panel = <<<DELIMETER
    
      <tr>
         <td><a class="btn btn-danger" href = "index.php?edit_index&id={$row['order_id']}">{$row['order_id']}</td>
         <!-- <td>{$row['order_transaction']}</td> -->
         <td> {$order_date}</td>
         <td> &#36; {$row['order_amount']}</td>
         <td>  {$order_name}</td>
         <td>  {$row['order_building']}</a></td>
         
      </tr>

DELIMETER;
    echo $orders_panel;
    }
}

// updated order status 
function update_order(){
     if(isset($_POST['update'])){

    $order_status           = escape_string($_POST['order_status']);
    $order_id               = escape_string($_POST['order_id']);


    //  make sure there is a space after the word SET so the database can be updated 
    $query = "UPDATE orders SET ";
   
    $query.="order_status                       = '{$order_status }'";
    $query.="WHERE order_id                     = " . escape_string($_GET['id']);

    $send_update_query = query($query);
    confirm($send_update_query);
    set_message("Order {$order_id} has been Updated");
    redirect("index.php");
    }    
}

// function that adds new slides and displays them 
function add_slides(){

    if(isset($_POST['add_slide'])) {

        $slide_title        = escape_string($_POST['slide_title']);
        $slide_image        = escape_string($_FILES['file']['name']);
        $slide_image_loc    = escape_string($_FILES['file']['tmp_name']);


        if(empty($slide_title) || empty($slide_image)) {

            echo "<p>This field cannot be empty</p>";

        } else {

            move_uploaded_file($slide_image_loc, UPLOAD_DIRECTORY . DS . $slide_image);

            $query = query("INSERT INTO slides(slide_title, slide_image) VALUES('{$slide_title}', '{$slide_image}')");
            confirm($query);
            set_message("Slide Added");
            redirect("index.php?slides");
        }
    }
}

// function that gets all the slides
function get_slides(){

    $query = query("SELECT * FROM slides");
    confirm($query);
    while($row = fetch_array($query)){
        $slide_image = display_image($row['slide_image']);
        $slides = <<<DELIMETER

            <div class="item">
                <img class="slide-image" width ="910" src="../resources/{$slide_image}" alt="">
            </div>
DELIMETER;
        echo $slides;
    }
}

// function that gets the active slide by the slide_id
function get_active_slide(){

      $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);
    while($row = fetch_array($query)){
        $slide_image = display_image($row['slide_image']);
        $slide_active = <<<DELIMETER

            <div class="item active">
                <img class="slide-image" width ="910" src="../resources/{$slide_image}" alt="">
            </div>
DELIMETER;
        echo $slide_active;
    }
}

// function that gets the current slide 
function get_current_slide_in_admin(){

    $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);

    while($row = fetch_array($query)) {

        $slide_image = display_image($row['slide_image']);

        $slide_active_admin = <<<DELIMETER

        <img  class="img-responsive" src="../../resources/{$slide_image}" alt="">

DELIMETER;

        echo $slide_active_admin;
    }
}

// displays thumbnails images on the slides page
function get_slide_thumbnails(){
    $query = query("SELECT * FROM slides ORDER BY slide_id ASC ");
    confirm($query);

    while($row = fetch_array($query)) {

        $slide_image = display_image($row['slide_image']);

        $slide_thumb_admin = <<<DELIMETER


        <div class="col-xs-6 col-md-3 image_container">
    
            <a href="index.php?delete_slide_id={$row['slide_id']}">
        
                <img width="200" class="img-responsive slide_image" src="../../resources/{$slide_image}" alt="">

            </a>

            <div class="caption">

                <p>{$row['slide_title']}</p>

            </div>
        </div>

DELIMETER;
        echo $slide_thumb_admin;
    }

}

// deletes slides in admin
function delete_slide(){

    if(isset($_GET['delete_slide_id'])) {

        //  finds record 
        $query_find_image = query("SELECT slide_image FROM slides WHERE slide_id = " . escape_string($_GET['delete_slide_id']) . " LIMIT 1 ");
        confirm($query_find_image);

        $row = fetch_array($query_find_image);
        $target_path = UPLOAD_DIRECTORY . DS . $row['slide_image'];

        unlink($target_path);

        // deletes file found 
        $query_delete_image = query("DELETE FROM slides WHERE slide_id = " . escape_string($_GET['delete_slide_id']) . " ");
        confirm($query_delete_image);


        set_message("Slide Deleted");
        redirect("index.php?slides");

    } else {

    redirect("index.php?slides");
    }
}

//displays buildings
function display_buildings(){
    $building_query = query(" SELECT * FROM buildings");
    confirm($building_query);

    while($row = fetch_array($building_query)) {

        $building_id = $row['building_id'];
        $building_name = $row['building_name'];

        $building = <<<DELIMETER

        <tr>
            <tr>
            <td>{$building_id}</td>
            <td>{$building_name}</td>
            <td><a class = "btn btn-danger" href ="index.php?delete_building_id={$row['building_id']}"><span class = "glyphicon glyphicon-remove"></span></a></td>
            </tr>
        </tr>
      

DELIMETER;

        echo $building;

    }
}

 //adds building
function add_building(){

    if(isset($_POST['add_building'])) {

        $building_name = escape_string($_POST['building_name']);
        if(empty($building_name) || $building_name == " ") {
           set_message("Title cannot be empty");
        } else {
        $add_new_bldg = query("INSERT INTO buildings(building_name) VALUES('{$building_name}')");

        confirm($add_new_bldg);
        set_message("Building Created");

        }

    }
}

//deletes building
function delete_building(){
    if(isset($_GET['delete_building_id'])){


    $query = query("DELETE FROM buildings WHERE building_id = ".escape_string($_GET['delete_building_id'])." ");
    confirm($query);
    
     // old path ("../../../public/admin/index.php?categories") --- live server path ("index.php?categories")
    set_message("Building Deleted");
    redirect("index.php?buildings");
    

    } else {

        redirect("index.php?buildings");

    }
}

// displays stock items
function get_in_stock_products(){
    if(isset($_GET['in_stock_id'])){
    $query = query("SELECT * FROM products WHERE product_category_id=" .escape_string($_GET['in_stock_id'] ). " AND product_quantity >=1");
    confirm($query);
    while ($row = fetch_array($query)){
        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER

    
    <div class="col-md-3 col-lg-4">
             <div class="thumbnail">
                <a href ="index.php?edit_product&id={$row['product_id']}"><img width='80' src="../../resources/{$product_image}" alt=""></a>  
                <div class="caption" style ="height: 125px">
                    <h4><a href="index.php?edit_product&id={$row['product_id']}">{$row['product_title']}</a></h4>
                    <h6 class="small">{$row['product_number']}</h6>
                    <h6 class="small">CUST{$row['product_location']}</h6>
                    
                    
                </div>
            </div>
        </div>


DELIMETER;
    echo $product;
    }

    }
}

// displays categories in the back stock items
function get_categories_in_back(){
    $query = query("SELECT * FROM categories");
      confirm($query); 

    while($row = fetch_array($query)) 
    {
        $categories_links = <<<DELIMETER

            <a href='index.php?in_stock_id={$row['cat_id']}' class ='list-group-item'>{$row['cat_title']}</a>
DELIMETER;       
        echo $categories_links;
    }
}

// displays out of stock items
function get_out_of_stock_products(){
    if(isset($_GET['out_of_stock_id'])){
    $query = query("SELECT * FROM products WHERE product_category_id=" .escape_string($_GET['out_of_stock_id'] ). " AND product_quantity <=3");
    confirm($query);
    while ($row = fetch_array($query)){
        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER

    
    <div class="col-md-3 col-lg-4">
             <div class="thumbnail">
                <a href = index.php?edit_product&id={$row['product_id']}><img width='80' src="../../resources/{$product_image}" alt=""></a>  
                <div class="caption" style ="height: 125px">
                    <h4><a href="index.php?edit_product&id={$row['product_id']}">{$row['product_title']}</a></h4>
                    <h6 class="small">{$row['product_number']}</h6>
                    <h6 class="small">CUST{$row['product_location']}</h6>
                    
                    
                </div>
            </div>
        </div>
DELIMETER;
    echo $product;
    }

    }
}

// displays categories in the back for the out of stock
function get_categories_back(){
    $query = query("SELECT * FROM categories");
      confirm($query); 

    while($row = fetch_array($query)) 
    {
        $categories_links = <<<DELIMETER

            <a href='index.php?out_of_stock_id={$row['cat_id']}' class ='list-group-item'>{$row['cat_title']}</a>
DELIMETER;       
        echo $categories_links;
    }
}

// displays meetings in the back
function meetings(){
    $meetings_query = query(" SELECT * FROM meetings ");
    confirm($meetings_query);

    while($row = fetch_array($meetings_query)) {

        $meeting_id             = $row['meeting_id'];
        $meeting_title          = $row['meeting_title'];
        $meeting_description    = $row['meeting_description'];
        $meeting_location       = $row['meeting_location'];
        $meeting_date           = $row['meeting_date'];
        $meeting_time           = $row['meeting_time'];
        
        
        $date                   = date_create($meeting_date);
        $meeting_date           = date_format($date, 'm/d/y');
        
        $time                   = date_create($meeting_time);
        $meeting_time           = date_format($time, 'H:i:A');
        
        
        $meeting_month          = date_format($date, 'M');

       $meeting_day             = date_format($date, 'l');

        $meeting = <<<DELIMETER

        <tr>
            <td><a class="btn btn-warning" href= "index.php?edit_meeting&id={$row['meeting_id']}"><span class="glyphicon glyphicon-pencil"> {$meeting_id}</span></a></td>
            <td>{$meeting_title}
            </td>
            <td>{$meeting_description}</td>
            <td>{$meeting_location}</td>
            <td>{$meeting_date}</td>
            <td>{$meeting_time}</td>
            <td>{$meeting_day}</td>
            <td>{$meeting_month}</td>
           
                    <td></a></td>
        </tr>

DELIMETER;

    echo $meeting;

    }
}

//  adds new meetings
function add_meeting(){
    if(isset($_POST['publish'])){

    $meeting_title          = escape_string($_POST['meeting_title']);
    $meeting_description    = escape_string($_POST['meeting_description']);
    $meeting_location       = escape_string($_POST['meeting_location']);
    $meeting_date           = escape_string($_POST['meeting_date']);
    $meeting_time           = escape_string($_POST['meeting_time']);
    
    

    $query = query ("INSERT INTO meetings (meeting_title, meeting_description, meeting_location, meeting_date, meeting_time) VALUES ('{$meeting_title}', '{$meeting_description}', '{$meeting_location}', '{$meeting_date }', '{$meeting_time}' )");
    $last_id = last_id();
    confirm($query);
    set_message("Meeting {$meeting_title} was Added");
    redirect("index.php?meetings");
    }
}

// update meetings in Admin   
function update_meeting(){
    if(isset($_POST['update'])){

    $meeting_title          = escape_string($_POST['meeting_title']);
    $meeting_description    = escape_string($_POST['meeting_description']);
    $meeting_location       = escape_string($_POST['meeting_location']);
    $meeting_date           = escape_string($_POST['meeting_date']);
    $meeting_time           = escape_string($_POST['meeting_time']); 
    
        
    //  make sure there is a space after the word SET so the database can be updated 
    $query ="UPDATE meetings SET ";
    $query.="meeting_title                        = '{$meeting_title }',";
    $query.="meeting_description                  = '{$meeting_description }',";
    $query.="meeting_location                     = '{$meeting_location }',";
    $query.="meeting_date                         = '{$meeting_date }',";
    $query.="meeting_time                         = '{$meeting_time }'";
    
    $query.="WHERE meeting_id                     = ".escape_string($_GET['id']);

        
        
        
    $update_query = query($query);
    confirm($update_query);
    set_message("Meeting {$meeting_title} has been Updated");
    redirect("index.php?meetings");
    }
}

// deletes meetings in Admin
function delete_meeting(){
    if(isset($_GET['delete_meeting_id'])){


    $query = query("DELETE FROM meetings WHERE meeting_id = ".escape_string($_GET['delete_meeting_id'])." ");
    confirm($query);
    set_message("Meeting Deleted");
    // old path ("../../../public/admin/index.php?users") live server path ("../../../admin/index.php?users")
    redirect("index.php?meetings");
    

    } else {

        redirect("index.php?meetings");

    }
}
?>