<?php

session_start();
require_once "db_connection.php";
if(!isset($_SESSION['AdminName'])){
    header('location: adminLogin.php?not_admin=You are not Admin!');
}

require_once "db_connection.php";
global $connection;
$getCategoryQuery = "delete from category where category_id = '$_GET[id]'";
$queryResult = mysqli_query($connection, $getCategoryQuery);
echo "$getCategoryQuery";

if($queryResult)
{
    header("location:index.php");
}
else{
    echo "Data Not Deleted";
}