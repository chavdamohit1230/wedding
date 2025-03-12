<?php
include("connection.php");

if (isset($_POST["delete"])) {
    $userid = $_POST["delete"];

    $deleteQuery = "DELETE FROM userregistration WHERE userid = '$userid'";

    if (mysqli_query($con, $deleteQuery)) {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Deleted!',
                text: 'User Delete successfully',
                icon: 'success',
            }).then(() => {
                window.location.href = 'table.php';
            });
        });
        </script>";
    } else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Error!',
                text: 'Error deleting User',
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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .add_vanue_container {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }

        .add_vanue_button {
            background-color: rgb(57, 17, 44);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        table {
            width: 100%;
            max-width: 1100px;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            table-layout: fixed;
            position: relative;
            top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        th {
            background-color: rgb(57, 17, 44);
            color: white;
            letter-spacing: 1.5px;
        }

        .image-container {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
            gap: 5px;
            max-width: 200px;
        }

        .image-container img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }

        .tools {
            display: flex;
            gap: 8px;
            justify-content: center;
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
        }

        .delete {
            background-color: #dc3545;
            color: white;
        }

        .view {
            background-color: #ffc107;
            color: white;
        }
    </style>
</head>

<body>


    <table>
        <thead>
            <tr>
                <th>User_id</th>
                <th>User_Name</th>
                <th>User_emial</th>
                <th>City</th>
                <th>Phone</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM userregistration";
            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['phone']; ?></td>

                    <td>
                        <div class="tools">

                            <form action="" method="POST" style="display:inline;">
                                <button type="submit" class="delete" name="delete" value="<?php echo $row['userid']; ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>