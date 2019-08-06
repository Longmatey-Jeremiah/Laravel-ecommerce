<?php
    session_start();
    if(isset($_SESSION['userid'])){
        header("location:profile.php");
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
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
            <img src="finix.jpg" alt="finix" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            
            <input type="text" class="form-control" id="search">
            <span class="input-group-text" id="search_btn"><i class="fa fa-search text-center"></i></span>
        </div>
        <div class="right-menu">
            <ul>
                <li><a href="cart.php"><i class="fa fa-shopping-cart text-center"></i> Cart <span class="badge"style="background-color:white;color:tomato">0</span></a></li>
                <li><a href="registration.php"><i class="fa fa-user"></i> Sign Up</a></li>
                <li><a href="loginpage.php"><i class="fa fa-user"></i> login</a></li>
            </ul>
        </div>
    </div>
    <section class="header">
        <div class="side-menu" id="side-menu">
            <h5>
                Categories
            </h5>
            <div id="get_category">   <!--<ul>
            <li>Mobile Phones <i class="fa fa-angle-right"></i>
                <ul>
                    <li>sub-menu1</li>
                    <li>sub-menu1</li>
                    <li>sub-menu1</li>
                    <li>sub-menu1</li>
                    <li>sub-menu1</li>
                </ul>
            </li>
        </ul>--></div>
        </div>
        <!--<div class="slides">
        <div id="slides" class="carousel slide text-center" data-ride="carousel">
            <div class="carousel-inner text-center">
              <div class="carousel-item active text-center">
                <img src="images/adidasnemeziz.jpg" class="d-block">
              </div>
              <div class="carousel-item text-center">
                <img src="images/adidasmessi16.3.jpg" class="d-block text-center">
              </div>
              <div class="carousel-item text-center">
                <img src="images/adidasx.jpg" class="d-block text-center">
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#slides" data-slide-to="0" class="active"></li>
              <li data-target="#slides" data-slide-to="1"></li>
              <li data-target="#slides" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
    </div>-->
    <div class="container">
        <div class="featured-categories">
            <div id="featured"></div>
            </div>
        </div>
    </section>
    <div class="container">
    <div class="onsale">
            <div class="title">
                <h2>Products</h2>
            </div>
            <div id="getProduct"></div>
            <!--<div class="row">
                <div class="col-md-3 col-3">
                    <div class="top">
                        <img src="images/iphonex.jpg">
                        <div class="over">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <a><i class="fa fa-eye"></i></a>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add To Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="bottom text-center">
                            <h4>Iphone X</h4>
                            <h5>$500.00</h5>
                        </div>
                </div>
        </div>-->
                
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
<script>
    function openmenu(){
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display="none";
        document.getElementById("close-btn").style.display="block";
    }
    function closemenu(){
        document.getElementById("side-menu").style.display="none";
        document.getElementById("menu-btn").style.display="block";
        document.getElementById("close-btn").style.display="none";
    }
</script>    
</body>
</html>