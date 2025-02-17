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
                    <a href="">
                        <p class="login_register_p">Login</p>
                    </a>
                    <a href="login/Register.php">
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
                    <a href="wedshop.php">

                        <li class="navli">WEDSHOP</li>
                    </a>
                    <a href="appoiment.php">
                        <li class="navli">BOOK APPOINTMENT</li>
                    </a>
                </ul>
            </div>
        </nav>
    </section>



</body>

</html>