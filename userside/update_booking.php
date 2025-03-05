<?php
include("connection/connection.php");

$mm = $_GET["id"] ?? '';

// Validate ID
if (empty($mm)) {
    die("Invalid request: No appointment ID provided.");
}

// Prevent SQL Injection
$mm = mysqli_real_escape_string($con, $mm);

// Check in `bookingrequest` table first
$query1 = "SELECT * FROM bookingrequest WHERE booking_id='$mm'";
$result1 = mysqli_query($con, $query1);
$row = mysqli_fetch_assoc($result1);

if (!$row) {
    $query2 = "SELECT * FROM confbooking WHERE booking_id='$mm'";
    $result2 = mysqli_query($con, $query2);
    $row = mysqli_fetch_assoc($result2);
    $table = "confbooking";
} else {
    $table = "bookingrequest";
}

// Update logic
if (isset($_POST['update'])) {
    // Retrieve and sanitize form data
    $booking_id = isset($_POST["booking_id"]) ? mysqli_real_escape_string($con, $_POST["booking_id"]) : '';
    $user_name = isset($_POST["user_name"]) ? mysqli_real_escape_string($con, $_POST["user_name"]) : '';
    $user_email = isset($_POST["user_email"]) ? mysqli_real_escape_string($con, $_POST["user_email"]) : '';
    $user_phone = isset($_POST["user_phone"]) ? mysqli_real_escape_string($con, $_POST["user_phone"]) : '';
    $booking_name = isset($_POST["booking_name"]) ? mysqli_real_escape_string($con, $_POST["booking_name"]) : '';
    $fun_date = isset($_POST["fun_date"]) ? mysqli_real_escape_string($con, $_POST["fun_date"]) : '';
    $guest_no = isset($_POST["guest_no"]) ? mysqli_real_escape_string($con, $_POST["guest_no"]) : '';
    $booking_price = isset($_POST["booking_price"]) ? mysqli_real_escape_string($con, $_POST["booking_price"]) : '';
    $additional_detail = isset($_POST["additional_detail"]) ? mysqli_real_escape_string($con, $_POST["additional_detail"]) : '';

    // Update Query
    $updatequery = "UPDATE $table 
        SET user_name='$user_name', 
            user_email='$user_email', 
            user_phone='$user_phone', 
            booking_name='$booking_name',
            fun_date='$fun_date', 
            guest_no='$guest_no', 
            booking_price='$booking_price', 
            additional_detail='$additional_detail' 
        WHERE booking_id='$booking_id'";

    // Execute Query
    if (mysqli_query($con, $updatequery)) {
        echo "<script>
                alert('Record updated successfully in $table!');
                window.location.href='profile.php';
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
            min-height: 100vh;
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
        textarea {
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
            height: 150px;
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
            background-color: #5A013A;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-title">Service Add</div>
        <form method="POST">
            <div class="input-group">
                <input type="text" id="user_id" name="booking_id"
                    value="<?php echo !empty($row['booking_id']) ? $row['booking_id'] : '' ?>" placeholder=" ">
                <label for="user_id">Booking ID</label>
            </div>

            <div class="input-group">
                <input type="text" id="user" name="user_name"
                    value="<?php echo !empty($row['user_name']) ? $row['user_name'] : '' ?>" placeholder=" ">
                <label for="user">User Name</label>
            </div>

            <div class="input-group">
                <input type="email" id="email" name="user_email"
                    value="<?php echo !empty($row['user_email']) ? $row['user_email'] : '' ?>" placeholder=" ">
                <label for="email">User Email</label>
            </div>

            <div class="input-group">
                <input type="number" id="phone" name="user_phone"
                    value="<?php echo !empty($row['user_phone']) ? $row['user_phone'] : '' ?>" placeholder=" ">
                <label for="phone">User Phone</label>
            </div>

            <div class="input-group">
                <input type="text" id="booking_name" name="booking_name"
                    value="<?php echo !empty($row['booking_name']) ? $row['booking_name'] : '' ?>" placeholder=" ">
                <label for="booking_name">Booking Name</label>
            </div>

            <div class="input-group">
                <input type="date" id="date" name="fun_date"
                    value="<?php echo !empty($row['fun_date']) ? $row['fun_date'] : '' ?>" placeholder=" ">
                <label for="date">Fun Date</label>
            </div>

            <div class="input-group">
                <input type="number" id="guest_no" name="guest_no"
                    value="<?php echo !empty($row['guest_no']) ? $row['guest_no'] : '' ?>" placeholder=" ">
                <label for="guest_no">Guest No</label>
            </div>

            <div class="input-group">
                <input type="text" id="booking_price" name="booking_price"
                    value="<?php echo !empty($row['booking_price']) ? $row['booking_price'] : '' ?>" placeholder=" ">
                <label for="booking_price">Booking Price</label>
            </div>
            <!-- 
            <div class="input-group">
                <textarea id="additional_detail" name="additional_detail" value=""
                    placeholder=" "><?php echo !empty($row['additional_detail']) ? $row['additional_detail'] : '' ?></textarea>
                <label for="additional_detail">Additional Detail</label>
            </div> -->

            <button type="submit" type="submit" name="update">Submit</button>
        </form>
    </div>
</body>

</html>