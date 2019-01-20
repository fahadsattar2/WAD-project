<?php

    require_once "db_connection.php";

    function printUser()
    {
        global $connection;
        $getUserQuery = "select * from user where id = '1';";
        $queryResult = mysqli_query($connection, $getUserQuery);
        while ($row = mysqli_fetch_assoc($queryResult)) {
            $counter = $row['id'];
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $email = $row['email'];
            $password = $row['password'];
            $rating = $row['rating'];
            $dob = $row['DOB'];
            echo "$counter,$fname,$lname,$email,$password,$rating,$dob";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            font-family: "Ubuntu";
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    function call_printName_php(){
        var result = "<?php printUser() ?>"
        alert(result);
        return false;
    }
    function UserTable()
    {
        closeNav();
        var body = document.getElementById("UserTableBody");
        body.innerHTML = "<tr>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\"><button>New</button></th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Counter</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Username</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Email</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Password</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Rating</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Skills</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Edit</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Delete</th>"+
            "</tr>";
    }
</script>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a onclick="UserTable()">Users</a>
        <a href="#">Projects</a>
        <a href="#">Payments</a>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <table id="UserTableBody" class="table table-bordered offset-2 offset-xl-2 offset-lg-2">
    </table>

</body>
</html>
