<?php

session_start();
require_once "db_connection.php";
if(!isset($_SESSION['AdminName'])){
    header('location: adminLogin.php?not_admin=You are not Admin!');
}

require "db_connection.php";

if(isset($_POST['btn_add_user']))
{
    $new_fname = $_POST['User_first_name'];
    $new_lname = $_POST['User_last_name'];
    $new_email = $_POST['User_Email'];
    $new_pwd = $_POST['User_password'];
    $new_dob = $_POST['User_dob'];

    $query = "Insert into user set first_name = '$new_fname',
                              last_name = '$new_lname',
                              email = '$new_email',
                              password = '$new_pwd',
                              DOB = '$new_dob'";

    $run = mysqli_query($connection, $query);
    if($run)
    {
        header("location: index.php?");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container">
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Add New User </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_first_name">First name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_first_name" name="User_first_name" placeholder="First Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_last_name">Last name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_last_name" name="User_last_name" placeholder="Last Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_Email">E-Mail</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_Email" name="User_Email" placeholder="E-mail">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_password">Password</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_password" name="User_password" placeholder="Password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_dob">Date of Birth </label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_dob" name="User_dob" placeholder="Date of Birth">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="btn_add_user" name="btn_add_user"
                           value="Add User">
                </div>
            </div>

        </form>
    </div>
</div>
</body>
</html>