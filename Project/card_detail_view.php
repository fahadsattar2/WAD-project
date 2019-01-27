<?php
require "server/db_connection.php";
$e = $_REQUEST["e"];
$query = "select * from projects where Project_id = '$e'";
$run_query  = mysqli_query($connection,$query);
$count = mysqli_num_rows($run_query);

if($count>0)
{
    $row = mysqli_fetch_assoc($run_query);
    $pid = $row['Project_id'];
    $title = $row['Project_name'];
    $price = $row['Budget'];
    $desc = $row['Description'];
    $curr = $row['status'];
    $ptime = $row['Time'];
    echo "<div class=\"card\" style=\"color: black\">
            <div class=\"card-header\">
            <div class=\"row\">
            <h5>$title</h5>
            </div>
            </div>
            
            <div class=\"card-body\">
            Status : $curr
            <br>
            Time : $ptime
            <br>
            Budget : Rs. $price
            <br>
            <hr>
            $desc
            </div>
        </div>";
    
}
?>