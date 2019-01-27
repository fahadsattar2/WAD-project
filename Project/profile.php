<?php
require_once "Server/db_connection.php";
session_start();
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);
    echo "<script>console.log( 'Printing: " . $output . "' );</script>";
}

global $connection;
$output = $_SESSION['user_email'];
echo "<script>console.log( 'Printing: " . $output . "' );</script>";
$query = "SELECT * FROM user WHERE email='$output'";
$QueryResult = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($QueryResult);
$f_name = $row['first_name'];
$l_name = $row['last_name'];
$date_birth = $row['DOB'];
$title_user = $row['Title'];
$location_user = $row['Location'];
// echo "<script>console.log( 'First Name: " . $f_name . "' );</script>";
// echo "<script>console.log( 'Last Name: " . $lname . "' );</script>";

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<title>Profile Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body>
<?php
include "Functions/functions.php";
top_header(); ?>
<!-- Page Container -->
<div class="container-fluid my-5 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 offset-1 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1">
    <div class="row">
        <div class="col m3 col-xl-2 col-lg-4 col-md-5 col-sm-5 col-11">
            <div class="card" style="text-align: center;">
                <div class="container">
                    <p>
                        <img src="Images/Dummy-Profile.png" class="circle" style="height:106px;width:106px" alt="Avatar">
                    </p>
                    <button type="button" class="btn btn-light" id="btnDP">Change Profile Pic</button>
                    <!--<form method="post">
                       <input type="file" class="btn btn-primary" name = "btn_img"><i class="fa fa-pencil"></i>Edit Profile Picture</input>
                       </form>-->
                    <hr>
                    <p><i class="fa fa-pencil fa-fw"></i><b><?php echo $title_user?></b></p>
                    <p><i class="fa fa-home fa-fw"></i> <?php echo $location_user ?></p>
                    <p><i class="fa fa-birthday-cake"></i> <?php echo $date_birth?></p>
                </div>
            </div>
            <br>

            <!-- Skills -->
            <div class="card">
                <div class="container">
                    <p>Skills</p>
                    <ul>
                        <li class="tag small">C++</li>
                        <li class="tag small">C#</li>
                        <li class="tag small">Word Processing</li>
                        <li class="tag small">Games</li>
                        <li class="tag small">Programming</li>
                    </ul>
                </div>
            </div>
            <br>
            <!-- Alert Box -->
            <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
                  <i class="fa fa-remove"></i>
                  </span>
                <p><strong>Hey!</strong></p>
                <p>People are looking at your profile. Find out who.</p>
            </div>
            <!-- End Left Column -->
        </div>
        <!-- Middle Column -->
        <div class="col m3 col-xl-6 col-lg-4 col-md-5 col-sm-5 col-11">
            <div class="col m12">
                <div class="card">
                    <div class="container" style="margin: 1%;margin-bottom: 2%;">
                        <h2><b><?php echo $f_name." ".$l_name ?></b></h2>
                        <!-- Yahan php function aye ga DB say Fetch Name  -->
                        <h1 style="color: green">
                            <span><b>.</b></span>
                            <span><b>&nbsp;online</b></span>
                        </h1>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <!-- Yahan php function aye ga DB say Fetch About Yourself ka-->
                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</button>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="container">
                        <p>
                        <h1>Recent Reviews</h1>
                        </p>
                        <hr>
                        No Reviews
                        <!--Yahan Reviews ain gay DB say  -->
                    </div>
                </div>
                <br>
            </div>
        </div>
        <!-- End Middle Column -->
        <!-- Right Column -->
        <div class="col m3 col-xl-2 col-lg-4 col-md-5 col-sm-5 col-11">
            <div class="card">
                <div class="container">
                    <p><button class="btn btn-info">Edit Profile</button></p>
                    <p>
                    <h2><strong>$5</strong>USD/hr</h2>
                    </p>
                    <p>Ratings</p>
                    <p>Amount Earned</p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="container">
                    <h1>Stats</h1>
                    <p><span><b>N/A</b></span>&nbsp;&nbsp;Jobs Completed</p>
                    <p><span><b>N/A</b></span>&nbsp;&nbsp;On Budget</p>
                    <p><span><b>N/A</b></span>&nbsp;&nbsp;On Time</p>
                    <p><span><b>N/A</b></span>&nbsp;&nbsp;Repeat Hire Rate</p>
                </div>
            </div>
            <br>
            <div class="card">
                <p>
                <h1>Certifications</h1>
                <button>Get Certified</button>
                </p>
            </div>
            <br>
            <!-- End Right Column -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Page Container -->
</div>

<footer id="footer">

    <?php
    web_footer();
    ?>

</footer>

</body>
</html>