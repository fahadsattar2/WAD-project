<?php
require_once "Server/db_connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rack Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            color: black;
        }
        .row.content {height: 450px}
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
        a{
            color: white;
        }
        #footer {
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #354763;
            color: white;
            position: absolute;
            right: 0;
            padding: 1rem;
            text-align: center;
        }
        .dropdown-content a:hover {background-color: #ddd;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
<?php
include "Functions/functions.php";
top_header(); ?>
<div class="headerrr container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
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
            <h3>Test</h3>
            <div id="mainBody">

            </div>
        </div>
        <div class="col-sm-2 sidenav">
            <div>
                <p id="DetailsTab">

                </p>
            </div>
        </div>
    </div>
</div>
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