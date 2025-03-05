<?php
session_start();
include("connection/connection.php");

if (!isset($_SESSION["useremail"])) {
    die("Unauthorized access.");
}

$email = $_SESSION["useremail"];

// Try fetching from bookingrequest first
$query = "SELECT * FROM bookingrequest WHERE user_email = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$bookings = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bookings[] = $row;
}

// If no data found in bookingrequest, fetch from confbooking
if (empty($bookings)) {
    $query = "SELECT * FROM confbooking WHERE user_email = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        $bookings[] = $row;
    }
}

// Handling Delete Request (via GET method)
if (isset($_GET["delete"])) {
    $bookingId = $_GET["delete"];

    // Check if the booking exists in bookingrequest
    $checkQuery = "SELECT * FROM bookingrequest WHERE booking_id = ?";
    $stmt = mysqli_prepare($con, $checkQuery);
    mysqli_stmt_bind_param($stmt, "i", $bookingId);
    mysqli_stmt_execute($stmt);
    $checkResult = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($checkResult) > 0) {
        $deleteQuery = "DELETE FROM bookingrequest WHERE booking_id = ?";
    } else {
        $deleteQuery = "DELETE FROM confbooking WHERE booking_id = ?";
    }

    $stmt = mysqli_prepare($con, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $bookingId);
    mysqli_stmt_execute($stmt);

    header("Location: " . $_SERVER['PHP_SELF']); // Refresh the page after deletion
    exit;
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

        .update {
            background-color: #007BFF;
        }

        .delete {
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
            <?php if (empty($bookings)): ?>
                <tr>
                    <td colspan="11">No booking found.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($bookings as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['booking_id']); ?></td>
                        <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['user_email']); ?></td>
                        <td><?php echo htmlspecialchars($row['user_phone']); ?></td>
                        <td><?php echo htmlspecialchars($row['booking_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['fun_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['guest_no']); ?></td>
                        <td><?php echo htmlspecialchars($row['booking_price']); ?></td>
                        <td><?php echo htmlspecialchars($row['additional_detail']); ?></td>
                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                        <td>
                            <!-- Update Button (Passes ID to update page) -->
                            <a href="update_booking.php?id=<?php echo urlencode($row['booking_id']); ?>">
                                <button class="action-btn update" type="button">Update</button>
                            </a>

                            <!-- Delete Button (Passes ID via GET) -->
                            <a href="?delete=<?php echo urlencode($row['booking_id']); ?>"
                                onclick="return confirm('Are you sure you want to delete this booking?');">
                                <button class="action-btn delete" type="button">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>