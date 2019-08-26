<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ExampleAjax";
//database connection 
$connection = mysqli_connect($servername,$username,$password,$database);
// if database connection fails then it shows an error that database connection failed
if(!$connection){
    echo "Error:".mysqli_connect_error();
} 