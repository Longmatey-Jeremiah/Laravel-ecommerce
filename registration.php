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
            <div class="col-md-3 col-1"></div>
            <div class="col-md-6 col-10">
                <div class="row">
                    <div class="col-12" id="signup_msg"></div>
                </div>
                <form method="POST" id='register'>
                    <label for="f_name"style='color:tomato;'>First Name</label>
                    <input type="text" class="form-control" name="f_name" id="f_name" style='border-color:tomato;' required/>
                    <label for="l_name"style='color:tomato;'>Last Name</label>
                    <input type="text" class="form-control" id="l_name" name="l_name" style='border-color:tomato;' required/>
                    <label for="email" style='color:tomato;'>Email</label>
                    <input type="email" class="form-control" id="email" name="email" style='border-color:tomato;' required/>
                    <label for="password" style='color:tomato;'>Password</label>
                    <input type="text" class="form-control" id="password" name="password" style='border-color:tomato;' required/>
                    <label for="repassword" style='color:tomato;'>Re-Enter Password</label>
                    <input type="text" class="form-control" id="repassword" name="repassword" style='border-color:tomato;' required/>
                    <label for="mobile" style='color:tomato;'>Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" style='border-color:tomato;' required/>
                    <label for="address1" style='color:tomato;'>Address 1</label>
                    <input type="text" class="form-control" id="address1" name="address1" style='border-color:tomato;' required/>
                    <label for="address2" style='color:tomato;'>Address 2</label>
                    <input type="text" class="form-control" id="address2" name="address2" style='border-color:tomato;' required/>
                    <br>
                    <button class="btn form-control btn-lg" id="signup_btn" style="float:right;background-color:tomato;color:white;padding:2px;">SignUp</button>
                </form>
            </div>
            <div class="col-md-3 col-1"></div>
        </div>
    </div>
    </body>
    </html>