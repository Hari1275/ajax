0<?php 
    include('connect.php');
    // sql query to fetch data from database
    $sql = "SELECT * FROM user";
    $result = mysqli_query($connection,$sql);
    //Loop for all users 
    while($rows = mysqli_fetch_array($result)){
        $userid = $rows['userid'];
        $username = $rows['username'];
        $address = $rows['address'];
// array used to store data
        $retutn_arr[] = array(
            "userid" => $userid,
            "username" => $username,
            "address" => $address,
        );
    }
    //here we are returning the array and this array will be accessed using ajax success 
echo json_encode($retutn_arr);
?>