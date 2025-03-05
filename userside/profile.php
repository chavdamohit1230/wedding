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
            height: 100vh;
            background: #f8f9fa;
            overflow: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: 25%;
            background: #631549;
            color: white;
            padding: 40px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .sidebar h2 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            font-size: 16px;
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

        .logout-btn {
            background: #9b2172;
            color: white;
        }

        .logout-btn:hover {
            background: #7d1458;
        }

        /* Main Content */
        .content {
            width: 75%;
            background: white;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Navbar */
        .navbar {
            background: #3D0124;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-size: 18px;
            height: 60px;
            /* Fixed height */
            position: relative;
            z-index: 10;
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

        /* iFrame Container */
        .iframe-container {
            flex-grow: 1;
            width: 100%;
            height: calc(100vh - 60px);
            /* Navbar height adjust */
            overflow: hidden;
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
            let iframe = document.getElementById("contentFrame");
            iframe.src = url;

            iframe.onload = function () {
                setTimeout(() => {
                    let doc = iframe.contentDocument || iframe.contentWindow.document;
                    if (doc) {
                        let bodyHeight = doc.body.scrollHeight;
                        let htmlHeight = doc.documentElement.scrollHeight;
                        let finalHeight = Math.max(bodyHeight, htmlHeight) + "px";

                        iframe.style.height = finalHeight; // Iframe ki height set karega
                    }
                }, 500);
            };
        }
    </script>

</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Profile Name: <?php echo htmlspecialchars($user['username']); ?></h2>
        <div class="info-box">Email: <?php echo htmlspecialchars($user['email']); ?></div>
        <div class="info-box">City: <?php echo htmlspecialchars($user['city']); ?></div>
        <div class="info-box">Phone: +91 <?php echo htmlspecialchars($user['phone']); ?></div>
        <div class="button-container">
            <form method="POST">
                <button type="submit" name="logout" class="btn logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <div class="navbar">
            <a href="#" onclick="loadPage('servicebookview.php')">service Booking</a>
            <a href="#" onclick="loadPage('appoinmenttable.php')">Bookings</a>
            <a href="#" onclick="loadPage('appointments.php')">Appointments</a>
            <a href="#" onclick="loadPage('settings.php')">Settings</a>
        </div>

        <!-- iFrame for Content -->
        <div class="iframe-container">
            <iframe id="contentFrame" src=""></iframe>
        </div>
    </div>
</body>

</html>