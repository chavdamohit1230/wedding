<?php
include("connection.php");

// Confirm Appointment Logic
if (isset($_POST["confirm"])) {
    $sbooking_id = mysqli_real_escape_string($con, $_POST["confirm"]);

    $query1 = "SELECT * FROM bookingrequest WHERE booking_id = '$sbooking_id'";
    $query2 = mysqli_query($con, $query1);

    if ($row = mysqli_fetch_assoc($query2)) {
        $booking_id = $row["booking_id"];
        $user_name = $row["user_name"];
        $user_email = $row["user_email"];
        $user_phone = $row["user_phone"];
        $booking_name = $row["booking_name"];
        $fun_Date = $row["Fun_date"];
        $guest_no = $row["guest_no"];
        $booking_price = $row["booking_price"];
        $ad_detail = $row["additional_detail"];

        $insert = "INSERT INTO confbooking VALUES 
                   ('$booking_id','$user_name', '$user_email', '$user_phone', '$booking_name', '$fun_Date', '$guest_no', '$booking_price','$ad_detail','Approve')";
        $result = mysqli_query($con, $insert);

        if ($result) {
            $delete_query = "DELETE FROM bookingrequest WHERE booking_id = '$booking_id'";
            mysqli_query($con, $delete_query);
            echo "<script>alert('Appointment Confirmed & Moved to Booking!'); window.location.href='yourpage.php';</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Appointment ID Not Found!";
    }
}

// Reject Appointment Logic
if (isset($_POST["reject"])) {
    $rbooking_id = mysqli_real_escape_string($con, $_POST["reject"]);

    $delete_query = "DELETE FROM bookingrequest WHERE booking_id = '$rbooking_id'";
    if (mysqli_query($con, $delete_query)) {
        echo "<script>alert('Appointment Rejected Successfully!'); window.location.href='';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        table {
            width: 100%;
            max-width: 1200px;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            table-layout: fixed;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            word-wrap: break-word;
        }

        th {
            background-color: #3D0124;
            color: white;
        }

        .action-btn {
            border: none;
            cursor: pointer;
            font-size: 14px;
            padding: 8px 15px;
            border-radius: 5px;
            margin: 2px;
            color: white;
        }

        .confirm {
            background-color: #28A745;
        }

        .reject {
            background-color: #DC3545;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Booking Name</th>
                <th>Fun Date</th>
                <th>Guest No</th>
                <th>Price</th>
                <th>Details</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM bookingrequest";
            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['booking_id']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['user_phone']; ?></td>
                    <td><?php echo $row['booking_name']; ?></td>
                    <td><?php echo $row['fun_date']; ?></td>
                    <td><?php echo $row['guest_no']; ?></td>
                    <td><?php echo $row['booking_price']; ?></td>
                    <td><?php echo $row['additional_detail']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <form action="" method="POST" style="display:inline;">
                            <button class="action-btn confirm" name="confirm" type="submit"
                                value="<?php echo $row['booking_id']; ?>">Confirm</button>
                        </form>
                        <form action="" method="POST" style="display:inline;">
                            <button class="action-btn reject" name="reject" type="submit"
                                value="<?php echo $row['booking_id']; ?>">Reject</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>