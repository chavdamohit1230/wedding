<?php
session_start();
include("connection/connection.php");

if (!isset($_SESSION["useremail"])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION["useremail"];

// **User details fetch karna**
$query = "SELECT * FROM userregistration WHERE email='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["logout"])) {
    session_destroy();
    header("location:index.php");
    exit();
}

$user_id = $_SESSION["useremail"];

// **First Table: `appoinmentrequest` fetch**
$requesttb = "SELECT * FROM appoinmentrequest WHERE email='$user_id'";
$query1 = mysqli_query($con, $requesttb);

$requestdata = [];
if ($query1 && mysqli_num_rows($query1) > 0) {
    while ($data = mysqli_fetch_assoc($query1)) {
        $requestdata[] = $data;
    }
}

// **Second Table: `bookedappoinment` fetch**
$approve = "SELECT * FROM bookedappoinment WHERE email='$user_id'";
$query2 = mysqli_query($con, $approve);
$approvedData = [];

if ($query2 && mysqli_num_rows($query2) > 0) {
    while ($data = mysqli_fetch_assoc($query2)) {
        $approvedData[] = $data;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            width: 100%;
            background: #f8f9fa;
        }

        .profile-container {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .sidebar {
            width: 30%;
            background-color: #631549;
            color: white;
            padding: 40px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .sidebar h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            font-size: 18px;
            font-weight: bold;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .edit-btn,
        .logout-btn {
            background: #9b2172;
            color: white;
        }

        .content-container {
            width: 70%;
            background: white;
            padding: 40px;
            overflow-y: auto;
        }

        table {
            width: 100%;
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

        .icon-btn {
            display: inline-block;
            padding: 8px;
            font-size: 16px;
            margin: 2px;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <div class="sidebar">
            <h2>Profile Name: <?php echo $row['username']; ?></h2>
            <div class="info-box">Email: <?php echo $row['email']; ?></div>
            <div class="info-box">City: <?php echo $row['city']; ?></div>
            <div class="info-box">Phone: +91 <?php echo $row['phone']; ?></div>
            <div class="button-container">
                <form action="" method="POST">
                    <button class="btn edit-btn">Edit Profile</button>
                    <button type="submit" name="logout" class="btn logout-btn">Logout</button>
                </form>
            </div>
        </div>

        <div class="content-container">
            <table>
                <thead>
                    <tr>
                        <th>Appoinment ID</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Details</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($requestdata)) {
                        foreach ($requestdata as $row) { ?>
                            <tr>
                                <td><?php echo $row['appoinment_id']; ?></td>
                                <td><?php echo $row['appoinment_user']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['state']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['additional_detail']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
                                    <button class="icon-btn edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="icon-btn delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php }
                    } elseif (!empty($approvedData)) {
                        foreach ($approvedData as $row) { ?>
                            <tr>
                                <td><?php echo $row['appoinment_id']; ?></td>
                                <td><?php echo $row['appoinment_user']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['state']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['additional_detail']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
                                    <button class="icon-btn edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="icon-btn delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="10" style="text-align:center; color:red;">
                                No appointment requests or bookings found.
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>