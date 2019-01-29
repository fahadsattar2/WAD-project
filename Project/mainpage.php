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

        /*Below Styling for header*/
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            top: 0;
            background-color: #354763;
        }

        .header a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: #2196F3;
            color: white;
        }

        .header .search-container {
            float: right;
        }

        .header input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .header .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .header .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .header .search-container {
                float: none;
            }
            .header a, .header input[type=text], .header .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .header input[type=text] {
                border: 1px solid #ccc;
            }

            .header_top_padding{
                padding-top: 30px;
            }
        }

    </style>
</head>
<body>
<?php
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
            <h1>A banner will be displayed her with a slide show</h1>
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