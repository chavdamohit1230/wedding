<?php
include("connection.php");


if (isset($_POST["delete"])) {
    $studiono = $_POST["delete"];

    echo $studiono;


    $deleteQuery = "DELETE FROM gallarytable WHERE studiono = '$studiono'";

    if (mysqli_query($con, $deleteQuery)) {

        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Deleted!',
                text: 'Venue deleted successfully',
                icon: 'success',
                
            }).then(() => {
                window.location.href = 'table.php'; // Refresh page after OK
            });
        });
    </script>";
    } else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Error!',
                text: 'Error deleting venue',
                icon: 'error',
                confirmButtonText: 'OK'
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
    <title>Wedding Table</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        table {
            width: 100%;
            max-width: 1100px;
            margin-top: 12px;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            table-layout: fixed;

        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
        }

        th {
            background-color: rgb(57, 17, 44);
            color: white;
            letter-spacing: 1.5px;
            text-align: center;

        }

        .table-img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 5px;
            display: block;
            position: relative;
            left: 40%;


        }

        .tools {
            display: flex;
            gap: 8px;
        }

        button {
            border: none;
            padding: 6px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
        }

        .edit {
            background-color: #17a2b8;
            color: white;
            margin-left: 40px;

        }

        .delete {
            background-color: #dc3545;
            color: white;
        }

        .view {
            background-color: #ffc107;
            color: white;
        }

        .add_vanue_container {

            height: 60px;
            width: 100%;
            align-items: center;
            display: flex;

        }


        .add_vanue_button {
            height: 40px;
            width: 10%;
            background-color: rgb(57, 17, 44);
            color: white;
            position: relative;
            margin-left: 83%;
        }

        a {
            height: 10px;
            width: 100%;
            */ position: relative;
            /* left: 85%; */

            text-decoration: none;
        }
    </style>

</head>

<body>

    <div class="add_vanue_container">

        <a href="gallerypic.php">
            <button type="submit" class="add_vanue_button">
                <i class="fa-solid fa-plus"></i>&nbsp ADD Venue
            </button>
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>studiono</th>
                <th>studio_name</th>
                <th>Travel</th>
                <th>Team-size</th>
                <th>Package</th>
                <th>Image</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $rr = "select * from gallarytable ";

            $res1 = mysqli_query($con, $rr);


            while ($row = mysqli_fetch_assoc($res1)) {

                ?>
                <tr>
                    <td><?php echo $row['studiono'] ?></td>
                    <td><?php echo $row['studioname'] ?></td>
                    <td><?php echo $row['travel'] ?></td>
                    <td><?php echo $row['teamsize'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><img src="images/<?php echo $row['studioimage'] ?>" alt="Wedding" class="table-img"></td>
                    <td>
                        <form action="" method="POST">
                            <div class="tools">
                                <a href="gallerypic.php?studioname=<?php echo $row['studioname']; ?>"><button type="submit"
                                        class="edit" name="edit"><i class=" fa-solid fa-pen"></i></button></a>
                                <button type="submit" class="delete" name="delete"
                                    value="<?php echo $row['studiono']; ?>"><i class="fa-solid fa-trash"></i></button>
                                <button class="view"><i class="fa-solid fa-eye"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>

</html>