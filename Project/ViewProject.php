<?php
require_once "Server/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <style>

    </style>
</head>
<body>

    <div class="container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: darkgrey;">
        <div class="card container my-5 " style="background-color: white;">
            <div class="row">
            <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-2">
                <h3>Bids</h3><br>
                <h5 id="totalBids">3</h5> <!--Yahan number of bids ain gi jo projects pr ho chuki hain abi tk-->
            </div>

            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                <h3>Average Bid</h3><br>
                <h5>PKR. <span id="AvgBid">1000</span></h5> <!--Yahan number of bids ki average aye gi jo hain abi tk-->
            </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                    <h3>Project Budget</h3><br>
                    <h5>PKR. <span id="projectBudget">10000</span></h5>
                </div>

            </div>
        </div>

        <div class="card container my-2 " style="background-color: white;">
            <div class="container row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                <div class="my-3">
                    <h3>Project ID</h3>
                    <span>00000</span>
                </div>
                <div class="my-3">
                    <h3>Project Description</h3>
                    <span>yahan sari project ki details ain gi </span>
                </div>
                <div class="my-3">
                    <h3>Client Info</h3>
                    <span>yahan uski rating waghaira aye gi</span>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 my-2">
                <button type="button" class="btn btn-primary">Bid on this Project</button>
            </div>
            </div>
        </div>

    </div>

</body>
</html>