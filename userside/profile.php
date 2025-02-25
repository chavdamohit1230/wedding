<?php
session_start();
$email = $_SESSION["useremail"];


include("connection/connection.php");

$query = "select * from userregistration where email='$email'";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);

if (isset($_POST["logout"])) {

    session_destroy();
    header("location:index.php");
    exit();

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Advanced User Profile</title>
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
            /* background: linear-gradient(135deg, #34495e, #2c3e50); */
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
            color: white;
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

        .edit-btn {
            background: #9b2172;
            color: white;
        }

        .edit-btn:hover {
            background: #9b2172;
        }

        .logout-btn {
            background: #9b2172;
            color: white;
        }

        .logout-btn:hover {
            background: #9b2172;
        }

        .content-container {
            width: 70%;
            background: white;
            padding: 40px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <div class="sidebar">
            <h2>Profile name:<?php echo $row['username'] ?></h2>
            <div class="info-box">Email:<?php echo $row['email'] ?></div>
            <div class="info-box">city:<?php echo $row['city'] ?></div>
            <div class="info-box">Phone: +91 <?php echo $row['phone'] ?></div>

            <div class="button-container">
                <form action="" method="POST">
                    <button class="btn edit-btn">Edit Profile</button>
                    <button type="submit" name="logout" class="btn logout-btn">Logout</button>
                </form>
            </div>
        </div>
        <div class="content-container">
            <!-- Custom Content Goes Here -->
        </div>
    </div>
</body>

</html>