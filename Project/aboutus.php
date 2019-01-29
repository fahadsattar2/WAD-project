<?php

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
<html lang = "en">
<head>
    <title> About-US Page </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>

    <style>
        #AbtBanner{
            background-color: #1a6785;
            color: white;
            height: 30vh;
            text-align: center;
            padding: 7%;
        }
        .txtBg{
            background-color: #f0f7f7;
            color: black;
            height: 30%;
            text-align: center;
            padding-top: 3%;
            padding-bottom: 3%;
        }
        .txtBg2{
            background-color: #dfeeee;
            color: black;
            height: 30%;
            text-align: center;
            padding-top: 3%;
            padding-bottom: 3%;
        }

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
<div id="AbtBanner" class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <h1>Rack-Up</h1>
    <h5>We make it Happen</h5>
</div>
<div class="row txtBg">
    <div class="container-fluid col-xl-16 col-lg-6 col-md-6 col-sm-6  col-6 offset-xl-3 offset-lg-3 offset-md-3 offset-sm-3 offset-3 mt-auto">
        <p class="mt-3">
            Founded in 2018, Rackup is setup as a freelancing platform for citizens of Pakistan.
            Through this market place employers and freelancers can get connected and get their tasks done.
            Rackup helps in connecting and expanding business with great talents.From Content writing, Graphic designing, Social media marketing,
            SEO, development, Data entry and Virtual Assistant, Mobile phone and Computing,
            Translation and Languages and other legal services all can be done and
            freelancer according to your requirements can be hired just in few clicks.</p>
        <p>Our vision is to create a smooth platform to provide employement
            to every age group according to their skills, so people can live better lives
            and ensure that clients can get quality work done within their budget.
        </p>
    </div>

</div>
<div class="container-fluid col-xl-10 col-lg-10 col-md-10 col-sm-10  col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 offset-1">

    <div class="row txtBg2">
        <div class="col-xs-5 offset-lg-2 col-md-5 offset-md-2 col-sm-5 offset-sm-2">
            <img src="images/faisal.jpg" alt = "Faisal's Picture">
        </div>
        <p>
            Faisal Jawad
            <br>
            Team Lead
        </p>
    </div>

    <div class="row txtBg">
        <p class="col-xs-5 offset-lg-2 col-md-5 offset-md-2 col-sm-5 offset-sm-2" >
            Sana Anjum
            <br>
            Team Member
        </p>
        <div>
            <img src="images/sana.jpeg" alt = "Sana's Picture">
        </div>
    </div>

    <div class="row txtBg2">
        <div class="col-xs-5 offset-lg-2 col-md-5 offset-md-2 col-sm-5 offset-sm-2">
            <img src="images/mustaqeem.jpeg" alt = "Mustaqeem's Picture">
        </div>
        <p>
            Muhammad Mustaqeem
            <br>
            Team Member
        </p>
    </div>

    <div class="row txtBg">
        <p class="col-xs-5 offset-lg-2 col-md-5 offset-md-2 col-sm-5 offset-sm-2" >
            Junaid Ahmed Babar
            <br>
            Team Member
        </p>
        <div>
            <img src="images/JD.JPG" alt = "Junaid's Picture">
        </div>
    </div>

    <div class="row txtBg2">
        <div class="col-xs-5 offset-lg-2 col-md-5 offset-md-2 col-sm-5 offset-sm-2">
            <img src="images/rehan.JPG" alt = "Rehan's Picture">
        </div>
        <p>
            Rehan Abid
            <br>
            Team Member
        </p>
    </div>


</div>
</body>
<footer id="footer">

    <?php
    web_footer();
    ?>

</footer>
</html>