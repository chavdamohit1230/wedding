<?php
include("connection/connection.php");

// Get the appointment ID from URL
$mm = $_GET['id'] ?? '';

// Check in `appoinmentrequest` table first
$query1 = "SELECT * FROM vanuerequest WHERE vanueid='$mm'";
$result1 = mysqli_query($con, $query1);
$row = mysqli_fetch_assoc($result1);

// If not found in `appoinmentrequest`, check in `bookedappoinment`
if (!$row) {
    $query2 = "SELECT * FROM vanuebooked WHERE vanueid='$mm'";
    $result2 = mysqli_query($con, $query2);
    $row = mysqli_fetch_assoc($result2);
    $table = "vanuebooked"; // Set table name
} else {
    $table = "vanuerequest"; // Set table name
}

if (isset($_POST['update'])) {
    $vanueid = $_POST["vanueid"]; // ✅ Fix: Fetching vanueid from form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $fun_date = $_POST["fun_date"];
    $vanuename = $_POST["vanuename"];
    $price = $_POST["price"];
    $location = $_POST["location"];
    $guestno = $_POST["guestno"];

    // Corrected SQL Query to update the correct table
    $updatequery = "UPDATE $table 
        SET username=?, 
            email=?, 
            phone=?, 
            fun_date=?, 
            vanuename=?, 
            price=?, 
            location=?, 
            guestno=? 
        WHERE vanueid=?";

    $stmt = mysqli_prepare($con, $updatequery);
    mysqli_stmt_bind_param($stmt, "ssssssssi", $username, $email, $phone, $fun_date, $vanuename, $price, $location, $guestno, $vanueid);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Record updated successfully in $table!');
                window.location.href='bookings.php'; // Redirect to the bookings page
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
        .form-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            height: auto;
            overflow-y: auto;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* ✅ फॉर्म को सेंटर में रखने के लिए */
            margin: 0;
            padding: 20px;
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
        <div class="form-title">Update your vanue</div>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="input-group">
                <input type="text" id="textbox" name="vanueid" placeholder=""
                    value="<?php echo !empty($row['vanueid']) ? $row['vanueid'] : '' ?>">
                <label for="textbox">vanueid</label>
            </div>

            <div class="input-group">
                <input type="text" id="textbox" name="username" placeholder=""
                    value="<?php echo !empty($row['username']) ? $row['username'] : '' ?>">
                <label for="textbox">username</label>
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
                <input type="date" id="textbox" name="fun_date" placeholder=""
                    value="<?php echo !empty($row['fun_date']) ? $row['fun_date'] : '' ?>">
                <label for="textbox">fun_date</label>
            </div>
            <div class="input-group">
                <input type="text" id="textbox" name="vanuename" placeholder=""
                    value="<?php echo !empty($row['vanuename']) ? $row['vanuename'] : '' ?>">
                <label for="textbox">vanuename</label>
            </div>

            <div class="input-group">
                <input type="text" id="textbox" name="price" placeholder="" accept=""
                    value="<?php echo !empty($row['price']) ? $row['price'] : '' ?>">
                <label for="textbox">price</label>
            </div>

            <div class="input-group">
                <input type="text" id="textbox" name="location" placeholder="" accept=""
                    value="<?php echo !empty($row['location']) ? $row['location'] : '' ?>">
                <label for="textbox">location</label>
            </div>
            <div class="input-group">
                <input type="text" id="textbox" name="guestno" placeholder="" accept=""
                    value="<?php echo !empty($row['guestno']) ? $row['guestno'] : '' ?>">
                <label for="textbox">guestno</label>
            </div>

            <button type="submit" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
</body>

</html>