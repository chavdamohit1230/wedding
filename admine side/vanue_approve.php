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
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <?php

                $query = "select * from vanuebooked";

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


                        </td>
                    </tr>
                <?php } ?>
            </form>
        </tbody>
    </table>
</body>

</html>