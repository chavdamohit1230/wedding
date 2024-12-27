<?php

$servername = "localhost";
$username = "root";
$pass = "";

$con = mysqli_connect($servername, $username, $pass);

if (!$con) {
    echo "not connect";
}

$db = mysqli_select_db($con, "mohit");

if (!$db) {
    echo "not connect";
}

if (isset($_POST["submit"])) {

    $name = $_POST["m1"];

    $result = "insert into student value('$name')";

    $query1 = mysqli_query($con, $result);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">

        <input type="text" name="m1">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>