<?php
session_start();
include("connection/connection.php");

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $pass = $_POST["pass"];
    // $pass = $_POST["password"];

    $query1 = "select * from userregistration where email='$email' and password='$pass'";
    $result = mysqli_query($con, $query1);

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>"; // SweetAlert2 CDN

    if (mysqli_num_rows($result) > 0) {

        $_SESSION["useremail"] = $email;
        echo $_SESSION["useremail"];
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Login Successful!',
                        text: 'Redirecting to your dashboard...',
                        icon: 'success',
                        background: 'rgb(99, 21, 73)',
                        color:'white',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = 'index.php'; // Redirect on success
                    });
                });
            </script>";
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Login Failed!',
                        text: 'Invalid email or password. Please try again.',
                        icon: 'error',
                        background: 'rgb(99, 21, 73)',
                        color:'white',
                        confirmButtonText: 'Retry'
                    });
                });
            </script>";
    }
}


// if (isset($_POST["updatepass"])) {

//     $email = $_POST["reset_email"];
//     $newpass = $_POST["new_password"];

//     echo $email;
//     echo $newpass;

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Stylish Neon UI</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url("images/loginbackground.jpg") no-repeat center center;
            background-size: cover;
        }

        .container {
            background: #f9f9f9f9;
            padding: 40px;
            width: 400px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            border: 1px solid black;
        }

        h2 {
            margin-bottom: 20px;
            color: #9b2172;
            font-size: 24px;
            text-transform: uppercase;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 10px;
            background: transparent;
            border: 2px solid black;
            border-radius: 5px;
            outline: none;
            color: black;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .input-group label {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            color: black;
            transition: 0.3s ease-in-out;
            pointer-events: none;
        }

        .input-group input:focus+label,
        .input-group input:valid+label {
            top: 0px;
            left: 10px;
            font-size: 12px;
            background: #f9f9f9;
            padding: 0 5px;
            color: black;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: black;
            font-size: 18px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: rgb(99, 21, 73);
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 5px;
            font-weight: bold;
        }

        button:hover {
            background: rgb(130, 30, 100);
            color: white;
        }

        p {
            margin-top: 15px;
            color: black;
            font-size: 14px;
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Hide Reset Password Form Initially */
        #resetPasswordForm {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Login Form -->
        <div id="loginForm">
            <h2>Login</h2>
            <form method="POST">
                <div class="input-group">
                    <input type="text" name="email" required>
                    <label>Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="pass" required>
                    <label>Password</label>

                    <span class="toggle-password" onclick="togglePassword()">👁️</span>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
            <p><a href="#" id="forgotPassword">Forgot Password?</a></p>
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </div>

        <!-- Reset Password Form (Initially Hidden) -->
        <div id="resetPasswordForm">
            <h2>Reset Password</h2>
            <form method="POST">
                <div class="input-group">
                    <input type="email" id="resetEmail" name="reset_email" required>
                    <label>Enter your email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="newPassword" name="new_password" required>
                    <label>Enter new password</label>
                </div>
                <button type="submit" onclick="submitResetPassword()" name="updatepass">Reset Password</button>
            </form>
            <p><a href="#" id="backToLogin">Back to Login</a></p>
        </div>
    </div>

    <script>
        function togglePassword() {
            let passwordField = document.getElementById("password");
            let toggleIcon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.textContent = "🙈";
            } else {
                passwordField.type = "password";
                toggleIcon.textContent = "👁️";
            }
        }

        document.getElementById("forgotPassword").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("loginForm").style.display = "none"; // Hide login form
            document.getElementById("resetPasswordForm").style.display = "block"; // Show reset password form
        });

        document.getElementById("backToLogin").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("resetPasswordForm").style.display = "none"; // Hide reset form
            document.getElementById("loginForm").style.display = "block"; // Show login form
        });

        function submitResetPassword() {
            let email = document.getElementById("resetEmail").value;
            let newPassword = document.getElementById("newPassword").value;

            if (email.trim() === "" || newPassword.trim() === "") {
                alert("Please fill all fields.");
                return;
            }

            alert("Your password has been reset successfully!");
            document.getElementById("resetPasswordForm").style.display = "none";
            document.getElementById("loginForm").style.display = "block";
        }
    </script>

</body>

</html>