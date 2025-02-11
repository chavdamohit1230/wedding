<?php
include("connection.php");

$db = mysqli_select_db($con, 'project');

if (!$db) {
    echo "not coneect";
}
if (isset($_POST["submit"])) {


    $servicename = $_POST["servicename"];
    $massage = $_POST["message"];
    $file_name = $_FILES['file']['name'];


    $dst = "C:\wamp64\www\wedding\admine side\serviceimage/" . $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];


    $result = "insert into servicetable values('$servicename','$massage','$file_name')";

    $res = mysqli_query($con, $result);


    move_uploaded_file($tmp_name, $dst);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 500px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;

        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 15px;
            font-size: 20px;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        .form-container input,
        .form-container textarea,
        .form-container button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container textarea {
            resize: none;
            height: 80px;

        }

        .form-container button {
            background-color: #007bff;
            color: white;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Contact Form</h2>
        <form action="#" method="post" enctype="multipart/form-data">

            <label for="servicename">servicename</label>
            <input type="text" id="servicename" name="servicename" placeholder="Enter the service name">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write your message"></textarea>

            <label for="photo">Photo</label>
            <input type="file" id="photo" name="file">

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>