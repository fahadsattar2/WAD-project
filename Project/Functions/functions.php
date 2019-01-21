<?php
    function top_header()
    {
        echo "<div class=\"topnav col\">
                <a href=\"#\">Logo</a>
                <a class=\"active\" href=\"#\">Home</a>
                <a href=\"#\">Projects</a>
                <a href=\"#\">About Us</a>
                <a href=\"#\">Contact Us</a>
                <div class=\"search-container\">
                    <form>
                        <input type=\"text\" placeholder=\"Search..\" name=\"search\">
                        <button type=\"submit\">Submit</button>
                    </form>
                </div>
                
                <a href=\"#profile\" style=\"float: right;\"><i class=\"fas fa-user-tie\"></i></a>
                </div>";
    }
?>