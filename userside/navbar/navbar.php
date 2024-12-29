<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header or navbar</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .header {
            height: 16vh;
            width: 100%;
            background-color: rgb(99 21 73);
            display: flex;
        }

        .header_logo {

            height: 16vh;
            width: 20%;
        }

        .logo_img {
            height: 17vh;
            width: 60%;
            margin-left: 38%;
        }

        .login_register_container {
            height: 17vh;
            width: 40%;
            margin-left: 39%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header_p {
            font: normal normal 700 21px/11px Montserrat;
            /* position: absolute; */
            color: white;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .login_register {

            height: 30%;
            width: 29%;
            background-color: rgb(155, 33, 114);
            margin-left: 5%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 510px;
        }

        .login_register_p {

            font-size: 19px;
            color: white;
        }
    </style>
</head>

<body>
    <section>

        <div class="header">
            <div class="header_logo">
                <img src="logo.png" alt="" class="logo_img">
            </div>
            <div class="login_register_container">
                <a href="">
                    <p class="header_p">Are You Vendor?</p>
                </a>
                <div class="login_register">
                    <a href="">
                        <p class="login_register_p">Login &nbsp|</p>
                    </a>
                    <a href="">
                        <p class="login_register_p"> &nbsp register</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>