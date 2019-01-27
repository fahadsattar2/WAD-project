<?php

require_once "db_connection.php";

function printUser()
{
    global $connection;
    $getUserQuery = "select * from user";
    $queryResult = mysqli_query($connection, $getUserQuery);

    while ($row = mysqli_fetch_assoc($queryResult)) {
        $counter = $row['id'];
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $email = $row['email'];
        $password = $row['password'];
        $rating = $row['rating'];
        $dob = $row['DOB'];
        echo "<tr><td><button id=$counter onclick='UserExtraDetails(this.id)'>Expand</button></td><td>$counter</td><td>$fname</td><td>$lname</td><td>$email</td><td>$password</td><td>$rating</td><td>$dob</td><td><a href=editUsers.php?id=$counter><button>Edit</button></a></td><td><a href=deleteUsers.php?id=$counter><button>Delete</button></a></td></tr><tr><table id=User_row_$counter><tr></tr></table></tr>";
    }
}

function printProjects()
{
    global $connection;
    $Query = "select * from projects";
    $QueryResult = mysqli_query($connection, $Query);

    while($row = mysqli_fetch_assoc($QueryResult))
    {
        $ID = $row['Project_id'];
        $Name = $row['Project_name'];
        $clt_id = $row['client_id'];
        $budget = $row['Budget'];
        $time = $row['Time'];
        $desc = $row['Description'];
        $status = $row['status'];

        echo "<tr><td><button>Expand</button></td><td>$ID</td><td>$Name</td><td>$clt_id</td><td>$budget</td><td>$time</td><td>$desc</td><td>$status</td><td><button>Edit</button></td><td><button>Delete</button></td></tr>";

    }
}

function printCategories()
{
    global $connection;
    $Query = "select * from category";
    $QueryResult = mysqli_query($connection, $Query);

    while($row = mysqli_fetch_assoc($QueryResult))
    {
        $ID = $row['category_id'];
        $Name = $row['category_name'];

        echo "<tr><td><button>Expand</button></td><td>$ID</td><td>$Name</td><td><button>Edit</button></td><td><button>Delete</button></td></tr>";
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

    <style>
        body {
            transition: background-color .5s;
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

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a onclick="UserTable()">Users</a>
    <a onclick="ProjectsTable()">Projects</a>
    <a onclick="CategoriesTable()">Categories</a>
    <a href="#">Payments</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div id="EditingHead">

</div>

<table id="MainTableBody" class="table table-bordered"></table>

<div id="content">
    <div class="container">
     <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>
            <?php
            if(isset($_GET['editUsers'])){
                include ('editUsers.php');
            }
            ?>
    </div>
</div>
</body>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "white";
    }
    function UserTable()
    {
        closeNav();
        var body = document.getElementById("MainTableBody");
        body.innerHTML = "<tr>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\"><a href=\"newUser.php?\">New</a></th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Counter</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Firstname</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Lastname</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Email</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Password</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Rating</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Date Of Birth</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Edit</th>"+
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Delete</th>"+
            "</tr>";
        document.getElementById("MainTableBody").innerHTML += "<?php printUser(); ?>";
    }
    function ProjectsTable() {
        closeNav();
        var body = document.getElementById("MainTableBody");
        body.innerHTML = "<tr>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\"><button>New</button></th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Project ID</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Project Name</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Client ID</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Project Budget</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Project Time</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Project Description</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Project Status</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Edit</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Delete</th>" +
            "</tr>";
        document.getElementById("MainTableBody").innerHTML += "<?php printProjects(); ?>";
    }
    function CategoriesTable() {
        closeNav();
        var body = document.getElementById("MainTableBody");
        body.innerHTML = "<tr>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\"><button>New</button></th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Category ID</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Cetegory Name</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Edit</th>" +
            "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Delete</th>" +
            "</tr>";
        document.getElementById("MainTableBody").innerHTML += "<?php printCategories(); ?>";
    }

    function UserExtraDetails(x) {
        var rowNo = "User_row_"+x;
        rowNo.innerHTML = "<td>12</td>";
    }
</script>
</html>