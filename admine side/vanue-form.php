<?php


$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    echo "not connect" . "<br>";
} else {
    echo "connect" . "<br>";
}

$select = mysqli_select_db($conn, 'project');

if (!$select) {
    echo "not select" . "<br>";
} else {
    echo "select" . "<br>";
}

if (isset($_POST["submit"])) {
    $n = $_POST["vanuename"];
    $n1 = $_POST["location"];
    $n2 = $_POST["rating"];
    $n3 = $_POST["price"];
    $vanuephoto = $_FILES["file"]["name"];
    echo $vanuephoto;
    $tmpname = $_FILES["file"]["tmp_name"];



    $dest = 'C:\wamp64\www\wedding\admine side\vanueimage/' . $_FILES["file"]["name"];

    $result = "insert into vanue value('','$n','$n1',$n2,$n3,'$vanuephoto')";

    move_uploaded_file($tmpname, $dest);

    $result2 = mysqli_query($conn, $result);

    print_r($_FILES);

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vanue form</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {

            background: linear-gradient(#1212, #4323);
        }

        .container {

            height: 500px;
            width: 40%;
            background-color: greenyellow;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 450px;
            margin-top: 100px;
            position: relative;
            bottom: 60px;
            box-shadow: 4px 3px 1px;
        }

        form {

            border: 2px solid black;
            width: 65%;
            height: 400px;


        }

        label {

            font-size: 21px;
            margin-left: 20px;
            margin-bottom: 12px;

        }

        input {

            height: 30px;
            width: 90%;
            margin-top: 2px;
            margin-left: 12px;
        }

        input[type="file"] {
            height: 40px;
            margin-top: 25px;
            margin-left: 17px;
        }

        input[type="submit"] {

            margin-top: 28px;
            margin-left: 20px;
            height: 35px;
            font-size: 18px;
        }

        h1 {
            font-size: 35px;
            padding-left: 610px;
        }

        table {

            margin-left: 30%;
            margin-top: 15px;
        }

        td {

            height: 110px;
        }
    </style>
</head>

<body>

    <div class="container">


        <form action="" method="POST" enctype="multipart/form-data">



            <label>Vanue-name:</label>
            <input type="text" name="vanuename"><br>
            <label for="location">location</label>
            <input type="text" name="location"><br>
            <label for="rating">rating</label>
            <input type="text" name="rating"><br>
            <label for="price">price</label>
            <input type="text" name="price"><br>
            <input type="file" name="file"><br>
            <input type="submit" value="Add vanue" calss="btn" name="submit">

        </form>
    </div>


    <h1>data about the vanue</h1>

    <table border="1px">

        <tr>
            <th width="120px" height="40px">vanuename</th>
            <th width="120px">locatipn</th>
            <th width="120px">price</th>
            <th width="120px">rating</th>
            <th width="120px">vanuephoto</th>
        </tr>
        <?php

        $select = "select * from vanue";

        $query2 = mysqli_query($conn, $select);

        if (!$query2) {

            echo "noot" . "<br>";
        }
        while ($row = mysqli_fetch_assoc($query2)) {

            ?>


            <tr>
                <td><?php echo $row['vanuename']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['rating']; ?></td>
                <td><img width="150px" height="100px" src="vanueimage/<?php echo $row['vanueimage']; ?>" alt=""></td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>