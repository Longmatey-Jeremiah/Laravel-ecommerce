<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery3.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="top-nav">
        <div class="left-menu">
            
            <img src="finix.jpg" alt="finix" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            <input type="text" class="form-control" id="search">
            <span class="input-group-text" id="search_btn"><i class="fa fa-search"></i></span>
        </div>
        <div class="right-menu">
            <ul>
                <li><a href="cart.php" id="cart_container"><i class="fa fa-shopping-cart"></i> Cart <span class="badge" style='background-color:white;color:tomato;'>0</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i><?php echo "Hi,".$_SESSION['name']?></a></li>
                <li><a href="logout.php"><i class="fa fa-user"></i>Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="container pt-5">
    <div class="cart-nav"><h3>Cart Checkout</h3></div>    
    <div id="cart_msg"></div>
    <div class="row pb-2">
        <div class="col-md-1"></div>
        <div class="col-md-3 col-4" style='color:tomato;'>Product</div>
        <div class="col-md-3 col-3"style='color:tomato;'>Quantity</div>
        <div class="col-md-2 col-3"style='color:tomato;'>Price</div>
        <div class="col-md-2 col-2"style='color:tomato;'>Total</div>
    </div>
    <div id="cart_checkout"></div>
    <div class="btn btn-primary mb-5"><a href="index.php" style="text-decoration:none;color:white;float:left;">Continue Shopping</a></div>
    <div class="btn btn-success mb-5" style='float:right;'><a href="#" style="text-decoration:none;color:white;">Checkout</a></div>
    </div>
    </div>
    </body>
    </html>