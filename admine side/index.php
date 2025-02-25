<?php
include("connection.php");

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
    $res = mysqli_query($con, $query);

    $count = mysqli_num_rows($res);
    if ($count == 1) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Login Successful! Redirecting...',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href='desbord.php';
                    });
                });
              </script>";
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Invalid Username or Password. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
              </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(57, 17, 44);
        }

        .login-container {
            background: white;
            padding: 30px;
            width: 420px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
            margin-left: 120px;
            /* height: 120px; */
        }

        h2 {
            color: #333;
            font-size: 24px;
        }

        .input-group {
            position: relative;
            margin: 20px 0;
        }

        input {
            width: 100%;
            padding: 14px 45px;
            border: 2px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            background: transparent;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 18px;
        }

        label {
            position: absolute;
            top: 50%;
            left: 45px;
            transform: translateY(-50%);
            font-size: 14px;
            color: #aaa;
            transition: 0.3s ease-in-out;
            pointer-events: none;
        }

        input:focus+label,
        input:not(:placeholder-shown)+label {
            top: 5px;
            left: 45px;
            font-size: 12px;
            color: #9B2172;
            background: white;
            padding: 0 5px;
        }

        input:focus {
            border-color: rgb(57, 17, 44);
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: rgb(155, 33, 114);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #7a1b56;
        }

        @media (max-width: 500px) {
            .login-container {
                width: 90%;
                height: auto;
            }

            h2 {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">
        <img src="l1.png" alt="Admin Logo" class="logo">
        <h2>Admin Login</h2>

        <form action="#" method="POST">
            <div class="input-group">
                <i class="fa fa-user"></i>
                <input type="text" name="username" id="username" placeholder=" " autocomplete="username">
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" id="password" placeholder=" " autocomplete="current-password">
                <label for="password">Password</label>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

</body>

</html>