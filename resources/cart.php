<?php require_once("config.php"); ?>

<?php
// adds product to cart
if(isset($_GET['add'])){
    $query = query("SELECT * FROM products WHERE product_id=" .escape_string($_GET['add'])." ");
    confirm($query);
    while($row = fetch_array($query)){
        if($row['product_quantity']!= $_SESSION['product_' . $_GET['add']]){
        $_SESSION['product_' . $_GET['add']] +=1;
        redirect($_SERVER["HTTP_REFERER"]);
        } else {
            set_message("We only have " . $row['product_quantity'] ."  " . "{$row['product_title']}". " available");
            redirect("../public/checkout.php");
        }
    }
}

//  decreases the amount by one on the cart
if(isset($_GET['remove'])){
    $_SESSION['product_' . $_GET['remove']]--;
    if($_SESSION['product_' . $_GET['remove']] < 1) {
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect($_SERVER["HTTP_REFERER"]);
    }else {
        redirect("../public/checkout.php");
    }
}

// deletes the product from the cart
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']]= '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
        redirect($_SERVER["HTTP_REFERER"]);
}



function cart(){
    $total          = 0;
    $item_quantity  = 0;
    $sub = 0;
    
    foreach($_SESSION as $name => $value){
        if($value > 0) {
            if(substr($name, 0, 8) == "product_") {
                $length = strlen($name);
                $id = substr($name, 8 , $length);
            $query = query ("SELECT * FROM products WHERE product_id = " .escape_string($id). "");
            confirm($query);
                while($row = fetch_array($query)){

                    $sub = $row['product_price']*$value;
                    // var_dump($sub);
                    $item_quantity +=$value;
                    $product_image = display_image($row['product_image']);
                   

                $product = <<<DELIMETER
                
                    <tr>
                            <td>{$row['product_title']}<br>

                                <img width='50' src='../resources/{$product_image}'>

                            </td>
                            <td> &#36; {$row['product_price']}</td>
                            <td>{$value}</td>
                            <td> &#36; {$sub}</td>
                            <td><a class = "btn btn-warning" href = "../resources/cart.php?remove={$row['product_id']}"><span class ="glyphicon glyphicon-minus"></span></a>  <a class = "btn btn-success" href = "../resources/cart.php?add={$row['product_id']}"><span class ="glyphicon glyphicon-plus"></span></a>  <a class = "btn btn-danger" href = "../resources/cart.php?delete={$row['product_id']}"><span class ="glyphicon glyphicon-remove"></span></a> </td>
                                
                    </tr>
                  
DELIMETER;
    echo $product;
   
        }
        $_SESSION['item_total'] = $total += $sub;
        $_SESSION['item_quantity'] =$item_quantity; 
    }

        }
        
        }     
}

// PayPal button
function show_paypal(){
    if (!isset($_SESSION['username'])){   
       set_message("You must login to be able to place an order");
    }
    if(isset($_SESSION['username'])){
    if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >=1  ) {
       $paypal_button = <<<DELIMETER
            <a class="btn btn-success" href="../public/buildings.php">Order Now! </a>
DELIMETER;
    return $paypal_button;    
    
    }
    }
}


// Gets the product id from the order  ---- need to find a way that the reportID doesn't get repeated took it from the foreach loop and nothing customer might not like this. -----
function process_transaction(){
       
    if (isset($_SESSION['item_total']) >=1   && ($_SESSION['username'])) {

        date_default_timezone_set('America/Chicago');
        
        $order_name ="";
        $amount = $_SESSION['item_total']; 
        $currency = 'USD';
        $status = 'Processing';
        $timestamp = date('Y-m-d H:i:s');
        $transaction = rand();
        $order_name = $_SESSION['username'];
        $order_building = $_POST['building_id'];

        $total = 0;
        $item_quantity = 0;
        
        $send_order = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency, order_date, order_name, order_building) VALUES ('{$amount}','{$transaction}','{$status}','{$currency}','{$timestamp}','{$order_name}', '{$order_building}')");
        
        // gets the order id from the session
        $last_id = last_id();
        confirm($send_order);

        foreach ($_SESSION as $name => $value) {

        if($value > 0 ) {

        if(substr($name, 0, 8 ) == "product_") {

        $length = strlen($name);
        $id = substr($name, 8 , $length);

        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
        confirm($query);
    
        while($row = fetch_array($query)) {
        $product_price = $row['product_price'];
        $product_title = $row['product_title'];
        $product_location = $row['product_location'];
        $product_number = $row['product_number'];
        $sub = $row['product_price']*$value;

        $item_quantity +=$value;

        //Updates product quantity
        $update_query = query("UPDATE products SET product_quantity = product_quantity - $value WHERE product_id = " .escape_string($id). " ");
        confirm($update_query);
            
        
        // inserts report on database
        $insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_location, product_number, product_price, product_quantity, order_building, order_name, order_status) VALUES('{$id}', '{$last_id}', '{$product_title}', '{$product_location}', '{$product_number}', '{$product_price}','{$value}', '{$order_building}' ,'{$order_name}','{$status}')");
        confirm($insert_report);   
         }
        $total += $sub;

                }
            } 
        } 
        
    } else{
        redirect("index2.php");
    }
    
} 


// cart on the nav
function cart_nav(){
    $total          = 0;
    $item_quantity  = 0;
    $sub = 0;
    
    foreach($_SESSION as $name => $value){
        if($value > 0) {
            if(substr($name, 0, 8) == "product_") {
                $length = strlen($name);
                $id = substr($name, 8 , $length);
            $query = query ("SELECT * FROM products WHERE product_id = " .escape_string($id). "");
            confirm($query);
                while($row = fetch_array($query)){

                    $sub = $row['product_price']*$value;
                    // var_dump($sub);
                    $item_quantity +=$value;
                   
                   

                $product = <<<DELIMETER
                
                    <tr>
                            <td>{$row['product_title']}<br></td>
                            <td> &#36; {$row['product_price']}</td>
                            <td>{$value}</td>
                            <td> &#36; {$sub}</td>
                            <td><a class = "btn btn-warning btn-sm" href = "../resources/cart.php?remove={$row['product_id']}"><span class ="glyphicon glyphicon-minus"></span></a>  <a class = "btn btn-success btn-sm" href = "../resources/cart.php?add={$row['product_id']}"><span class ="glyphicon glyphicon-plus"></span></a>  <a class = "btn btn-danger btn-sm" href = "../resources/cart.php?delete={$row['product_id']}"><span class ="glyphicon glyphicon-remove"></span></a> </td>
                                
                    </tr>
                   
DELIMETER;
    echo $product;
    
        }
        $_SESSION['item_total'] = $total += $sub;
        $_SESSION['item_quantity'] =$item_quantity; 
    }

        }
        
        }     
}
?>