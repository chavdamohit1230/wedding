<?php
ob_start();
include("connection.php");

if (isset($_POST["add"])) {
    $uploadDir = "C:/wamp64/www/wedding/admine side/vanueimage/";

    // Ensure the folder exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Gallery images
    $file_names = $_FILES['file']['name'];
    $tmp_names = $_FILES['file']['tmp_name'];
    $file_errors = $_FILES['file']['error'];

    // Form fields
    $vanuename = mysqli_real_escape_string($con, $_POST['vanuename'] ?? '');
    $location = mysqli_real_escape_string($con, $_POST['location'] ?? '');
    $price = mysqli_real_escape_string($con, $_POST['price'] ?? '0');
    $rating = mysqli_real_escape_string($con, $_POST['rating'] ?? '0');

    $uploaded_files = [];
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

    // Upload multiple files
    if (!empty($file_names) && is_array($file_names)) {
        foreach ($file_names as $key => $file) {
            if ($file_errors[$key] === 0) {
                $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                // Validate file type
                if (!in_array($fileExt, $allowedExtensions)) {
                    echo "Invalid file type: $file <br>";
                    continue;
                }

                // Ensure unique filename
                $newFileName = uniqid() . "_" . basename($file);
                $destination = $uploadDir . $newFileName;

                if (move_uploaded_file($tmp_names[$key], $destination)) {
                    $uploaded_files[] = $newFileName;
                } else {
                    echo "Failed to move: $file <br>";
                }
            } else {
                echo "File error: $file <br>";
            }
        }
    }

    // Convert uploaded files to a string for database
    $file_paths = implode(",", $uploaded_files);

    // Ensure all required fields are set before inserting into the database
    if (!empty($vanuename) && !empty($file_paths)) {
        $stmt = $con->prepare("INSERT INTO vanue (vanuename,location, price,rating, vanueimage) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $vanuename, $location, $price, $rating, $file_paths);

        if ($stmt->execute()) {
            echo "<script>
                    Swal.fire({
                        title: 'Success!',
                        text: 'Gallery Images Added Successfully',
                        icon: 'success'
                    }).then(() => {
                        window.location.href = 'gallerytable.php';
                    });
                  </script>";
        } else {
            echo "Database Insert Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "<script>Swal.fire('Error', 'Required fields are missing!', 'error');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Package</title>
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
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: rgb(57, 17, 44);
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

    <div class="form-container">
        <h2>Gallery Package</h2>
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="vanuename" required>
                <label>vanue Name</label>
            </div>

            <div class="form-group">
                <input type="text" name="location" required>
                <label>location</label>
            </div>


            <div class="form-group">
                <input type="number" name="price" required>
                <label>Package Price</label>
            </div>

            <div class="form-group">
                <input type="text" name="rating" required>
                <label>rating</label>
            </div>

            <div class="form-group">
                <input type="file" name="file[]" multiple>
                <label>Gallery Images</label>
            </div>

            <input type="submit" value="Add Package" name="add">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>

</body>

</html>