<?php

//include("connection.php");

// if (isset($_POST["submit"])) {


//         $file_name = $_FILES['file']['name'];

//         $tmp_name = $_FILES['file']['tmp_name'];


//         $size = $_FILES["file"]["size"];



//         $ext = explode(".", $file_name);

//         $ss = end($ext);

//         $dst = "C:\wamp\www\project\admine side\images/" . $_FILES["file"]["name"];


//         $result = "insert into  gallrytable value('$file_name','$size','$ss,''','','','')";

//         $res = mysqli_query($con, $result);


//         move_uploaded_file($tmp_name, $dst);


//         if (!$res) {

//                 $result = "insert into  gallrytable value('$file_name','$size','$ss')";

//                 move_uploaded_file($tmp_name, $dst);

//                 $res = mysqli_query($con, $result);

//                 if (!$res) {

//                         echo "not";
//                 }

//         }

// }


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

        $name = $_POST["name"];
        // echo $name;

        $file_name = $_FILES['file']['name'];
        $dst = "C:\wamp\www\project\admine side\images/" . $_FILES["file"]["name"];
        $tmp_name = $_FILES['file']['tmp_name'];

        $result = "insert into gallarytable value('$file_name','','','','')";

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

                <input type="file" name="file" id="name"><br>
                <input type="text" name="name">
                <input type="submit" name="submit" value="submit">


                <?php

                $rr = "select * from gallarytable ";

                $res1 = mysqli_query($conn, $rr);


                while ($row = mysqli_fetch_assoc($res1)) {

                        ?>

                        <form action="" method="POST" enctype="multipart/form-data">


                                <table border="2px" align="center" height="120px" width="600px">
                                        <tr align="center">
                                                <td width="150px"><?php echo $row['name'] ?></td>
                                                <td width="150px"><?php echo $row['type'] ?></td>
                                                <td><img height='100px' width="150px" src="images/<?php echo $row['image'] ?>">
                                                </td>
                                                <td width="150px"><a
                                                                href="servicedelete.php?name=<?php echo $row['name']; ?>">delete</a>
                                                </td>
                                        </tr>
                                </table>
                        </form>
                <?php } ?>


</body>

</html>

<!-- 
<input type="submit" name="delete" value="delete" />> -->