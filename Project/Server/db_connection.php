<?php

$connection = mysqli_connect("localhost",root,"","rackup");

if(!$connection){
    die("Connection to database failed".mysqli_connect_error());
}
else
    echo "Connection to database successful";