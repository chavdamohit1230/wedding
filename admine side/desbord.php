<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPMS Admin Panel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #e9eff6;
        }

        .sidebar {
            width: 210px;
            background-color: #f9f9f9;
            color: black;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        .sidebar .logo {
            margin-bottom: 20px;
        }

        .sidebar .logo svg {
            width: 120px;
            height: 120px;
        }

        .sidebar .profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .profile h3 {
            margin: 10px 0 5px;
            font-size: 30px;
        }

        .sidebar .menu {
            width: 100%;
        }

        .sidebar .menu a {
            display: block;
            text-decoration: none;
            color: black;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .sidebar .menu a:hover {
            background-color: #7a1b56;
            color: white;
        }

        .header {
            margin-left: 200px;
            padding: 10px 20px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #e9eff6;
        }

        .header h1 {
            font-size: 20px;
            color: #333;
        }

        .header .logout {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            flex: 1;
            min-width: 200px;
            max-width: 250px;
            background-color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card.blue {
            background-color: #007bff;
            color: white;
        }

        .card.green {
            background-color: #28a745;
            color: white;
        }

        .card.red {
            background-color: #dc3545;
            color: white;
        }

        .card.teal {
            background-color: #17a2b8;
            color: white;
        }

        .card h2 {
            font-size: 30px;
            margin: 10px 0;
        }

        .card p {
            font-size: 16px;
            margin: 0;
        }

        iframe {
            position: fixed;
            top: 60px;
            /* Adjust this to match the height of your header */
            left: 210px;
            /* Adjust this to match the width of your sidebar */
            width: calc(100vw - 210px);
            /* Full width minus sidebar */
            height: calc(100vh - 60px);
            /* Full height minus header */
            border: none;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <!-- Logo Section -->
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="50" fill="#fff" />
                <text x="50%" y="55%" text-anchor="middle" font-size="30" fill="#ff3d00" font-family="Arial"
                    dy=".3em">DB</text>
            </svg>
        </div>

        <!-- Profile Section -->
        <div class="profile">
            <h3>Saptapadi</h3>
            <p>Administrator</p>
        </div>

        <!-- Menu Section -->
        <div class="menu">
            <a href="gallerytable.php" target="content-frame">Gallery Studioi table</a>
            <a href="servicetable.php" target="content-frame">Service Table</a>
            <a href="indexpage.php" target="content-frame">Clients</a>
            <a href="services.html" target="content-frame">Services</a>
            <a href="gallery.html" target="content-frame">Gallery</a>
            <a href="upload_photos.html" target="content-frame">Upload Photos</a>
            <a href="user_management.html" target="content-frame">User Management</a>
            <a href="task_calendar.html" target="content-frame">Task Calendar</a>
        </div>
    </div>

    <div class="header">
        <h1>WELCOME Saptapadi </h1>
        <a href="#" class="logout">Logout</a>
    </div>

    <iframe src="content.php" name="content-frame" height="100%" width="100%"></iframe>

</body>

</html>