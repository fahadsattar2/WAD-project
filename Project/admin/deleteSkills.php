<?php
require_once "db_connection.php";
global $connection;
$getSkillsQuery = "delete from skills where skill_id = '$_GET[id]'";
$queryResult = mysqli_query($connection, $getSkillsQuery);
echo "$getSkillsQuery";

if($queryResult)
{
    header("location:admin_panel.php");
}
else{
    echo "Data Not Deleted";
}