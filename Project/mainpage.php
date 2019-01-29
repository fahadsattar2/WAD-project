<?php
require_once "Server/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rack Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body{
            color: black;
        }
        .row.content {height: 450px}
        @media screen and (max-width: 767px) {
            .sideBars {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
        a{
            color: white;
        }
        .sideBars {
            padding-top: 2%;
            color: white;
            background-color: #1a6785;
            height: 100%;
            min-height: 100vh;
            bottom: 0;
            top: 0;
        }
    </style>
</head>
<body>
<?php
include "Functions/functions.php";
top_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 sideBars">
            <h3>Categories</h3>
            <p>
            <h6><a href="#">Link</a></h6>
            </p>
            <p>
            <h6><a href="#">Link</a></h6>
            </p>
            <p>
            <h6><a href="#">Link</a></h6>
            </p>
        </div>
        <div class="col-sm-8 col-lg-8 col-xl-8 col-md-8 text-left">
            <h1>Yahan Bara sa Banner Bana dayn gay jis mein pics ka slide show ho</h1>
            <hr>
            <div id="mainBody">

            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 sideBars">
            <div>
                <p id="DetailsTab">

                </p>
            </div>
        </div>
    </div>
</div>
<?php
web_footer();
?>
</body>

<script>
    function CardDetails(x)
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("DetailsTab").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "card_detail_view.php?e=" + x, true);
        xmlhttp.send();
    }
    function searchResult(x) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("mainBody").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "search_result.php?e=" + x, true);
        xmlhttp.send();
    }
</script>
</html>