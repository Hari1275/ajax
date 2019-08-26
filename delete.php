<?php
    include('connect.php');
    $id = $_POST['id'];
    $username = $_POST['username'];
    //sql query to delete the user from the database
    $sql = "DELETE FROM user WHERE userid = '$id' and username = '$username'";
    
    if(mysqli_query($connection,$sql)){
        $row = TRUE;
    }
    else{
        $row = FALSE;
    }
    echo json_encode($row);
?>