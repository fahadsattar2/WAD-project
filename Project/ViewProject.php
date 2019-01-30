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
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container-fluid col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11" style="background-color: darkgrey;">

        <div class="card container-fluid my-5 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11" style="background-color: white;">
            <div class="row">
            <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-3">
                <h3>Bids</h3><br>
                <h5 id="totalBids">3</h5> <!--Yahan number of bids ain gi jo projects pr ho chuki hain abi tk-->
            </div>

            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-5">
                <h3>Average Bid</h3><br>
                <h5>PKR. <span id="AvgBid">1000</span></h5> <!--Yahan number of bids ki average aye gi jo hain abi tk-->
            </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-5">
                    <h3>Project Budget</h3><br>
                    <h5>PKR. <span id="projectBudget">10000</span></h5>
                </div>

            </div>
        </div>

        <div class="card container-fluid my-2 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11" style="background-color: white;">
            <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-7 col-8">
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
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-6 my-2">
                <button type="button" class="btn btn-primary" id="BidButton">Bid on this Project</button>
            </div>
            </div>
            </div>
        </div>

        <div class="container card my-5 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
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


                    <tr>
                        <td>Muhammad Mustaqeem</td>
                        <td>4 /5</td>
                        <td>PKR. <span>7500</span></td>
                    </tr>

                    <tr>
                        <td>Faisal Jawad</td>
                        <td>4 /5</td>
                        <td>PKR. <span>8000</span></td>
                    </tr>

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
                <div class="modal-body">
                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="number" placeholder="Enter Your Bid Amount" name="bid_amount"/>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="text" placeholder="Deliver in" name="bid_time"/>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <textarea class="input-field" placeholder="Porject Description"></textarea>
                    </div>

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