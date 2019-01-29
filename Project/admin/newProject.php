<?php
require "db_connection.php";

if(isset($_POST['btn_add_project']))
{
    $updated_Pname = $_POST['ProjectName'];
    $updated_PClientID = $_POST['ProjectClientId'];
    $updated_PBudget = $_POST['ProjectBudget'];
    $updated_PTime = $_POST['ProjectTime'];
    $updated_PDesc = $_POST['ProjectDescription'];
    $updated_PStatus = $_POST['ProjectStatus'];

    $query = "Insert into projects set Project_name = '$updated_Pname',
                              client_id = '$updated_PClientID',
                              Budget = '$updated_PBudget',
                              Time = '$updated_PTime',
                              Description = '$updated_PDesc',
                              status = '$updated_PStatus'";

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
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Project </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_first_name">Project Name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="ProjectName" name="ProjectName" placeholder="Project Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_last_name">Client ID</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="ProjectClientId" name="ProjectClientId" placeholder="Client Id">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_Email">Budget</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="ProjectBudget" name="ProjectBudget" placeholder="Budget">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_password">Time</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="ProjectTime" name="ProjectTime" placeholder="Time">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_dob">Description</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="ProjectDescription" name="ProjectDescription" placeholder="Description">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_dob">Status</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="ProjectStatus" name="ProjectStatus" placeholder="Status">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="btn_add_project" name="btn_add_project"
                           value="Add a Project">
                </div>
            </div>

        </form>
    </div>
</div>
</body>
</html>