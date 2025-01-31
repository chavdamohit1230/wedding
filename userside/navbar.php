<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Header & Navbar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .nav_header {
            height: 12vh;
            width: 100%;
            background-color: rgb(99, 21, 73);
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .header_logo {
            height: 18vh;
            width: 20%;
        }

        .logo_img {
            height: 70%;
            width: 50%;
            margin-left: 38%;
        }

        .login_register_container {
            height: 100%;
            width: 40%;
            margin-left: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header_p {
            font: normal normal 500 18px/11px Montserrat;
            color: white;
            margin-right: 10px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .login_register {
            height: 45%;
            width: 30%;
            background-color: rgb(155, 33, 114);
            margin-left: 5%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 510px;
            cursor: pointer;
        }

        .login_register_p {
            font-size: 18px;
            color: white;
        }

        .navbar {
            height: 5vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(155, 33, 114);
            position: fixed;
            top: 12vh;
            left: 0;
            z-index: 999;
        }

        .navui {
            list-style: none;
            display: flex;
        }

        .navli {
            position: relative;
            color: white;
            margin: 30px;
            font-size: 16px;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .navli::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: gold;
            transition: width 0.3s ease;
        }

        .navli:hover {
            color: gold;
        }

        .navli:hover::after {
            width: 100%;
        }

        body {
            padding-top: 17vh;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            right: 20%;
            width: 100%;
            height: 107%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            height: 70%;
            position: relative;
        }

        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 25px;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
            color: white;
            border-radius: 20%;
            background: rgb(155, 33, 114);
        }
    </style>
</head>

<body>
    <section>
        <div class="nav_header">
            <div class="header_logo">
                <img src="images/navbar/l1.png" alt="Logo" class="logo_img">
            </div>
            <div class="login_register_container">
                <p class="header_p">Are You Vendor?</p>
                <div class="login_register">
                    <a href="javascript:void(0);" onclick="openLoginModal(event)">
                        <p class="login_register_p">Login</p>
                    </a>
                    <a href="javascript:void(0);" id="openRegisterBtn">
                        <p class="login_register_p"> | Register</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <nav>
            <div class="navbar">
                <ul class="navui">
                    <a href="index.php">
                        <li class="navli">HOME</li>
                    </a>
                    <a href="service.php">
                        <li class="navli">SERVICE</li>
                    </a>
                    <a href="gallery.php">
                        <li class="navli">PHOTOGRAPHY</li>
                    </a>
                    <a href="about.php">
                        <li class="navli">ABOUT US</li>
                    </a>
                    <a href="vanue.php">
                        <li class="navli">BOOK VENUE</li>
                    </a>
                    <li class="navli">WEDSHOP</li>
                    <a href="appoiment.php">
                        <li class="navli">BOOK APPOINTMENT</li>
                    </a>
                </ul>
            </div>
        </nav>
    </section>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeRegisterModal">&times;</span>
            <iframe id="modalFrame" src="login/register.php" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeLoginModal">&times;</span>
            <?php require("login/error.php"); ?>
        </div>
    </div>

    <script>
        // Open Login Modal
        function openLoginModal(event) {
            event.preventDefault(); // Prevent default action
            document.getElementById('loginModal').style.display = 'flex';
        }

        // Close Login Modal
        function closeLoginModal() {
            document.getElementById('loginModal').style.display = 'none';
        }

        // Open Register Modal
        function openRegisterModal(event) {
            event.preventDefault();
            document.getElementById('registerModal').style.display = 'flex';
        }

        // Close Register Modal
        function closeRegisterModal() {
            document.getElementById('registerModal').style.display = 'none';
        }

        // Attach event listeners
        document.getElementById('openRegisterBtn').addEventListener('click', openRegisterModal);
        document.getElementById('closeRegisterModal').addEventListener('click', closeRegisterModal);
        document.getElementById('closeLoginModal').addEventListener('click', closeLoginModal);

        // Ensure modals are hidden on page load
        window.onload = function () {
            document.getElementById('registerModal').style.display = 'none';
            document.getElementById('loginModal').style.display = 'none';
        };
    </script>
</body>

</html>