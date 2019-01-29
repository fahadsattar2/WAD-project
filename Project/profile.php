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

if(isset($_POST['save_file'])){
    $filename=$_FILES['my_file']['name'];
    echo "<script>console.log( 'Printing: " . $filename . "' );</script>";
}


/*$insert_product = "insert into products (pro_cat, pro_brand,pro_title,pro_price,pro_desc,pro_image,pro_keywords)
                  VALUES ('$pro_cat','$pro_brand','$pro_title','$pro_price','$pro_desc','$pro_image','$pro_keywords');";
$insert_pro = mysqli_query($con, $insert_product);
if($insert_pro){
    header("location: ".$_SERVER['PHP_SELF']);
}*/
?>
<!DOCTYPE html>
<html>
<head>

    <title>Profile Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>

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
</head>

<body>
<?php
include "Functions/functions.php";
top_header(); ?>

    <div class="container-fluid my-5 col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 offset-1 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1">
        <div class="row">
            <div class="col m3 col-xl-2 col-lg-4 col-md-5 col-sm-5 col-11">
                <div class="card" style="text-align: center;">
                    <div class="container">
                        <p>
                            <img src="Images/Dummy-Profile.png" class="circle" style="height:106px;width:106px" alt="Avatar">
                        </p>
                        <div class="upload-btn-wrapper">
                            <button class="btn">Upload a file</button>
                            <input type="file" id = "my_file" name="my_file" />
                        </div>
                        <div>
                            <input type="submit" id = "save_file" name="save_file" />
                            <!--<button class="btn" name="save_file" id = "save_file">Save Picture</button>-->
                        </div>
                        <!-- <button type="button" class="btn btn-light" id="btnDP">Change Profile Pic</button>
                        --><!--<form method="post">
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
            </div>

            <div class="col m3 col-xl-6 col-lg-4 col-md-5 col-sm-5 col-11">
                <div class="col m12">
                    <div class="card">
                        <div class="container" style="margin: 1%;margin-bottom: 2%;">
                            <h2><b><?php echo $f_name." ".$l_name ?></b></h2>
                            <h1 style="color: green">
                                <span><b>.</b></span>
                                <span><b>&nbsp;online</b></span>
                            </h1>
                            <p><?php echo $description_user ?></p>
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
                        </div>
                    </div>
                    <br>
                </div>
            </div>

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
            </div>
        </div>
    </div>

<?php
web_footer();
?>
</body>

</html>