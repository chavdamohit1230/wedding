<?php
include("connection.php");
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

            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM confbooking";
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
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>