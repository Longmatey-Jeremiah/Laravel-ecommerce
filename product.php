<?php
    include "db.php";
    session_start();
    if(!isset($_SESSION['userid'])){
        header('location:index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finix_shop</title>
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
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
            <img src="finix.jpg" alt="finix" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            
            <input type="text" class="form-control" id="search">
            <span class="input-group-text" id="search_btn"><i class="fa fa-search"></i></span>
        </div>
        <div class="right-menu">
            <ul>
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart <span class="badge b">0</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i><?php echo "Hi,".$_SESSION['name']?></a></li>
                <li><a href="logout.php"><i class="fa fa-user"></i>Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="details"></div>
            <div class="col-md-5 col-5">
                <img src="images/iphx.jpg">
            </div>
            <div class="col-md-5 col-5 col-2-offset">
                <h4>Iphone X</h4>
            </div>
        </div>
    </div>
    <section class="footer">
        <div class="container">    
        <div class="row">
                <div class="col-md-3 col-3">
                    <h5 class="footer-header">Contact Us</h5>
                    <p>0543427199</p>
                    <p>finix@gmail.com</p>
                    <p>finix_shop.ig</p>
                    <p></p>
                </div>
                <div class="col-md-3 col-3">
                    <h5 class="footer-header">Company</h5>
                </div>
                <div class="col-md-3 col-3">
                    <h5 class="footer-header">Follow Us</h5>
                        <p>Facebook</p>
                    <p>Whatsapp</p>
                    <p>Instagram</p>
                    <p>Twitter</p>
                </div>
                <div class="col-md-3 col-3">
                    <h5 class="footer-header">About Us</h5>
                </div>
            </div>
        </div>
        </section> 
</body>
</html>