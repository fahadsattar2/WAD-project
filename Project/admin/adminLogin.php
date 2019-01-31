<?php
session_start();
include ('db_connection.php');
$error_msg = '';
if(isset($_POST['login'])){
    $adName = $_POST['AdminName'];
    $adPass = $_POST['AdminPassword'];
    $select_admin = "select * from admins where admin_username = '$adName' AND admin_password = '$adPass'";
    $run_admin = mysqli_query($connection, $select_admin);
    $check_admin = mysqli_num_rows($run_admin);
    if($check_admin == 0){
        $error_msg = 'Password or Username is wrong, try again';
    }
    else{
        $_SESSION['AdminName'] = $adName;
        if(!empty($_POST['remember'])) {
            setcookie('AdminName', $adName, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('AdminPassword', $adPass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('AdminName','' );
            setcookie('AdminPassword', '');
        }
        header('location:index.php?');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Admin Login</title>
</head>
<style>
    body{
        background-image: url("Images/homepage.jpg");position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }
</style>
<body class="text-center">
<form class="login_form" action="adminLogin.php" method="post">
    <h2 class="text-danger"><?php echo @$_GET['not_admin']?></h2>
    <h3 class="m-3">Admin Login </h3>
    <div><?php echo $error_msg;?></div>
    <input type="text" id="AdminName" name="AdminName"
           value="<?php echo @$_COOKIE['AdminName']?>" class="form-control" placeholder="Username" required autofocus>
    <input type="password" id="AdminPassword" name="AdminPassword"
           value="<?php echo @$_COOKIE['AdminPassword']?>" class="form-control" placeholder="Password" required><br>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <input class="btn btn-lg btn-primary mt-3" type="submit" name="login" value="Sign in">
</form>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>
