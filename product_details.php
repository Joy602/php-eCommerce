<!-- Database connection -->
<?php
    include('includes/connect.php');
    include('functions/common_function.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP eCommerce</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-fluid p-0">
        <!-- first child -->
        <!-- navBar -->
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="./images/logo.png" alt="" class="logoImg">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="display_all.php">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-plus"></i><sup><?php    cart_item();?></sup></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Total price: <?php total_cart_price();?></a>
                        </li>



                    </ul>

                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search_data">
                        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                    </form>

                </div>
            </div>
        </nav>

        <!-- calling cart funtion -->
        <?php
        cart();
        ?>

        <!-- second child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <ul class="navbar-nav me-auto">
                
                <?php
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome Guest</a></li>";
                    }else{
                        echo "<li class='nav-item'><a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a></li>";
                    }
                    
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'><a class='nav-link' href='./users_area/user_login.php'>Login</a></li>";
                    }else{
                        echo "<li class='nav-item'><a class='nav-link' href='./users_area/logout.php'>Logout</a></li>";
                    }
                ?>
            </ul>
        </nav>

        <!-- third child -->
        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communication is at the heart of eCommerce and Community</p>
        </div>

        <!-- fourth child -->
        <div class="row px-1">
            <div class="col-md-10  ">
                <!-- products -->
                <div class="row">
                   
                   
                     
                    <?php
                        
                         
                        view_details();
                        get_unique_categories();
                        get_unique_brands();
                    ?>
                     
                    <!-- row end -->
                </div>
                <!-- col end -->
            </div>
            <div class="col-md-2 bg-secondary p-0">
                <!-- sideNav -->

                <!-- Brands to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h4>Delivery Brands</h4>
                        </a>
                    </li>

                    <?php
                        getBrands();
                    
                    ?>


                </ul>

                <!-- Categoriess to be displayed -->

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h4>Categories</h4>
                        </a>
                    </li>

                    <?php
                    getCategories()
                    
                    ?>




                </ul>


            </div>
        </div>


        <!-- last child -->
        <div class="bg-info p-3 text-center">
            <p>All rights reserved by Joy- 2022</p>
        </div>
    </div>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>