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
            overflow: hidden;
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

        .sidebar .menu a,
        .dropdown-btn {
            display: block;
            text-decoration: none;
            color: black;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            font-size: 16px;
        }

        .sidebar .menu a:hover,
        .dropdown-btn:hover {
            background-color: #7a1b56;
            color: white;
        }

        .dropdown-content {
            display: none;
            flex-direction: column;
        }

        .dropdown.open .dropdown-content {
            display: flex;
        }

        .header {
            margin-left: 210px;
            padding: 10px 20px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #e9eff6;
        }

        iframe {
            position: fixed;
            top: 60px;
            left: 210px;
            width: calc(100vw - 210px);
            height: calc(100vh - 60px);
            border: none;
            overflow: hidden;
        }
    </style>
    <script>
        function toggleDropdown() {
            document.getElementById("serviceDropdown").classList.toggle("open");
        }
    </script>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="50" fill="#fff" />
                <text x="50%" y="55%" text-anchor="middle" font-size="30" fill="#ff3d00" font-family="Arial"
                    dy=".3em">DB</text>
            </svg>
        </div>

        <div class="profile">
            <h3>Saptapadi</h3>
            <p>Administrator</p>
        </div>

        <div class="menu">
            <a href="gallerytable.php" target="content-frame">Gallery Studio Table</a>

            <div class="dropdown" id="serviceDropdown">
                <button class="dropdown-btn" onclick="toggleDropdown()">Service Table ▼</button>
                <div class="dropdown-content">
                    <a href="servicetable.php" target="content-frame">Service Table</a>
                    <a href="subservicetable.php" target="content-frame">subservice-add</a>
                    <a href="service2.php" target="content-frame">Service 2</a>
                </div>
            </div>

            <a href="appoinment_Request.php" target="content-frame">appoinment_Request</a>
            <a href="vanuetablerequest.php" target="content-frame">vanue_request</a>
            <a href="gallery.html" target="content-frame">Gallery</a>
            <a href="upload_photos.html" target="content-frame">Upload Photos</a>
            <a href="user_management.html" target="content-frame">User Management</a>
            <a href="task_calendar.html" target="content-frame">Task Calendar</a>
        </div>
    </div>

    <div class="header">
        <h1>WELCOME Saptapadi</h1>
        <a href="#" class="logout">Logout</a>
    </div>

    <iframe src="content.php" name="content-frame"></iframe>
</body>

</html>