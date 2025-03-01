<?php
include("connection/connection.php");

// Get the appointment ID from URL
$mm = $_GET['edit_id'] ?? '';

// Check in `appoinmentrequest` table first
$query1 = "SELECT * FROM appoinmentrequest WHERE appoinment_id='$mm'";
$result1 = mysqli_query($con, $query1);
$row = mysqli_fetch_assoc($result1);

// If not found in `appoinmentrequest`, check in `bookedappoinment`
if (!$row) {
    $query2 = "SELECT * FROM bookedappoinment WHERE appoinment_id='$mm'";
    $result2 = mysqli_query($con, $query2);
    $row = mysqli_fetch_assoc($result2);
    $table = "bookedappoinment"; // Set table name
} else {
    $table = "appoinmentrequest"; // Set table name
}

// Update logic
if (isset($_POST['update'])) {
    $appoinment_id = $_POST["appoinmentid"];
    $appoinment_user = $_POST["appoinment_user"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $additional_detail = $_POST["additional_detail"];

    // Corrected SQL Query to update the correct table
    $updatequery = "UPDATE $table 
        SET appoinment_user='$appoinment_user', 
            email='$email', 
            phone='$phone', 
            date='$date', 
            state='$state', 
            city='$city', 
            additional_detail='$additional_detail' 
        WHERE appoinment_id='$appoinment_id'";

    // Execute Query and Show Result
    if (mysqli_query($con, $updatequery)) {
        echo "<script>
                alert('Record updated successfully in $table!');
                window.location.href='index.php'; // Redirect to the appropriate page
              </script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
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
                <input type="text" id="textbox" name="appoinmentid" placeholder=""
                    value="<?php echo !empty($row['appoinment_id']) ? $row['appoinment_id'] : '' ?>">
                <label for="textbox">appoinment_id</label>
            </div>

            <div class="input-group">
                <input type="text" id="textbox" name="appoinment_user" placeholder=""
                    value="<?php echo !empty($row['appoinment_user']) ? $row['appoinment_user'] : '' ?>">
                <label for="textbox">appoinment_user</label>
            </div>

            <div class="input-group">
                <input type="email" id="textbox" name="email" placeholder=""
                    value="<?php echo !empty($row['email']) ? $row['email'] : '' ?>">
                <label for="textbox">email</label>
            </div>
            <div class="input-group">
                <input type="number" id="textbox" name="phone" placeholder=""
                    value="<?php echo !empty($row['phone']) ? $row['phone'] : '' ?>">
                <label for="textbox">phone</label>
            </div>
            <div class="input-group">
                <input type="date" id="textbox" name="date" placeholder=""
                    value="<?php echo !empty($row['date']) ? $row['date'] : '' ?>">
                <label for="textbox">date</label>
            </div>
            <div class="input-group">
                <input type="text" id="textbox" name="state" placeholder=""
                    value="<?php echo !empty($row['state']) ? $row['state'] : '' ?>">
                <label for="textbox">state</label>
            </div>

            <div class="input-group">
                <input type="text" id="textbox" name="city" placeholder="" accept=""
                    value="<?php echo !empty($row['city']) ? $row['city'] : '' ?>">
                <label for="textbox">city</label>
            </div>

            <div class="input-group">
                <textarea id="textbox" name="additional_detail"
                    placeholder=""><?php echo !empty($row['additional_detail']) ? $row['additional_detail'] : '' ?></textarea>
                <label for="textbox">additional_detail</label>
            </div>

            <button type="submit" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
</body>

</html>