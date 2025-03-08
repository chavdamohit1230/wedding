<?php
include("connection.php");

if (isset($_POST["confirm"])) {
    $vanueid = $_POST["confirm"];

    $query1 = "SELECT * FROM vanuerequest WHERE vanueid = '$vanueid'";
    $query2 = mysqli_query($con, $query1);

    if ($row = mysqli_fetch_assoc($query2)) {
        $vanueid = $row["vanueid"];
        $username = $row["username"];
        $email = $row["email"];
        $phone = $row["phone"];
        $fun_date = $row["fun_date"];
        $vanuename = $row["vanuename"];
        $price = $row["price"];
        $location = $row["location"];
        $guestno = $row["guestno"];


        $insert = "INSERT INTO vanuebooked
 
                   (vanueid, username, email, phone, fun_date, vanuename, price, location,guestno, status) 
                   VALUES 
                   ('$vanueid', '$username', '$email', '$phone', '$fun_date', '$vanuename', '$price', '$location','$guestno', 'Approve')";

        $result = mysqli_query($con, $insert);

        if ($result) {

            $delete_query = "DELETE FROM vanuerequest WHERE vanueid = '$vanueid'";
            mysqli_query($con, $delete_query);

            echo "Appointment Confirmed & Moved to Booking!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Appointment ID Not Found!";
    }
}
if (isset($_POST["reject"])) {
    $vanueid = $_POST["reject"];
    $delete_query = "DELETE FROM vanuerequest WHERE vanueid = '$vanueid'";

    if (mysqli_query($con, $delete_query)) {
        echo "<script>alert('Appointment Rejected & Deleted!'); window.location.href='" . $_SERVER['PHP_SELF'] . "';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
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
                <th style="width: 10%">vanueid</th>
                <th style="width: 15%">user_name</th>
                <th style="width: 20%">email</th>
                <th style="width: 15%">phone</th>
                <th style="width: 10%">fun_date</th>
                <th style="width: 10%">vanuename</th>
                <th style="width: 10%">price</th>
                <th style="width: 10%">location</th>
                <th style="width: 10%">guestno</th>
                <th style="width: 10%">status</th>
                <th style="width: 10%">Actions</th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <?php

                $query = "select * from vanuerequest";

                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <tr>
                        <td><?php echo $row['vanueid']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['fun_date']; ?></td>
                        <td><?php echo $row['vanuename']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['guestno']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>

                            <button class="action-btn confirm" name="confirm" type="submit"
                                value="<?php echo $row['vanueid']; ?>">Confirm</button>

                            <form action="" method="POST" style="display:inline;">
                                <button class="action-btn reject" name="reject" type="submit"
                                    value="<?php echo htmlspecialchars($row['vanueid']); ?>"
                                    onclick="return confirm('Are you sure you want to reject this appointment?');">Reject</button>
                            </form>

                        </td>
                    </tr>
                <?php } ?>
            </form>
        </tbody>
    </table>
</body>

</html>