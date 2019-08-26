<?php
    include('connect.php');
    $id = $_POST['id'];
    $select = $_POST['select'];
    $updater = $_POST['updater'];
    //sql query to update data in the database
    $sql = "UPDATE user SET $select='$updater' WHERE userid='$id'";
    if(mysqli_query($connection,$sql)){
        $row = TRUE;
    }
    else{
        $row = FALSE;
    }
    echo json_encode($row);

?>