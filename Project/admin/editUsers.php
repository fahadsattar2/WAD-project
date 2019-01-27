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

if(isset($_GET['update_user']))
{
    $updated_fname = $row['first_name'];
    $updated_lname = $row['last_name'];
    $updated_email = $row['email'];
    $updated_pwd = $row['password'];
    $updated_rating = $row['rating'];
    $updated_dob = $row['DOB'];
    $updated_Img = $row['Profile_image'];

    $update_product = "update products set first_name = '$updated_fname', 
                                        last_name = '$updated_lname',
                                        email = '$updated_email' ,
                                        password = '$updated_pwd',
                                        rating = '$updated_rating',
                                        DOB = '$updated_dob',
                                        where pro_id='$Uid'";

    $run_cat = mysqli_query($con, $get_cat);

    if($run_cat){
        header("location: index.php?view_categories");
    }
}

?>
<h1>User ID : <?php echo $Uid ?></h1>
<div class="row">
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
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_first_name">Last name</label>
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
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="User_dob">Rating </label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="User_dob" name="User_dob" placeholder="Date of Birth"
                           value="<?php echo $Udob;?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_user" name="update_user"
                           value="Update User">
                </div>
            </div>

        </form>
    </div>
</div>