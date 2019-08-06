<?php
    session_start();
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
            <span class="input-group-text"><i class="fa fa-search"></i></span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="jumbotron text-center" style='background-color:tomato;color:white;border;padding:15px 40px;'>
                    <h4 class="display-4">User Login</h4>
                    <p>Login in to start shopping</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-1"></div>
            <div class="col-md-4 col-10">
                <form method="POST" action="login.php" class="form-group">
                    <label for="email" style='color:tomato;'>User Email</label>
                    <input type="email" class="form-control" id="email" style='color:tomato;border-color:tomato' required/>
                    <label for="password" style='color:tomato;'>Password</label>
                    <input type="password" class="form-control" id="password" style='color:tomato;border-color:tomato' required/>
                    <br>
                    <input style="font-weight:bold;" type="submit" class="btn btn-primary form-control" id="login" value="Login">
                    <!--<button id="login" class="btn form-control btn-primary"><b>Login</b></button>-->
                </form>
                <div class="row">
                    <div class="col-5"><hr></div>
                    <div class="col-2 text-center" style='color:tomato;'>or</div>
                    <div class="col-5"><hr></div>
                </div><br>
                 <button class="btn form-control text-center" style="background-color:tomato;color:white;" id="new_Account"><b>Create an Account</b></button>
            </div>
            <div class="col-md-4 col-1"></div>
        </div>
    </div>
    </body>
    </html>