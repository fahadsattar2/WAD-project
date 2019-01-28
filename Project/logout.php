<?php
session_start();
session_destroy();
header('location:Homepage.php?logged_out=You have logged out');
