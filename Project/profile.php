<?php
require_once "Server/db_connection.php";
session_start();
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_POST['sign_out'])){
    session_destroy();
    header('location:Homepage.php?logged_out=You have logged out');
}
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);
    echo "<script>console.log( 'Printing: " . $output . "' );</script>";
}
$description_user=" ";
$hourly_rate_user=" ";
global $connection;
$output = $_SESSION['user_email'];
$query = "SELECT * FROM user WHERE email='$output'";
$QueryResult = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($QueryResult);
$user_id = $row['id'];
$f_name = $row['first_name'];
$l_name = $row['last_name'];
$date_birth = $row['DOB'];
$title_user = $row['Title'];
$location_user = $row['Location'];
$description_user = $row['Description'];
$hourly_rate_user = $row['hourly_rate'];
$rating_user = $row['rating'];
$profile_picture = $row['my_file'];
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
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .btn {
        border: 2px solid gray;
        color: gray;
        background-color: white;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 20px;
        font-weight: bold;
    }

    .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }
</style>
<script>
    function edit_info() {
        let x = document.getElementById("myP");
        let button = document.getElementById("edit_desc");
        if (x.contentEditable === "true") {
            button.innerText = "Edit";
/*            button.id = "save_desc";*/
            button.className = "fa fa-pencil btn btn-primary";
            x.contentEditable = "false";
            edit_description(document.getElementById("myP").innerText);
        }
        else {
            button.innerText = "Save";
            button.id = "edit_desc";
            button.className = "fa fa-pencil btn btn-primary";
            x.contentEditable = "true";
        }
    }

    function edit_title() {
        let x = document.getElementById("myT");
        let button = document.getElementById("myT");
        button.innerText = "Enter new Title Here!";
        /*button.id = "edit_title";*/
        x.contentEditable = "true";
        if (event.key === "Enter")
        {
            console.log("Enter pressed!");
            x.contentEditable = "false";
        }
    }
    function edit_description(responseText)
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("myP").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "edit_description.php?e=" + responseText, true);
        xmlhttp.send();
    }
</script>
<body>
<?php
include "Functions/functions.php";
web_header(); ?>
<!-- Page Container -->


<div class="container-fluid my-5 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 offset-1 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1">
    <div class="row">
        <div class="col m3 col-xl-2 col-lg-4 col-md-5 col-sm-5 col-11">
            <div class="card" style="text-align: center;">
                <div class="container">
                    <p>
                        <img src="profile_images/<?php echo $profile_picture?>" class="circle" style="height:106px;width:106px" alt="Avatar">
                    </p>
                    <div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="file" class="upload-btn-wrapper" aria-valuetext="Upload" id = "my_file" name="my_file" />
                            <button type="submit" class="btn" name="save_file" id = "save_file">Save Picture</button>
                        </form>
                    </div>
                    <div>

                        <?php
                        if(isset($_POST['save_file']))
                        {
                            $my_file = $_FILES['my_file']['name'];
                            $my_file_tmp = $_FILES['my_file']['tmp_name'];
                            move_uploaded_file($my_file_tmp,"profile_images/$my_file");
                            $update=mysqli_query($connection,"update user set my_file='$my_file' where id = $user_id");
                            if($update)
                            {
                                echo"<script>alert('Profile updated successfully')  </script>";
                            }
                            else
                            {
                                echo"<script>alert('Profile Picture Upload failed!')  </script>";
                            }
                        }
                        ?>
                    </div>
                    <hr>
                    <p onclick="edit_title()" id = "myT"><i class="fa fa-pencil fa-fw"></i><b><?php echo $title_user?></b></p>
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
                        <h1 style="color: green">
                            <span><b>.</b></span>
                            <span><b>&nbsp;online</b></span>
                        </h1>
                        <p id = "myP"><?php echo $description_user ?></p>
                        <button type="button" id = "edit_desc" name="edit_desc" onclick="edit_info()" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</button>
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
                    <h3><strong><?php echo $hourly_rate_user?></strong>USD/hr</h3>
                    </p>
                    <p><b><u>Ratings</u>:  </b><strong><?php echo $rating_user?>/5.0</strong></p>
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
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out-alt"></i>Logout</a>
            </li>
            <!-- End Right Column -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Page Container -->
</div>


    <?php
        web_footer();
    ?>


</body>
</html>