
<?php
   function successSignUp()
    {
        echo"<div class=\"modal fade\" id=\"LoginModal\" role=\"dialog\">";
        echo"<div class=\"modal-dialog\">";
        echo"<div class=\"modal-content\">";
        echo"<div class=\"modal-body\" style=\"padding:40px 50px;\">";
        echo"</div>";
        echo"<div class=\"modal-header\" style=\"padding:35px 50px;\">";
        echo"<h4><span class=\"glyphicon glyphicon-log-ok\"></span>Sign Up was SuccessFul</h4>";
        echo"</div>";
        echo"<div class=\"modal-body\" style=\"padding:40px 50px;\"><button type=\"submit\" onclick=\"window.location.href='profile.html'\" class=\"btn\" name=\"btn_profileRedirect\">Take Me to My Profile</button></div>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
    }


    require_once "Server/db_connection.php";
    $errors=array();
    if(isset($_POST['sgn_signup_btn']))
    {
        echo "Hello";
        $fname = $_POST['sgn_firstname'];
        $lname = $_POST['sgn_lastname'];
        $mail = $_POST['sgn_email'];
        $pass = $_POST['sgn_password'];
        $dob = $_POST['sgn_dob'];
        $pass2 = $_POST['sgn_cnfrmpass'];
        if(empty($fname)){
            array_push($errors,"First name is required");
        }
        if(empty($lname)){
            array_push($errors,"Last name is required");
        }
        if(empty($mail)){
            array_push($errors,"Email is required");
        }
        if(empty($pass)){
            array_push($errors,"Password is required");
        }
        if(empty($dob)){
            array_push($errors,"Date of Birth is required");
        }
        if($pass!=$pass2){
            array_push($errors,"The two passwords donot match");
        }
        if(count($errors)==0)
        {
            $password=md5($pass);
            $insert_user = "insert into user (first_name,last_name,email,password,rating,DOB) VALUES ('$fname','$lname','$mail','$pass','0.0','$dob');";
            $insert = mysqli_query($connection, $insert_user);
            if($insert){
                successSignUp();
                header("location: ".$_SERVER['PHP_SELF']);

            }

        }
    }
    if(isset($_POST['sin_signin_btn']))
    {
        debug_to_console("Sign-in Button clicked!!!!");
        $email=$_POST['lgn_email'];
        $pass=$_POST['lgn_pass'];
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($pass)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($pass);
            $query = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1)
            {

                header('location: index.php');
               // successSignUp();
            }
            else {
                array_push($errors, "Wrong username/password combination");
            }
        }


    }

?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome to Rack-Up</title>
    <style>
        .modal-header, h4, .close {
            /*background-color: black;*/
            color: black !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            /*background-color: black;*/
        }

        .input-container {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 3%;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
        body{
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
        .error {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }
    </style>
</head>

<body>
<div>
    <div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="Bimages" src="Images/wallpaper%20(1).jpg" alt="FreeLancer">
            </div>

            <div class="item">
                <img class="Bimages" src="Images/wallpaper%20(2).jpg" alt="FreeLancer2">
            </div>

            <div class="item">
                <img class="Bimages" src="Images/wallpaper%20(3).jpg" alt="FreeLancer2">
            </div>
            <div class="carousel-caption">
                <div id="DivButtons">
                    <button type="button" class="btn btn-default btn-lg" id="LoginBtn">Login</button>
                    <button type="button" class="btn btn-default btn-lg" id="RegisterBtn" style="margin-top: 1%;">Sign Up</button>
                </div>
            </div>
        </div>

        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>-->
    </div>
    <div class="modal fade" id="LoginModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-log-in"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post">
                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field" type="email" placeholder="Email" name="lgn_email">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" type="password" placeholder="Password" name="lgn_pass">
                        </div>

                        <div>
                            <button type="submit" class="btn" name="sin_signin_btn">Sign In</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>Not a member? <a href="#" id="LogInRedirecter" data-dismiss="modal">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="SignUpModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-user"></span> Sign Up</h4>
                </div>

                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post">
                        <?php include ('Functions/errors.php'); ?>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="Firstname" name="sgn_firstname" value="">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="Lastname" name="sgn_lastname" value="">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field" type="email" placeholder="Email" name="sgn_email">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="date" name="sgn_dob">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-key icon icon"></i>
                            <input class="input-field" type="password" placeholder="Password" name="sgn_password">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" type="password" placeholder="Confirm Password" name="sgn_cnfrmpass">
                        </div>

                        <div>
                            <button type="submit" class="btn" name="sgn_signup_btn">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>Already have an Account? <a href="#" id="SignInRedirecter" data-dismiss="modal">Sign In</a></p>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $("#LoginBtn").click(function() {
            $("#LoginModal").modal();
        });
    });
    $(document).ready(function() {
        $("#SignInRedirecter").click(function() {
            $("#LoginModal").modal();
        });
    });
    $(document).ready(function() {
        $("#RegisterBtn").click(function() {
            $("#SignUpModal").modal();
        });
    });
    $(document).ready(function() {
        $("#LogInRedirecter").click(function() {
            $("#SignUpModal").modal();
        });
    });
</script>

</body>

</html>