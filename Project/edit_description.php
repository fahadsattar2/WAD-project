<?php
session_start();
require "server/db_connection.php";
global $connection;
$output = $_SESSION['user_email'];
$query = "SELECT * FROM user WHERE email='$output'";
$QueryResult = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($QueryResult);
$user_id = $row['id'];

$e = $_REQUEST["e"];
$query2 = "update user set Description='$e' where id = $user_id";
$run_query  = mysqli_query($connection,$query2);

if($run_query)
{
    echo "<p id = \"myP\"> $e </p>";
    echo "<script>alert('Description Successfully Updated')  </script>";
}
else
{
    echo "<script>alert('Description Update Failed')  </script>";
}

?>