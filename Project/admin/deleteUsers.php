<?php

session_start();
require_once "db_connection.php";
if(!isset($_SESSION['AdminName'])){
    header('location: adminLogin.php?not_admin=You are not Admin!');
}

require_once "db_connection.php";
    global $connection;
    $getUserQuery = "delete from user where id = '$_GET[id]'";
    $queryResult = mysqli_query($connection, $getUserQuery);
    echo "$getUserQuery";

    if($queryResult)
    {
        header("location:index.php");
    }
    else{
        echo "Data Not Deleted";
    }