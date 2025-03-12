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
            height: 100vh;
            overflow: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 230px;
            background-color: #f9f9f9;
            color: black;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            overflow-y: auto;
            /* Scroll enable */
            overflow-x: hidden;
            scrollbar-width: thin;
            scrollbar-color: #7a1b56 #f9f9f9;
        }

        /* Custom Scrollbar for Chrome, Edge, Safari */
        .sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: #7a1b56;
            border-radius: 4px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: #f9f9f9;
        }

        /* Logo Styling */
        .sidebar .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar .logo svg {
            width: 120px;
            height: 120px;
        }

        /* Profile Styling */
        .sidebar .profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .profile h3 {
            margin: 10px 0 5px;
            font-size: 20px;
        }

        .sidebar .profile p {
            font-size: 30px;
            color: #555;
        }

        /* Sidebar Menu */
        .sidebar .menu {
            width: 100%;
            display: block;
        }

        /* Sidebar Menu Links & Buttons */
        .sidebar .menu a,
        .dropdown-btn {
            display: block;
            text-decoration: none;
            color: black;
            padding: 12px 20px;
            width: 100%;
            text-align: left;
            font-size: 15px;
            transition: background 0.3s ease, color 0.3s ease;
            border: none;
            background: none;
            cursor: pointer;
            outline: none;
        }

        /* Hover Effect */
        .sidebar .menu a:hover,
        .dropdown-btn:hover {
            background-color: #7a1b56;
            color: white;
        }

        /* Dropdown Content (Initially Hidden) */
        .dropdown-content {
            display: none;
            flex-direction: column;
            padding-left: 15px;
            /* थोड़ा इंडेंट किया */
        }

        /* Show Dropdown on Click */
        .dropdown.open .dropdown-content {
            display: flex;
        }

        .header {
            position: fixed;
            width: calc(100% - 270px);
            left: 230px;
            top: 0;
            height: 60px;
            /* सुनिश्चित करें कि हेडर की ऊँचाई सही हो */
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 2px solid #e9eff6;
            z-index: 1000;
        }


        /* Logout Button */
        .logout {
            text-decoration: none;
            color: #ff3d00;
            font-size: 16px;
            font-weight: bold;
        }

        iframe {
            position: absolute;
            top: 60px;
            /* हेडर की ऊँचाई के बराबर सेट करें */
            left: 230px;
            /* साइडबार की चौड़ाई के बराबर */
            width: calc(100% - 230px);
            height: calc(100vh - 60px);
            /* पूरी स्क्रीन का ध्यान रखें */
            border: none;
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
            <a href="usermanage.php" target="content-frame">User_Management</a>

            <div class="dropdown" id="serviceDropdown">
                <button class="dropdown-btn" onclick="toggleDropdown()">Service Table ▼</button>
                <div class="dropdown-content">
                    <a href="servicetable.php" target="content-frame">Service Table</a>
                    <a href="subservicetable.php" target="content-frame">subservice-add</a>
                    <a href="sbookingrequest.php" target="content-frame">Service Bokking request</a>
                    <a href="serviceapprove.php" target="content-frame">Approved Request</a>
                </div>
            </div>
            <div class="dropdown" id="appointmentDropdown">
                <button class="dropdown-btn" onclick="toggleAppointmentDropdown()">Appointment Request ▼</button>
                <div class="dropdown-content">
                    <a href="appoinment_Request.php" target="content-frame">Appointment Request</a>
                    <a href="appoinment_approve.php" target="content-frame">Approved Appointments</a>
                </div>
            </div>
            <div class="dropdown" id="vanuedropdown">
                <button class="dropdown-btn" onclick="togglevanuedropdown()">vanue manage ▼</button>
                <div class="dropdown-content">
                    <a href="vanuetable.php" target="content-frame">Vanue_Table</a>
                    <a href="vanuetablerequest.php" target="content-frame">Vanue_Request</a>
                    <a href="vanue_approve.php" target="content-frame">vanue_approve</a>
                </div>
            </div>



            <a href="gallerytable.php" target="content-frame">Gallery Studio Table</a>

            <a href="user_management.html" target="content-frame">User Management</a>
            <a href="task_calendar.html" target="content-frame">Task Calendar</a>
        </div>
    </div>

    <div class="header">
        <h1>WELCOME Saptapadi</h1>
        <a href="#" class="logout">Logout</a>
    </div>

    <iframe src="content.php" name="content-frame"></iframe>
    <script>
        function toggleDropdown() {
            document.getElementById("serviceDropdown").classList.toggle("open");
        }

        function toggleAppointmentDropdown() {
            document.getElementById("appointmentDropdown").classList.toggle("open");
        }

        function togglevanuedropdown() {
            document.getElementById("vanuedropdown").classList.toggle("open");
        }

    </script>
</body>

</html>