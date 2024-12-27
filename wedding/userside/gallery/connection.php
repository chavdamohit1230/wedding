<?php

$servername = "localhost";
$username = "root";
$pass = "";

$con = mysqli_connect($servername, $username, $pass);

if (!$con) {
    echo "not connect";
}

$db = mysqli_select_db($con, "project");

if (!$db) {
    echo "not connect";
}
?>