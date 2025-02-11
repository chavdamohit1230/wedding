<?php
include("connection.php");

if (isset($_GET['edit'])) {

    $editvalue = $_GET['edit'];

    $query1 = "select * from servicetable where servicename='$editvalue'";

    $res1 = mysqli_query($con, $query1);


    while ($mm = mysqli_fetch_assoc($res1)) {
        $servicename = $mm['servicename'];
        $message = $mm['message'];
        $imge = $mm['serviceimage'];

        // echo $servicename;
        // echo $message;
        // echo $imge;


    }

    //print_r($mm);
}
if (isset($_POST["update"])) {

    $service = $_POST["servicename"];
    $msg = $_POST["message"];
    echo $service;
    echo $msg;

    $updatequery = "update servicetable set message ='$msg',servicename='$service' where serviceimage='$imge'";

    $res = mysqli_query($con, $updatequery);

    if (!$res) {

        echo "<script>
                 document.addEventListener('DOMContentLoaded', function() {
                 Swal.fire({
                 title: 'Error!',
                 text: 'Failed to Update Service',
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
                text: 'Service Updated Successfully ',
                icon: 'success',
            }).then(() => {
                window.location.href = 'servicetable.php'; // Redirect to the table page after OK
            });
        });
        </script>";
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
        <div class="form-title">Service Update</div>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="input-group">
                <input type="text" id="textbox" name="servicename" placeholder="" value="<?php echo $servicename; ?>">
                <label for="textbox">Service Name</label>
            </div>

            <div class="input-group">
                <textarea id="textarea" name="message" placeholder=" "><?php echo $message; ?></textarea>
                <label for="textarea">Service Description</label>
            </div>

            <div class="input-group">
                <input type="file" id="file" name="file" class="file-input" multiple value="<?php echo $imge; ?>">
                <p><?php echo $imge; ?></p>
            </div>

            <button type="submit" name="update">update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
</body>

</html>