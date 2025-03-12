<?php
include("connection.php");

if (isset($_POST["delete"])) {
    $vanueid = $_POST["delete"];
    $query = "DELETE FROM vanue WHERE vanueid='$vanueid'";
    $result = mysqli_query($con, $query);

    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: '" . ($result ? "Success!" : "Error!") . "',
            text: '" . ($result ? "Service Deleted Successfully" : "Failed to delete Service") . "',
            icon: '" . ($result ? "success" : "error") . "'
        }).then(() => {
            window.location.href = 'servicetable.php';
        });
    });
    </script>";
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
        }

        .add_service_container {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }

        .add_service_button {
            background-color: #3D0124;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 15px;
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3D0124;
            color: white;
        }

        td img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
            margin: 2px;
        }

        .icon-btn {
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 8px;
            border-radius: 5px;
            margin: 2px;
        }

        .edit {
            background-color: #17A2B8;
            color: white;
        }

        .delete {
            background-color: #DC3545;
            color: white;
        }

        .view {
            background-color: #FFC107;
            color: white;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</head>

<body>
    <div class="add_service_container">
        <a href="subservice-add.php">
            <button class="add_service_button">
                <i class="fa-solid fa-plus"></i> Add Service
            </button>
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>vanueID</th>
                <th>Vanue_Name</th>
                <th>Location</th>
                <th>Price</th>
                <th>rating</th>
                <th>Vanue_Images</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM ";
            $res = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><?php echo $row['vanueid']; ?></td>
                    <td><?php echo $row['vanuename']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['rating']; ?></td>

                    <!-- Multiple images display -->
                    <td>
                        <?php
                        $images = !empty($row['vanueimages']) ? explode(",", $row['vanueimages']) : ['default.jpg'];
                        foreach ($images as $img) {
                            echo '<img src="vanueimages/' . trim($img) . '" alt="Service Image">';
                        }
                        ?>
                    </td>

                    <td>
                        <form action="" method="POST">
                            <button class="icon-btn edit" type="button"
                                onclick="window.location.href='subserviceupdate.php?edit=<?php echo urlencode($row['subserviceid']); ?>'">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>

                            <button class="icon-btn delete" name="delete" value="<?php echo $row['vanueid']; ?>">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <button class="icon-btn view">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>