<?php
    function top_header()
    {
        echo "<div class=\"topnav collapsefixer col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <a class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#\">Logo</a>
                <a class=\"active col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#\">Home</a>
                <a class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#\">Projects</a>
                <div class=\"search-container col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3\">
                    <form>
                        <input class=\"search-container col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8\" type=\"text\" placeholder=\"Search..\" id=\"search-bar\" name=\"search-bar\" onkeyup=\"searchResult(this.value)\">
                        <button class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3\" type=\"submit\">Submit</button>
                    </form>
                </div>
                
                <a class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#profile\" style=\"float: right;\"><i class=\"fas fa-user-tie\"></i></a>
                </div>";
    }

    function web_footer()
    {
        echo "<div class=\"container-fluid\" id=\"web-Footer\">
    <div class=\"row my-5\">
        <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10\">
            <img src=\"Images/Rackup-Logo(350X163).png\"/>
            <p style=\"text-align: left;font-size: large\">Pakistan's first Freelancing Website</p>
            <p>Top-skilled freelancers and the essentials to find and work with them.
                Personalized assistance to help you find premium, pre-vetted talent.
                End-to-end technology and service solution customized to fit your company.
            </p>
        </div>

        <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 my-5\">
            <h2>About US</h2>
            <a href=\"aboutus.php\" style=\"color: white;\">About US</a>
        </div>

        <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 my-5\">
            <h2>Contact US</h2>
            <h5 style=\"text-align: left;\"><a style=\"color: white;\" href=\"https://www.google.com/maps/place/University+of+Central+Punjab/@31.4469043,74.2660429,17z/data=!3m1!4b1!4m5!3m4!1s0x3919017432b1835b:0xe396992a5b05891c!8m2!3d31.4468997!4d74.2682316\">
                <br>1 - Khayaban-e-Jinnah Road
                <br>Johar Town, Lahore, Pakistan
                <br>Zip : 54000</a></h5>

            <div style=\"font-size:xx-large\">
                <a style=\"color: white;\" href=\"http://www.facebook.com\"><i class=\"fab fa-facebook-square icon_color\"></i></a>
                <a style=\"color: white;\" href=\"http://www.gmail.com\"><i class=\"fab fa-google-plus-square icon_color\"></i></a>
                <a style=\"color: white;\" href=\"http://www.instagram.com\"><i class=\"fab fa-instagram icon_color\"></i></a>
                <a style=\"color: white;\" href=\"http://www.twitter.com\"><i class=\"fab fa-twitter-square icon_color\"></i></a>
            </div>
            </p>
        </div>
    </div>
    <div class=\"container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\" style=\"height: auto;text-align: center; padding: 2%\">
        Copyright &copy Rackup 2018-2019
    </div>
</div>";
    }
?>
