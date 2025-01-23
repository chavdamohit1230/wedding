<?php
ob_start();
include("connection.php");

if (isset($_POST["add"])) {

    $studioname = $_POST["studioname"];
    $travel = $_POST['travel'];
    $teamsize = $_POST['teamsize'];
    $price = $_POST['price'];


    $file_name = $_FILES['file']['name'];

    $dst = "C:\wamp64\www\wedding\admine side\images/" . $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];

    $result = "insert into gallarytable value('','$studioname','$travel','$teamsize','$price','$file_name')";

    $res = mysqli_query($con, $result);

    if (!$res) {

        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Error!',
                text: 'Failed to Add Package',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
        </script>";
    } else {

        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Success!',
                text: 'Gallery Package Add Successfully ',
                icon: 'success',
            }).then(() => {
                window.location.href = 'gallerytable.php'; // Redirect to the table page after OK
            });
        });
        </script>";
    }


    move_uploaded_file($tmp_name, $dst);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Label Inside Border on Focus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
        }

        h2 {
            color: rgb(57, 17, 44);
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            margin: 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            font-size: 14px;
            outline: none;
            position: relative;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: rgb(57, 17, 44);
            ;

        }

        .form-group label {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 14px;
            color: #aaa;
            pointer-events: none;
            transition: all 0.3s ease;
            background-color: #fff;
            padding: 0 5px;
        }

        .form-group input:focus+label {
            top: -1px;
            font-size: 12px;
            color: rgb(57, 17, 44);

        }

        input[type="submit"] {
            background-color: rgb(57, 17, 44);
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            font-size: 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: rgb(57, 17, 44);
        }
    </style>
</head>

<body>



    <?php

    $mm = $_GET['studioname'];
    echo $mm;

    ?>


    <div class="form-container">
        <h2>Gallery Package</h2>
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" id="name" name="studioname" placeholder=" ">
                <label for="name">Studioname</label>
            </div>


            <div class="form-group">
                <input type="text" id="travel" name="travel" placeholder=" ">
                <label for="email">Travel</label>
            </div>


            <div class="form-group">
                <input type="text" id="teamsize" name="teamsize" placeholder=" ">
                <label for="age">Team Size</label>
            </div>



            <div class="form-group">
                <input type="text" id="package" name="price" placeholder=" ">
                <label for="phone">package Price</label>
            </div>



            <div class="form-group">
                <input type="file" id="file" name="file">
                <label for="file">Upload File</label>
            </div>


            <input type="submit" value="Add Package" name="add">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>

</body>

</html>