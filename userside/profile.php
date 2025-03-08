<?php
session_start();
include("connection/connection.php");

// User Authentication
if (!isset($_SESSION["useremail"])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION["useremail"];

// Fetch User Details
$query = "SELECT * FROM userregistration WHERE email='$email'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);

// Logout Logic
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            background: #f8f9fa;
            overflow: hidden;
        }

        /* User Info Header */
        .user-info {
            background: #631549;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        .user-info h2 {
            margin-bottom: 10px;
        }

        .info-box {
            display: inline-block;
            margin: 0 15px;
            font-size: 16px;
            font-weight: bold;
        }

        .logout-btn {
            background: #9b2172;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            margin-left: 20px;
        }

        .logout-btn:hover {
            background: #7d1458;
        }

        /* Navbar */
        .navbar {
            background: #3D0124;
            color: white;
            padding: 5px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-size: 18px;
            position: relative;
            z-index: 9;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            transition: 0.3s;
            cursor: pointer;
        }

        .navbar a:hover {
            background: #9b2172;
            border-radius: 5px;
        }

        .iframe-container {
            flex-grow: 1;
            width: 100%;
            height: calc(100vh - 120px);
            /* 🔹 Header + Navbar की हाइट घटाकर iframe सेट करें */
            overflow: auto;
            /* 🔹 स्क्रॉलिंग की अनुमति देने के लिए */
            position: relative;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>

    <script>
        function loadPage(url) {
            document.getElementById("contentFrame").src = url;
        }
    </script>
</head>

<body>
    <!-- User Info Header -->
    <div class="user-info">
        <h2>Profile: <?php echo htmlspecialchars($user['username']); ?></h2>
        <span class="info-box">Email: <?php echo htmlspecialchars($user['email']); ?></span>
        <span class="info-box">City: <?php echo htmlspecialchars($user['city']); ?></span>
        <span class="info-box">Phone: +91 <?php echo htmlspecialchars($user['phone']); ?></span>
        <form method="POST" style="display:inline;">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#" onclick="loadPage('servicebookview.php')">Service Booking</a>
        <a href="#" onclick="loadPage('appoinmenttable.php')">Bookings</a>
        <a href="#" onclick="loadPage('vanuetable.php')">vanue</a>
        <a href="#" onclick="loadPage('settings.php')">Settings</a>
    </div>

    <!-- iFrame for Content -->
    <div class="iframe-container">
        <iframe id="contentFrame" src=""></iframe>
    </div>
</body>

</html>