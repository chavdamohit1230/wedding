<?php
include("connection/connection.php");
session_start();

if (!isset($_SESSION["useremail"])) {
    die("Unauthorized access.");
}

$email = $_SESSION["useremail"];

// पहले appoinmentrequest से डेटा लाने की कोशिश करें
$query = "SELECT * FROM appoinmentrequest WHERE email = '$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

// अगर appoinmentrequest में डेटा नहीं है, तो bookedappoinment से डेटा लाएं
if (!$row) {
    $query1 = "SELECT * FROM bookedappoinment WHERE email = '$email'";
    $result1 = mysqli_query($con, $query1);
    $row = mysqli_fetch_assoc($result1);
}

// 🔹 अगर डिलीट का बटन प्रेस किया गया हो तो
if (isset($_GET["delete"])) {
    $appoinmentId = $_GET["delete"];

    // पहले चेक करें कि डेटा किस टेबल में है
    $checkQuery = "SELECT * FROM appoinmentrequest WHERE appoinment_id = '$appoinmentId'";
    $checkResult = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $deleteQuery = "DELETE FROM appoinmentrequest WHERE appoinment_id = '$appoinmentId'";
    } else {
        $deleteQuery = "DELETE FROM bookedappoinment WHERE appoinment_id = '$appoinmentId'";
    }

    mysqli_query($con, $deleteQuery);

    // ✅ पेज को रीफ्रेश करें, ताकि अपडेट दिखे
    header("Location: " . $_SERVER['PHP_SELF']);
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
                <th>appoinment_ID</th>
                <th>appoinment_user</th>
                <th>email</th>
                <th>phone</th>
                <th>date</th>
                <th>state</th>
                <th>city</th>
                <th>additional_Detail</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($row)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row["appoinment_id"]); ?></td>
                    <td><?php echo htmlspecialchars($row["appoinment_user"]); ?></td>
                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                    <td><?php echo htmlspecialchars($row["phone"]); ?></td>
                    <td><?php echo htmlspecialchars($row["date"]); ?></td>
                    <td><?php echo htmlspecialchars($row["state"]); ?></td>
                    <td><?php echo htmlspecialchars($row["city"]); ?></td>
                    <td><?php echo htmlspecialchars($row["additional_detail"]); ?></td>
                    <td><?php echo htmlspecialchars($row["status"]); ?></td>
                    <td>
                        <a href="profile_edit.php?id=<?php echo urlencode($row['appoinment_id']); ?>">
                            <button class="action-btn update" type="button">Update</button>
                        </a>
                        <a href="?delete=<?php echo urlencode($row["appoinment_id"]); ?>"
                            onclick="return confirm('Are you sure you want to delete this appointment?');">
                            <button class="action-btn delete" type="button">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php } else { ?>
                <tr>
                    <td colspan="10">No appointment found.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>