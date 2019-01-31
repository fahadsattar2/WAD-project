<?php

session_start();
require_once "db_connection.php";
if(!isset($_SESSION['AdminName'])){
    header('location: adminLogin.php?not_admin=You are not Admin!');
}

require_once "db_connection.php";
global $connection;
$getSkillsQuery = "delete from skills where skill_id = '$_GET[id]'";
$queryResult = mysqli_query($connection, $getSkillsQuery);
echo "$getSkillsQuery";

if($queryResult)
{
    header("location:index.php");
}
else{
    echo "Data Not Deleted";
}