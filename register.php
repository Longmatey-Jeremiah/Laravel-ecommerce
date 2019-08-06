<?php
    include "db.php";

    $f_name  =   mysqli_real_escape_string($con,$_POST["f_name"]);
    $l_name  =   mysqli_real_escape_string($con,$_POST["l_name"]);
    $email  =   mysqli_real_escape_string($con,$_POST["email"]);
    $password  =   mysqli_real_escape_string($con,$_POST["password"]);//add md5 to convert the password to a random 32 bit value
    $repassword  =   mysqli_real_escape_string($con,$_POST["repassword"]);
    $mobile  =   mysqli_real_escape_string($con,$_POST["mobile"]);
    $address1  =   mysqli_real_escape_string($con,$_POST["address1"]);
    $address2   =   mysqli_real_escape_string($con,$_POST["address2"]);
    $name   =   "/^[A-Z][a-zA-Z]+$/";//declare the type of data that can be in the name section of a user's input
    $emailValidation  = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";//declare the type of data that can be in a user's  email 
    $number =   "/^[0-9]+$/";//declare the type of data that can be in a user's  mobile number 

    if(empty($f_name)|| empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2)){
         //if any field on the form is empty prompt the user to fill that field
         echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Please Fill all spaces provided..</b></p>
                </div>
            ";
        exit();
    }else{
        //validate the form data if no field on the form is empty 
    if(!preg_match($name,$f_name)){
        //if the first name contains any foreign data(type of data that cannot be in the name section) prompt the user
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$f_name is invalid!!</b></p>
                </div>
        ";
        exit();
    }
    //if the last name contains any foreign data(type of data that cannot be in the name section) prompt the user
    if(!preg_match($name,$l_name)){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$l_name is invalid!!</b></p>
                </div>
        ";
        exit();
    }
    //if the email contains any foreign data(type of data that cannot be in the email of the user) prompt the user
    if(!preg_match($emailValidation,$email)){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$email is invalid!!</b></p>
                </div>
        ";
        exit();
    }
    //if the password is not long enough( < 9 ) prompt the user password is weak  
    if(strlen($password) < 9){
        echo "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Password is weak!!</b></p>
                </div>
        ";
        exit();
    }
    //if the password is not long enough( < 9 ) prompt the user password is weak
    if(strlen($repassword) < 9){
        echo "<div class='alert danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Password is weak!!</b></p>
                </div>
        ";
        exit();
    }
    //if password and repasword are not the same (prompt the user passwords do not match)    
    if($password != $repassword){
        echo "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Passwords do not match!!</b></p>
                </div>
        ";
        exit();
    }
 //if the Mobile contains any foreign data(type of data that cannot be in the mobile number of a user) prompt the user
    if(!preg_match($number,$mobile)){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Mobile Number invalid!!</b></p>
                </div>
        ";
        exit();
    }
 //if mobile number is not up to 10 digits (prompt the user Modile number should be 10 digits)
    if(!strlen($mobile) == 10){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Mobile number should be 10 digits</b></p>
                </div>
        ";
        exit();
    }
    //check if email already exists in the database 
    $sql    =   "SELECT user_id FROM user_info WHERE email='$email' LIMIT 1";
    $check_query    =   mysqli_query($con,$sql);
    $count_email    =   mysqli_num_rows($check_query);
    if($count_email > 0 ){
        //if email already exists alert the user to change his email
        echo "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$email already exists Try another Email Address!!</b></p>
                </div>
        ";
        exit();
    }else{
        //if email doesn't exist insert the user's input into the user_info table in the database 
       $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql =  "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`,
         `password`, `mobile`, `address1`, `address2`) VALUES (NULL, '$f_name', '$l_name',
          '$email', '$hash', '$mobile', '$address1', '$address2')";
          $run_query    =   mysqli_query($con,$sql);
          if($run_query){
              //on successful insertion of user input display a success message
            echo "
                <div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>You have registered Successfully!!..</b></p>
                </div>
            ";
            exit();
          }
    }
}
?>