<?php
require_once "Server/db_connection.php";

function top_header()
{
    echo "<div class=\"header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
          <a class=\"col-xl-1 col-lg-2 col-md-2 col-sm-12 col-12\" href=\"#\">Logo</a>
          <a class=\"col-xl-1 col-lg-2 col-md-2 col-sm-12 col-12\" href=\"#home\">Home</a>
          <a class=\"col-xl-1 col-lg-2 col-md-2 col-sm-12 col-12\" href=\"#about\">About</a>
          <a class=\"col-xl-1 col-lg-2 col-md-2 col-sm-12 col-12\" href=\"#contact\">Contact</a>
          <div class=\"search-container col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12\">
                <form class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\" action=\"/action_page.php\">
                    <input class=\"search-container col-xl-9 col-lg-12 col-md-8 col-sm-12 col-12\" type=\"text\" placeholder=\"Search..\" name=\"search\">
                    <button class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                </form>
          </div>
    </div>";
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
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><img src="Images\Rackup-Logo(100X35).png" alt="RackUp international"/></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
            </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="Search-bar" name="Search-bar" onkeyup="searchResult(this.value)">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <li class="nav-item dropdown" style="float: right; right: 7%; position: absolute;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <hr>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<div class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 sidenav">
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

        <div class="col-sm-11 col-lg-8 col-xl-8 col-md-11 col-11">
            <h1>A banner will be displayed her with a slide show</h1>
            <hr>
            <h3>Test</h3>
            <div id="mainBody">

            </div>
        </div>
        <div class="sidenav col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
            <div>
                <p id="DetailsTab">

                </p>
            </div>
        </div>
    </div>
</div>

<?php
include "Functions/functions.php";
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