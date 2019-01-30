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
                $subID = $row2['sub_cat_id'];
                echo "<h6><a id='$SubCatName' href='mainpage.php?subCat=$subID'>$SubCatName</a></h6>";
            }
            echo "</h5><br>";
        }
    }

    function getProjects()
    {
        global $connection;
        if (!isset($_GET['subCat'])) {
            $Query = "select * from projects";
        }
        if (isset($_GET['subCat'])) {
            $cat_id = $_GET['subCat'];
            $Query = "select * from projects,project_category where projects.project_id = project_category.project_id and project_category.sub_cat_id = '$cat_id'";
        }
        $result = mysqli_query($connection, $Query);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            echo "<h4 class='alert-warning align-center my-2 p-2'> No Projects found in selected criteria </h4>";
        }
        else {
            while ($row = mysqli_fetch_assoc($result)) {
                $pid = $row['Project_id'];
                $title = $row['Project_name'];
                $price = $row['Budget'];
                $desc = $row['Description'];
                $curr = $row['status'];
                echo "<p>
                     <div class=\"card\" style=\"color: black\" id=\"$pid\" onclick=\"CardDetails(this.id)\">
                         <div class=\"card-header\">
                             <div class=\"row\">
                             <a href='ViewProject.php?projectID=$pid'><h5>$title</h5></a>
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
                    <?php
                    getProjects();
                    ?>
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