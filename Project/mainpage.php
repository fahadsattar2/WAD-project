<?php
/**
 * Created by PhpStorm.
 * User: mmust
 * Date: 1/20/2019
 * Time: 5:55 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Rack Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: darkgray;
            color: white;
        }

        .topnav .search-container {
            float: left;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        .row.content {height: 450px}

        .sidenav {
            padding-top: 2%;
            background-color: #f1f1f1;
            height: 100vh;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            background-color: #555;
            color: white;
            padding: 15px;
        }
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<div class="topnav col">
    <a href="#">Logo</a>
    <a class="active" href="#">Home</a>
    <a href="#">Projects</a>
    <a href="#">About Us</a>
    <a href="#">Contact Us</a>
    <div class="search-container">
        <form>
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Submit</button>
        </form>
    </div>
    <a href="#profile" style="float: right;"><i class="fas fa-user-tie"></i></a>
</div>

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

