<?php
require "db_connection.php";

if(isset($_GET['id']))
{
    $get_id = $_GET['id'];
    $query = "select * from user where id='$get_id'";
    $run = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($run);

    $Uid = $row['id'];
    $fname = $row['first_name'];
    $lname = $row['last_name'];
    $Uemail = $row['email'];
    $pwd = $row['password'];
    $Urating = $row['rating'];
    $Udob = $row['DOB'];
    $UImg = $row['Profile_image'];
}

if(isset($_POST['btn_update_user']))
{
    $updated_fname = $_POST['User_first_name'];
    $updated_lname = $_POST['User_last_name'];
    $updated_email = $_POST['User_Email'];
    $updated_pwd = $_POST['User_password'];
    $updated_dob = $_POST['User_dob'];

    $query = "update user set first_name = '$updated_fname',
                              last_name = '$updated_lname',
                              email = '$updated_email',
                              password = '$updated_pwd',
                              DOB = '$updated_dob'
                              where id='$Uid'";

    $run = mysqli_query($connection, $query);
    if($run)
    {
        header("location: admin_panel.php?");
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
<div class="card">

    <div class="card-header">
<h1>User ID : <?php echo $Uid ?></h1>
</div>
<div class="row card-body">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update User </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_first_name">First name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_first_name" name="User_first_name" placeholder="First Name"
                           value="<?php echo $fname;?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_last_name">Last name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_last_name" name="User_last_name" placeholder="Last Name"
                           value="<?php echo $lname;?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_Email">E-Mail</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_Email" name="User_Email" placeholder="E-mail"
                           value="<?php echo $Uemail;?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_password">Password</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_password" name="User_password" placeholder="Password"
                           value="<?php echo $pwd;?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_dob">Date of Birth </label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_dob" name="User_dob" placeholder="Date of Birth"
                           value="<?php echo $Udob;?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="btn_update_user" name="btn_update_user"
                           value="Update User">
                </div>
            </div>

        </form>
    </div>
</div>
</div>
</body>
</html>