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
<html>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>


<style>
    .body_font{
        font-family:Ubuntu;
        color: white;
    }
    img {
        width: 100%;
        height: auto;
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
top_header();
?>
<div>
    <img src="Images/contact-us.jpg" alt="contact-us_Banner">
</div

<div class="container-fluid">
    <div class="container col-xl-8 col-lg-8 col-md-7 col-sm-10 col-10 offset-1 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 my-5">
        <div>
            <p>
            <h1>Give us a Chance to Help You</h1>
            <h3>Fill out the following form and Let us Know what bothers you :</h3>
            </p>
        </div>
        <div>
            <p>
                <label for="txtEmail">E-mail :</label>
            </p>
            <input type="text" id="txtEmail" name="txtEmail" placeholder="Enter your E-mail">
        </div>

        <div>
            <p>
                <label for="txtSubject">Subject :</label>
            </p>
            <input type="text" id="txtSubject" name="txtSubject" placeholder="Enter Subject">
        </div>

        <div>
            <p>
                <label for="txtMessage">Message :</label>
            </p>
            <textarea id="txtMessage" name="txtMessage">
                </textarea>
        </div>

    </div>

    <div class="container col-xl-3 col-lg-3 col-md-4 col-sm-10 col-10 offset-1 my-5" style="text-align: left">

        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1" style="margin-bottom: 5%;">
            <p>
            <h3>Contact with us :</h3>
            <h4 style="text-align: left">For Support and Any Query<br>Contact us at <a href="#">contact@rackup.pk</a></h4>
            </p>
        </div>

        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1">
            <p>
            <h3>Where to find us?</h3>
            <h4 style="text-align: left"><a href="https://www.google.com/maps/place/University+of+Central+Punjab/@31.4469043,74.2660429,17z/data=!3m1!4b1!4m5!3m4!1s0x3919017432b1835b:0xe396992a5b05891c!8m2!3d31.4468997!4d74.2682316">UCP Lahore</a>
                <br>1 - Khayaban-e-Jinnah Road
                <br>Johar Town, Lahore, Pakistan
                <br>Zip : 54000</h4>
            </p>
        </div>

        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1">
            <p>
            <h3>Ways to Contact us:</h3>
            <div style="font-size:xx-large">
                <a href="http://www.facebook.com"><i class="fab fa-facebook-square icon_color"></i></a>
                <a href="http://www.gmail.com"><i class="fab fa-google-plus-square icon_color"></i></a>
                <a href="http://www.instagram.com"><i class="fab fa-instagram icon_color"></i></a>
                <a href="http://www.twitter.com"><i class="fab fa-twitter-square icon_color"></i></a>
            </div>
            </p>
        </div>

    </div>
</div>

<div class="container-fluid" id="location-Images">
    <img src="Images/location.PNG" alt="Location_Banner">
</div>

<?php
include "Functions/functions.php";
web_footer();
?>

</body>
</html>