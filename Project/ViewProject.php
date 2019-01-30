<?php
require_once "Server/db_connection.php";
include "Functions/functions.php";
global $connection;
session_start();
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);
    echo "<script>console.log( 'Printing: " . $output . "' );</script>";
}
    if(!isset($_SESSION['user_email'])){
        header('location: homepage.php?You are Not LogIn!');
    }
    if(!isset($_GET['projectID']))
    {
        header('location:mainpage.php?');
    }

    if(isset($_GET['projectID']))
    {
        $projectID = $_GET['projectID'];
    }

    if(isset($_POST['btnPlaceBid']))
    {
        $query = "select client_id from projects where project_id = '$projectID'";
        $run = mysqli_query($connection,$query);
        $row= mysqli_fetch_assoc($run);
        $clientID = $row['client_id'];

        $email = $_SESSION['user_email'];
        $amount = $_POST['bid_amount'];
        $time = $_POST['bid_time'];
        $description = $_POST['bid_description'];

        $query = "Insert into bids set rate = '$amount',
                                        description = '$description',
                                        client_id = '$clientID',
                                        project_id = '$projectID',
                                        milestone = '$time',
                                        freelancer_id = (select freelancer_id from freelancer,user where freelancer.user_id = user.id and user.email = '$email')";

        $run = mysqli_query($connection,$query);
        if($run)
        {
            header('location:ViewProject.php?projectID='.$projectID);
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php
        $query = "select project_name from projects where project_id = $projectID";
        $result = mysqli_query($connection,$query);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if($count == 0 )
            echo "0";
        else
            echo $row['project_name'];
        ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
        .icon {
            padding: 3%;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }
        input:invalid{
            background-color: red;
        }
    </style>
</head>
<body>

<?php
web_header();
?>
    <div class="container-fluid col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">

        <div class="card container-fluid my-5 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
            <div class="row">
            <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-3">
                <h3>Bids</h3><br>
                <h5 id="totalBids">
                    <?php
                        $query = "select count(bid_no) as Total from bids where project_id = $projectID";
                        $result = mysqli_query($connection,$query);
                        $count = mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        if($count == 0 )
                            echo 0;
                        else
                            echo $row['Total'];
                    ?>
                </h5>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-5">
                <h3>Average Bid</h3><br>
                <h5>PKR. <span id="AvgBid">
                        <?php
                        $query = "select avg(rate) as average from bids where project_id = $projectID";
                        $result = mysqli_query($connection,$query);
                        $count = mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        if($count == 0 )
                            echo "0";
                        else
                            echo $row['average'];
                        ?>
                    </span></h5>
            </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-5">
                    <h3>Project Budget</h3><br>
                    <h5>PKR. <span id="projectBudget">
                            <?php
                            $query = "select Budget from projects where project_id = $projectID";
                            $result = mysqli_query($connection,$query);
                            $count = mysqli_num_rows($result);
                            $row = mysqli_fetch_assoc($result);
                            if($count == 0 )
                                echo "0";
                            else
                                echo $row['Budget'];
                            ?>
                        </span></h5>
                </div>

            </div>
        </div>

        <div class="card container-fluid my-2 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11" style="background-color: white;">
            <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-7 col-8">
                <div class="my-3">
                    <h6>Project ID : <span id="pjtID"> <?php echo $projectID ?> </span></h6>
                    <h3>
                    <span id="pjtName">
                        <?php
                        $query = "select project_name from projects where project_id = $projectID";
                        $result = mysqli_query($connection,$query);
                        $count = mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        if($count == 0 )
                            echo "0";
                        else
                            echo $row['project_name'];
                        ?>
                    </span>
                    </h3>
                </div>
                <div class="my-3">
                    <h3>Project Description</h3>
                    <span>
                        <?php
                        $query = "select Description from projects where project_id = $projectID";
                        $result = mysqli_query($connection,$query);
                        $count = mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        if($count == 0 )
                            echo "0";
                        else
                            echo $row['Description'];
                        ?>
                    </span>
                </div>
                <div class="my-3">
                    <h3>Client Info</h3>
                    <span id="clnID">
                        <?php
                        $query = "SELECT client_username FROM client,projects WHERE client.client_id = projects.client_id and project_id = $projectID";
                        $result = mysqli_query($connection,$query);
                        $count = mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        if($count == 0 )
                            echo "0";
                        else {
                            $clientUserName = $row['client_username'];
                            echo $clientUserName;
                        }
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-6 my-2">
                <button type="button" class="btn btn-primary" id="BidButton">Bid on this Project</button>
            </div>
            </div>
            </div>
        </div>

        <div class="container card my-5 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-1 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1">
            <div class="card-header">
                Total Bids
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Freelancers Bidding</th>
                        <th>Rating</th>
                        <th>Bid</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT freelancer.freelancer_username,user.rating,bids.rate from freelancer,bids,user where bids.freelancer_id = freelancer.freelancer_id and user.id = freelancer.user_id and bids.project_id = $projectID";
                    $result = mysqli_query($connection,$query);
                    $count = mysqli_num_rows($result);
                    if($count > 0 )
                    {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['freelancer_username'];
                            $rating = $row['rating'];
                            $bidAmount = $row['rate'];
                            echo "<tr>
                                  <td>$name</td>
                                  <td>$rating /5</td>
                                  <td>PKR. <span>$bidAmount</span></td>
                            </tr>";
                        }
                    }


                ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="BidModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><span class="glyphicon glyphicon-dollar"></span>Place Your Bid</h4>
                    <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" method="post">
                    <div class="modal-body">
                        <div class="input-container">
                            <i class="icon fas fa-dollar-sign"></i>
                            <input pattern="[0-9]+" class="input-field" type="number" placeholder="Enter Your Bid Amount" name="bid_amount"/>
                        </div>

                        <div class="input-container">
                            <i class="icon far fa-clock"></i>
                            <input pattern="[0-9]+"  class="input-field" type="text" placeholder="Deliver in" name="bid_time"/>
                        </div>

                        <div class="input-container">
                            <i class="icon far fa-sticky-note"></i>
                            <textarea class="input-field" placeholder="Project Description" name="bid_description"></textarea>
                        </div>
                        <button type="submit" class="modalButtons btn btn-primary" name="btnPlaceBid">Bid</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#BidButton").click(function() {
                $("#BidModal").modal();
            });
        });
    </script>
</body>
</html>