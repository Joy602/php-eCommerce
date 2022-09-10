<?php

//Including DB connection
//include('./includes/connect.php');

//getting products from DB
function getProducts(){
    global $conn;

    // condition to check isset or not 
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            $select_query = "Select * from `products` order by rand() limit 0,3";
    $result_query = mysqli_query($conn,$select_query);
    //$row = mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
            </div>
        </div>
    </div>";
    }
        }
    }
    
}

//getting ALL products from DB
function get_all_products(){
    global $conn;

    // condition to check isset or not 
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            $select_query = "Select * from `products` order by rand()";
    $result_query = mysqli_query($conn,$select_query);
    //$row = mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
            </div>
        </div>
    </div>";
    }
        }
    }
}

//getting unique categories
function get_unique_categories(){
    global $conn;

    // condition to check isset or not 
    if(isset($_GET['category'])){
         $category_id = $_GET['category'];
            $select_query = "Select * from `products` where category_id=$category_id ";
    $result_query = mysqli_query($conn,$select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='text-center'>No stock for this Category</h2>";
    }
    //$row = mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
            </div>
        </div>
    </div>";
    }
        
    }
    
}

//getting unique brands
function get_unique_brands(){
    global $conn;

    // condition to check isset or not 
    if(isset($_GET['brand'])){
         $brand_id = $_GET['brand'];
            $select_query = "Select * from `products` where brand_id=$brand_id ";
    $result_query = mysqli_query($conn,$select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='text-center'>No stock for this Brand</h2>";
    }
    //$row = mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
            </div>
        </div>
    </div>";
    }
        
    }
    
}

//Displaying brands from DB in sideNav
function getBrands(){
    global $conn;
    $select_brands = "Select * from `brands`";
$result_brands = mysqli_query($conn, $select_brands );
//$row_data = mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];

while($row_data = mysqli_fetch_assoc($result_brands)){
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];

   echo "<li class='nav-item'><a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a></li>";

}
}

//Displaying categories from DB in sideNav
function getCategories(){
    global $conn;
    $select_categories = "Select * from `categories`";
                    $result_categories = mysqli_query($conn, $select_categories );
                    //$row_data = mysqli_fetch_assoc($result_brands);
                    // echo $row_data['brand_title'];

                    while($row_data = mysqli_fetch_assoc($result_categories)){
                        $category_title = $row_data['category_title'];
                        $category_id = $row_data['category_id'];

                       echo "<li class='nav-item'><a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a></li>";

                    }

}

//Searching products functions
function search_product(){
    global $conn;
    if(isset($_GET['search_data_product'])){
        $search_data_value = $_GET['search_data'];

    

     
     
         
    $search_query = "Select * from `products` where product_keywords like '%search_data_value%' ";
    $result_query = mysqli_query($conn,$search_query);
    //$row = mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
            </div>
        </div>
    </div>";
    }
}
        
    
}
//View details function
function view_details(){
    global $conn;

    // condition to check isset or not 
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            $product_id = $_GET['product_id'];
            $select_query = "Select * from `products` where product_id = $product_id ";
    $result_query = mysqli_query($conn,$select_query);
    //$row = mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='index.php' class='btn btn-secondary'>Go home</a>
            </div>
        </div>
    </div>
    
    <div class='col-md-8'>
     
    <div class='row'>
        <div class='col-md-12'>
            <h4 class='text-center text-info mb-5'>Related Products</h4>
        </div>
        <div class='col-md-6'>
            <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
        </div>
        <div class='col-md-6'>
            <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
        </div>
    </div>
</div>";
    }
        }
    }
}
}

// get ip address function
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
 
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
  



// cart function

function cart(){
    if(isset($_GET['add_to_cart'])){
        global $conn;

        $get_ip_add = getIPAddress(); 
        $get_product_id = $_GET['add_to_cart'];

        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
        $result_query = mysqli_query($conn,$select_query);
        $num_of_rows = mysqli_num_rows($result_query);

        if($num_of_rows>0){
        echo "<script>alert('This item is already present in cart')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        }else{
            $insert_query = "insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_add',0)";
            $result_query = mysqli_query($conn,$insert_query);
            echo "<script>alert('Item is added to cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";

        }

    }
}

// function to get cart item numbers
function cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $get_ip_add = getIPAddress(); 
         

        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query = mysqli_query($conn,$select_query);
        $count_cart_items = mysqli_num_rows($result_query);

    }else{
        global $conn;
        $get_ip_add = getIPAddress(); 
         

        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query = mysqli_query($conn,$select_query);
        $count_cart_items = mysqli_num_rows($result_query);

    }
    echo $count_cart_items;

    }

    // total price function
    function total_cart_price(){
        global $conn;
        $get_ip_add = getIPAddress(); 
        $total_price = 0;

        $cart_query = "select * from `cart_details` where ip_address = '$get_ip_add' ";
        $result = mysqli_query($conn,$cart_query);

        while($row = mysqli_fetch_array($result)){
            $product_id = $row['product_id'];
            $select_products = "select * from `products` where product_id  = '$product_id'";
            $result_products = mysqli_query($conn,$select_products);

            while($row_product_price = mysqli_fetch_array($result_products)){
                $product_price = array($row_product_price['product_price']);
                $product_values = array_sum($product_price);
                $total_price+=$product_values;

            }

        }
        echo $total_price;


    }

    // get user pending order details
    function get_user_order_details(){
        global $conn;

        $username = $_SESSION['username'];
        $get_details = "select * from `user_table` where username = '$username'";
        $result_query = mysqli_query($conn,$get_details);

        while($row_query = mysqli_fetch_array($result_query)){
            $user_id = $row_query['user_id'];

            if(!isset($_GET['edit_account'])){
                if(!isset($_GET['my_orders'])){
                    if(!isset($_GET['delete_account'])){

                        $get_orders = "select * from `user_orders` where user_id = $user_id and order_status='pending'";
                        $result_orders_query = mysqli_query($conn,$get_orders);

                        $row_count = mysqli_num_rows($result_orders_query);
                        if($row_count>0){
                           echo "<h3 class='text-center mt-5 mb-2'>You have <span class='text-warning'>$row_count</span> pending orders.</h3>
                           <p class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
                            
                        }else{
                            echo "<h3 class='text-center mt-5 mb-2'>You have zero pending orders.</h3>
                           <p class='text-center'><a href='../index.php?my_orders' class='text-dark'>Explore Products</a></p>";
                        }

                        
                    }
                    
                }
            }
        }
    }

     

   




?>