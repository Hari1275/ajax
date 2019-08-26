<?php
//including database connection if not included then you will get error
//You can write connect.php code here
// If you write code here then no need of including file.
    include('connect.php');
//fetching data field of ajax function cal using post type
//If you are using get type then write $_GET instead of $_POST
    $name = $_POST['name'];
    $address = $_POST['address'];
    // echo $name;
//sql query insert into database
  //tablename--->user
  //table attributes-->username and address
    $sql = "INSERT into user(username,address) values ('$name','$address')";
    if(mysqli_query($connection,$sql)){
        $row = TRUE;
    }
    else{
        $row = FALSE;
    }
    echo json_encode($row);
?>