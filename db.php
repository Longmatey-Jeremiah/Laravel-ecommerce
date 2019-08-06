<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "finix"; 


// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
/*$sql = "CREATE DATABASE myDB";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($con);*/

?>