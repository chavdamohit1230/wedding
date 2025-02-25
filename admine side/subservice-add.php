<?php
include("connection.php");

if (isset($_POST["add"])) {
    $uploadDir = "C:/wamp64/www/wedding/admine side/serviceimage/subserviceimage/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $serviceid = $_POST["serviceid"];
    $subserviceid = $_POST["subserviceid"];
    $subservicename = $_POST["servicename"];
    $location = $_POST["location"];
    $price = $_POST["price"];

    $file_names = $_FILES['file']['name'];
    $tmp_names = $_FILES['file']['tmp_name'];
    $errors = $_FILES['file']['error'];

    $uploaded_files = [];
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

    if (!empty($file_names) && is_array($file_names)) {
        foreach ($file_names as $key => $file) {
            if ($errors[$key] === 0) {
                $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                if (!in_array($fileExt, $allowedExtensions)) {
                    echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Invalid file type: $file',
                                icon: 'error',
                                background: '#631549',  
                                color: 'white',
                                confirmButtonColor: '#ffcc00'
                            });
                        });
                    </script>";
                    continue;
                }

                $newFileName = uniqid() . "_" . basename($file);
                $destination = $uploadDir . $newFileName;

                if (move_uploaded_file($tmp_names[$key], $destination)) {
                    $uploaded_files[] = $newFileName;
                } else {
                    echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Failed to move: $file',
                                icon: 'error',
                                background: '#631549',
                                color: 'white'
                            });
                        });
                    </script>";
                }

            } else {
                echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'File error: $file',
                        icon: 'error',
                        confirmButtonColor: '#9B2172',
                        customClass: {
                            popup: 'custom-swal'
                        }
                    });
                });
            </script>";

                echo "<style>
                .custom-swal {
                    background-color: #631549 !important;
                    color: white !important;
                }
            </style>";

            }
        }
    }

    $file_paths = implode(",", $uploaded_files);

    // Check if subservice ID already exists
    $checkQuery = "SELECT * FROM subservice WHERE subserviceid = '$subserviceid'";
    $checkResult = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    text: 'Sub-service ID already exists!',
                    icon: 'error',
                    background: '#631549',
                    color: 'white'
                });
            });
        </script>";
    } else {
        $result = "INSERT INTO subservice (serviceid, subserviceid, subservicename, location, price, subserviceimage) 
                   VALUES ('$serviceid', '$subserviceid', '$subservicename', '$location', '$price', '$file_paths')";
        $res = mysqli_query($con, $result);

        if (!$res) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Failed to Add Service',
                        icon: 'error',
                        background: '#631549',
                        color: 'white'
                    });
                });
            </script>";
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Service Added Successfully',
                        icon: 'success',
                        background: '#631549',  // Green Background for Success
                        color: 'white'
                    }).then(() => {
                        window.location.href = 'subservice-add.php'; // Redirect after alert
                    });
                });
            </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Add Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 450px;
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            color: #3D0124;
            margin-bottom: 20px;
            text-align: center;

        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        input,
        textarea,
        .file-input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
            resize: none;
        }

        label {
            position: absolute;
            left: 14px;
            top: 14px;
            background: white;
            padding: 0 5px;
            font-size: 16px;
            color: #666;
            transition: 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #3D0124;
        }

        input:focus+label,
        input:not(:placeholder-shown)+label,
        textarea:focus+label,
        textarea:not(:placeholder-shown)+label {
            top: -8px;
            font-size: 12px;
            color: #3D0124;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3D0124;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #3D0124;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <div class="form-title">Service Add</div>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="input-group">
                <input type="text" id="textbox" name="subserviceid" placeholder="">
                <label for="textbox">sub-Service id</label>
            </div>

            <div class="input-group">
                <input type="text" id="textbox" name="serviceid" placeholder="">
                <label for="textbox">Service id</label>
            </div>

            <div class="input-group">
                <input type="text" id="textbox" name="servicename" placeholder="">
                <label for="textbox">Service Name</label>
            </div>
            <div class="input-group">
                <input type="text" id="textbox" name="location" placeholder="">
                <label for="textbox">location</label>
            </div>
            <div class="input-group">
                <input type="text" id="textbox" name="price" placeholder="">
                <label for="textbox">price</label>
            </div>

            <div class="input-group">
                <input type="file" id="file" name="file[]" multiple class="file-input">
            </div>

            <button type="submit" name="add">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
</body>

</html>