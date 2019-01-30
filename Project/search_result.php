<?php
require "server/db_connection.php";
$e = $_REQUEST["e"];
$query = "select * from projects where Project_name like '%$e%'";
$run_query  = mysqli_query($connection,$query);
$count = mysqli_num_rows($run_query);

if($count>0)
{
    while($row = mysqli_fetch_assoc($run_query)){
        $pid = $row['Project_id'];
        $title = $row['Project_name'];
        $price = $row['Budget'];
        $desc = $row['Description'];
        $curr = $row['status'];
        echo "<p>
                      <div class=\"card\" style=\"color: black\" id=\"$pid\" onclick=\"CardDetails(this.id)\">
                          <div class=\"card-header\">
                              <div class=\"row\">
                              <a><h5>$title</h5></a>
                              </div>
                          </div>
                          <div class=\"row card-body\">
                              <p class=\"col-xl-11\">
                                  $desc
                              </p>
                              <p class=\"col-xl-1\">
                                  <button>Bid</button>
                              </p>
                          </div>
                          <div class=\"card-footer\">
                              <h6>Budget : Rs.$price</h6>
                          </div>
                      </div>
                  </p>";
    }
}
?>

