
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
            color: white;
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
        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}

    </style>
</head>
<body>

<?php
include "Functions/functions.php";
top_header(); ?>

<div class="container-fluid text-center">
    <div class="row content">

        <div class="col-sm-2 sidenav">
            <h3>Categories</h3>
            <p><h6><a href="#">Link</a></h6></p>
            <p><h6><a href="#">Link</a></h6></p>
            <p><h6><a href="#">Link</a></h6></p>

        </div>

        <div class="col-sm-8 text-left">
            <h1>Yahan Bara sa Banner Bana dayn gay jis mein pics ka slide show ho</h1>
            <hr>
            <h3>Test</h3>
            <p>
                Yahan sare projects aa jain gay list wise
            </p>
        </div>

        <div class="col-sm-2 sidenav">
            <div>
                <p>Clicked projects ki details yahan aa jain</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>

