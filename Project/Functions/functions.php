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
?>