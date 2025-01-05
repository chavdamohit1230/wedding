<?php


$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
        echo "not connect" . "<br>";
} else {
        echo "connect" . "<br>";
}


$db = mysqli_select_db($conn, 'project');

if (!$db) {
        echo "not coneect";
}

if (isset($_POST["submit"])) {

        //  echo "mohit";

        $studioname = $_POST["studioname"];
        $travel = $_POST['travel'];
        $teamsize = $_POST['teamsize'];
        $price = $_POST['price'];



        echo $studioname;
        echo $travel;
        echo $teamsize;
        echo $price;


        $file_name = $_FILES['file']['name'];
        $dst = "C:\wamp64\www\wedding\admine side\images/" . $_FILES["file"]["name"];
        $tmp_name = $_FILES['file']['tmp_name'];

        $result = "insert into gallarytable value('$studioname','$travel','$teamsize','$price','$file_name')";

        $res = mysqli_query($conn, $result);

        if (!$res) {

                echo "not connect";
        } else {

                echo "connect";
        }

        move_uploaded_file($tmp_name, $dst);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>file uplode</title>
</head>

<body>

        <form action="" method="POST" enctype="multipart/form-data">

                <input type="file" name="file" id="studioname"><br>
                <input type="text" name="studioname">
                <input type="text" name="travel">
                <input type="text" name="teamsize">
                <input type="text" name="price">
                <input type="submit" name="submit" value="submit">


                <?php

                $rr = "select * from gallarytable ";

                $res1 = mysqli_query($conn, $rr);


                while ($row = mysqli_fetch_assoc($res1)) {

                        ?>

                        <form action="" method="POST" enctype="multipart/form-data">


                                <table border="2px" align="center" height="120px" width="600px">
                                        <tr align="center">
                                                <td width="150px"><?php echo $row['studioname'] ?></td>
                                                <td><img height='100px' width="150px"
                                                                src="images/<?php echo $row['studioimage'] ?>">
                                                </td>
                                                <td width="150px"><?php echo $row['travel'] ?></td>
                                                <td width="150px"><?php echo $row['teamsize'] ?></td>
                                                <td width="150px"><?php echo $row['price'] ?></td>
                                        </tr>
                                </table>
                        </form>
                <?php } ?>


</body>

</html>

<!-- 
<input type="submit" name="delete" value="delete" />> -->