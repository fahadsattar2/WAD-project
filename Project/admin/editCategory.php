<?php
require "db_connection.php";

if(isset($_GET['id']))
{
    $get_id = $_GET['id'];
    $query = "select * from category where category_id='$get_id'";
    $run = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($run);

    $Cid = $row['category_id'];
    $Cname = $row['category_name'];
}

if(isset($_POST['btn_update_category']))
{
    $updated_Cname = $_POST['CategoryName'];

    $query = "update category set category_name = '$updated_Cname',
                              where category_id='$Cid'";

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
<h1>Category ID : <?php echo $Cid ?></h1>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Category </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_first_name">Name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="CategoryName" name="CategoryName" placeholder="Category Name"
                           value="<?php echo $Cname;?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="btn_update_category" name="btn_update_category"
                           value="Update A Category">
                </div>
            </div>

        </form>
    </div>
</div>
</body>
</html>