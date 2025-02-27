<?php
include("connection.php");

if (isset($_POST["confirm"])) {
    $appointment_id = $_POST["confirm"];

    $query1 = "SELECT * FROM appoinmentrequest WHERE appoinment_id = '$appointment_id'";
    $query2 = mysqli_query($con, $query1);

    if ($row = mysqli_fetch_assoc($query2)) {
        $appoinment = $row["appoinment_id"];
        $name = $row["appoinment_user"];
        $email = $row["email"];
        $phone = $row["phone"];
        $date = $row["date"];
        $state = $row["state"];
        $city = $row["city"];
        $ad_detail = $row["additional_detail"];

        $insert = "INSERT INTO bookedappoinment 
                   (appoinment_id, appoinment_user, email, phone, date, state, city, additional_detail, status) 
                   VALUES 
                   ('$appoinment', '$name', '$email', '$phone', '$date', '$state', '$city', '$ad_detail', 'Approve')";

        $result = mysqli_query($con, $insert);

        if ($result) {

            $delete_query = "DELETE FROM appoinmentrequest WHERE appoinment_id = '$appointment_id'";
            mysqli_query($con, $delete_query);

            echo "Appointment Confirmed & Moved to Booking!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Appointment ID Not Found!";
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

        .add_service_container {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 15px;
        }

        .add_service_button {
            background-color: #3D0124;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        table {
            width: 90%;
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
            text-align: center;
        }

        td img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            margin: 5px;
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
                <th style="width: 10%">appoi_id</th>
                <th style="width: 15%">appoi_user</th>
                <th style="width: 20%">email</th>
                <th style="width: 15%">phone</th>
                <th style="width: 10%">date</th>
                <th style="width: 10%">state</th>
                <th style="width: 10%">city</th>
                <th style="width: 10%">status</th>
                <th style="width: 10%">Actions</th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <?php

                $query = "select * from appoinmentrequest";

                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <tr>
                        <td><?php echo $row['appoinment_id']; ?></td>
                        <td><?php echo $row['appoinment_user']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>

                            <button class="action-btn confirm" name="confirm" type="submit"
                                value="<?php echo $row['appoinment_id']; ?>">Confirm</button>
                            <button class="action-btn reject" type="submit" name="reject">Reject</button>

                        </td>
                    </tr>
                <?php } ?>
            </form>
        </tbody>
    </table>
</body>

</html>