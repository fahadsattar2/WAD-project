<?php
require_once "Server/db_connection.php";
include "Functions/functions.php";

    function getCats()
    {
        global $connection;
        $query = "SELECT * FROM category";
        $queryResult = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($queryResult))
        {
            $id = $row['category_id'];
            $catName = $row['category_name'];
            $Subquery = "SELECT * FROM sub_categories WHERE cat_id = $id";
            $SubqueryResult = mysqli_query($connection,$Subquery);
            echo"<h5><a id='$catName' href='#'><b>$catName</b></a><br>";
            while ($row2 = mysqli_fetch_assoc($SubqueryResult))
            {
                $SubCatName = $row2['sub_cat_name'];
                echo "<h6><a id='$SubCatName' href='#'>$SubCatName</a></h6>";
            }
            echo "</h5><br>";
        }
    }
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
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <style>
        body{
            color: black;
            background-color: #1b6685;
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
        a:hover{
            color: white;
            opacity: 0.5;
        }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php
        web_header();
    ?>

    <div class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row">
            <div class="sidenav col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 my-2" style="color: white;">
                <h3>Categories</h3>
                <p>
                    <?php getCats(); ?>
                </p>
            </div>

            <div class="col-sm-11 col-lg-8 col-xl-8 col-md-12 col-12" style="background-color: white">
                <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mainCarousel" data-slide-to="1"></li>
                        <li data-target="#mainCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Images/wallpaper%20(1).jpg" style="height: 400px" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Images/wallpaper%20(2).jpg" style="height: 400px"  alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <video class="d-block w-100 col-sm-12 col-lg-12 col-xl-12 col-md-12 col-12" height="400px" controls autoplay>
                                <source src="Images/BackgroundVideo.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="mainBody" class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                </div>
            </div>

            <div class="sidenav col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                <div>
                    <p id="DetailsTab"></p>
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