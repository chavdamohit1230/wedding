<?php
session_start();
include("connection/connection.php");

// Check if user is logged in
if (!isset($_SESSION["useremail"])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION["useremail"];

// Fetch user details
$query = "SELECT * FROM userregistration WHERE email='$email'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);

// Logout Logic
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Fetch Appointments
$requestQuery = "SELECT * FROM appoinmentrequest WHERE email='$email'";
$bookedQuery = "SELECT * FROM bookedappoinment WHERE email='$email'";

$requestResult = mysqli_query($con, $requestQuery);
$bookedResult = mysqli_query($con, $bookedQuery);

$requests = mysqli_fetch_all($requestResult, MYSQLI_ASSOC);
$bookings = mysqli_fetch_all($bookedResult, MYSQLI_ASSOC);

// DELETE Appointment Logic (GET Method)
if (isset($_GET["delete_id"])) {
    $delete_id = $_GET["delete_id"];

    // Check if appointment exists in pending requests
    $checkRequest = "SELECT * FROM appoinmentrequest WHERE appoinment_id='$delete_id'";
    $result1 = mysqli_query($con, $checkRequest);

    if (mysqli_num_rows($result1) > 0) {
        mysqli_query($con, "DELETE FROM appoinmentrequest WHERE appoinment_id='$delete_id'");
        echo "<script>
                Swal.fire('Deleted!', 'Appointment deleted from pending requests.', 'success')
                .then(() => { window.location.href='index.php'; });
              </script>";
        exit();
    }

    // Check if appointment exists in booked records
    $checkBooked = "SELECT * FROM bookedappoinment WHERE appoinment_id='$delete_id'";
    $result2 = mysqli_query($con, $checkBooked);

    if (mysqli_num_rows($result2) > 0) {
        mysqli_query($con, "DELETE FROM bookedappoinment WHERE appoinment_id='$delete_id'");
        echo "<script>
                Swal.fire('Deleted!', 'Appointment deleted from booked records.', 'success')
                .then(() => { window.location.href='index.php'; });
              </script>";
        exit();
    }

    echo "<script>
            Swal.fire('Error!', 'No matching appointment found.', 'error');
          </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background: #f8f9fa;
            display: flex;
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
            text-align: center;
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

        .actions {
            display: flex;
            justify-content: center;
            /* Center align buttons */
            align-items: center;
            gap: 10px;
            /* Space between edit and delete */
        }

        .edit,
        .delete {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
        }

        .edit {
            background: #007bff;
            color: white;
            border: 1px solid #007bff;
        }

        .edit:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        .delete {
            background: #dc3545;
            color: white;
            border: 1px solid #dc3545;
        }

        .delete:hover {
            background: #a71d2a;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Profile Name: <?php echo htmlspecialchars($user['username']); ?></h2>
        <div class="info-box">Email: <?php echo htmlspecialchars($user['email']); ?></div>
        <div class="info-box">City: <?php echo htmlspecialchars($user['city']); ?></div>
        <div class="info-box">Phone: +91 <?php echo htmlspecialchars($user['phone']); ?></div>
        <div class="button-container">
            <form method="POST">
                <button class="btn edit-btn">Edit Profile</button>
                <button type="submit" name="logout" class="btn logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <div class="content-container">
        <?php if (!empty($requests) || !empty($bookings)) { ?>
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
                    <?php foreach (array_merge($requests, $bookings) as $row) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['appoinment_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['appoinment_user']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td><?php echo htmlspecialchars($row['date']); ?></td>
                            <td><?php echo htmlspecialchars($row['state']); ?></td>
                            <td><?php echo htmlspecialchars($row['city']); ?></td>
                            <td><?php echo htmlspecialchars($row['additional_detail']); ?></td>
                            <td><?php echo htmlspecialchars($row['status']); ?></td>
                            <td class="actions">
                                <a href="profile_edit.php?edit_id=<?php echo $row['appoinment_id']; ?>" class="edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="?delete_id=<?php echo $row['appoinment_id']; ?>" class="delete">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</body>

</html>