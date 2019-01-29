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
<head>
    <title>
        Contact Us
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>

    <style>
        .body_font{
            font-family:Ubuntu;
            color: white;
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

<body class="background_image">

<?php
top_header(); ?>

    <div class="container body_font mt-5">
        <div class="form-row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <form>
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="Email"><strong>Email:</strong></label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <input type="text" class="inputbars" id="Email" placeholder="Enter Your Email Here">
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="Subject"><strong>Subject:</strong></label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <input type="text" class="inputbars" id="Subject" placeholder="Enter Your Subject Here">
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="Message"><strong>Message:</strong></label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <textarea rows="6" class="textare_style" id="Message" placeholder="Enter Your Message Here"></textarea>
                        </div>
                    </div>

                    <div class="form-row my-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button type="submit" class="btn btn-primary btn-block"> <strong>Submit</strong> </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="form-row rackup_style">
                    <div class="col-xl-5 col-lg-4 col-md-1 col-sm-1 col-1 d-none d-lg-block"></div>
                    <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11 col-11">
                        Rackup Limited
                    </div>
                </div>
                <div class="form-row address_style">
                    <div class="col-xl-5 col-lg-4 col-md-1 col-sm-1 col-1 d-none d-lg-block"></div>
                    <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11 col-11">
                        <strong>Registered Office</strong><br>
                        173 A-3 P.G.E.C.H.S <br>
                        PIA Main Boulevard <br>
                        Lahore, Pakistan <br>
                        +923054004882 <br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-5 col-lg-4 col-md-1 col-sm-1 col-1 d-none d-lg-block"></div>
                    <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11 col-11">
                        <a href="http://www.facebook.com"><i class="fab fa-facebook-square icon_color"></i></a>
                        <a href="http://www.gmail.com"><i class="fab fa-google-plus-square icon_color"></i></a>
                        <a href="http://www.instagram.com"><i class="fab fa-instagram icon_color"></i></a>
                        <a href="http://www.twitter.com"><i class="fab fa-twitter-square icon_color"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer id="footer">

    <?php
        web_footer();
    ?>

</footer>

</body>