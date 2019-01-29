<!DOCTYPE html>
<html lang = "en">
<head>
    <title> About-US Page </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
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
    </style>

</head>
<body>
<?php
include "Functions/functions.php";
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


<div class="container-fluid" id="web-Footer">
    <div class="row my-5">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10">
            <img src="Images/Rackup-Logo(350X163).png"/>
            <p style="text-align: left;font-size: large">Pakistan's first Freelancing Website</p>
            <p>Top-skilled freelancers and the essentials to find and work with them.
                Personalized assistance to help you find premium, pre-vetted talent.
                End-to-end technology and service solution customized to fit your company.
            </p>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 my-5">
            <h2>About US</h2>
            <a href="aboutus.php" style="color: white;">About US</a>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 my-5">
            <h2>Contact US</h2>
            <h5 style="text-align: left;"><a style="color: white;" href="https://www.google.com/maps/place/University+of+Central+Punjab/@31.4469043,74.2660429,17z/data=!3m1!4b1!4m5!3m4!1s0x3919017432b1835b:0xe396992a5b05891c!8m2!3d31.4468997!4d74.2682316">
                    <br>1 - Khayaban-e-Jinnah Road
                    <br>Johar Town, Lahore, Pakistan
                    <br>Zip : 54000</a></h5>

            <div style="font-size:xx-large">
                <a style="color: white;" href="http://www.facebook.com"><i class="fab fa-facebook-square icon_color"></i></a>
                <a style="color: white;" href="http://www.gmail.com"><i class="fab fa-google-plus-square icon_color"></i></a>
                <a style="color: white;" href="http://www.instagram.com"><i class="fab fa-instagram icon_color"></i></a>
                <a style="color: white;" href="http://www.twitter.com"><i class="fab fa-twitter-square icon_color"></i></a>
            </div>
            </p>
        </div>
    </div>
    <div class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height: auto;text-align: center; padding: 2%">
        Copyright &copy Rackup 2018-2019
    </div>
</div>

</body>




</html>