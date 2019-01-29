<?php
require_once "db_connection.php";
global $connection;
$getUserQuery = "delete from category where category_id = '$_GET[id]'";
$queryResult = mysqli_query($connection, $getUserQuery);
echo "$getUserQuery";

if($queryResult)
{
    header("location:admin_panel.php");
}
else{
    echo "Data Not Deleted";
}