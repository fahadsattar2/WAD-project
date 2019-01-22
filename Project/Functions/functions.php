<?php
    function top_header()
    {
        echo "<div class=\"topnav col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <a class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#\">Logo</a>
                <a class=\"active col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#\">Home</a>
                <a class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#\">Projects</a>
                <div class=\"search-container col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3\">
                    <form>
                        <input class=\"search-container col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8\" type=\"text\" placeholder=\"Search..\" name=\"search\">
                        <button class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3\" type=\"submit\">Submit</button>
                    </form>
                </div>
                
                <a class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\" href=\"#profile\" style=\"float: right;\"><i class=\"fas fa-user-tie\"></i></a>
                </div>";
    }

    function web_footer()
    {
        echo "<div class=\"footer-main\">
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"span4\">
                    <div class=\"footer-desc\">
                        <p>Top-skilled freelancers and the essentials to find and work with them. Personalized assistance to help you find premium, pre-vetted talent. End-to-end technology and service solution customized to fit your company.</p>
                    </div>
                </div>
                <div class=\"span3\">
                    <div class=\"footer-contact\">
                        <h4 class=\"text-left\">Contact</h4>
                        <p>UCP, Johar Town, Lahore, Pakistan</p>
                        <p><i class=\"fa fa-phone-square\"></i>Phone: +92-42-35880007</p>
                        <p><i class=\"fa fa-envelope\"></i>
                            E-mail: <a class=\"mail-link\" href=\"mailto:rehan_abid@ucp.edu.pk\">rehan_abid@ucp.edu.pk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-foot\">
        <div class=\"container-fluid\">
            <p class=\"text-center m-lg-top-bottom\">
                <small>© 2018 - 2019 RackUp® Global Inc.</small>
            </p>
        </div>
    </div>";
    }
?>
