<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page admine</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .header {

            height: 10vh;
            width: 100%;
            background-color: rgba(123, 182, 112, 1);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .heding {

            font-size: 35px;
            font-family: 'Arial Narrow', Arial, sans-serif;
        }

        .sub_container {

            height: 100vh;
            background-color: #f9f9f9;
            display: flex;


        }


        img {

            box-shadow: 6px 7px 14px #444;
            height: 200px;
            margin-top: 59px;
            border-radius: 20px;

        }

        .adminlogo {

            padding-left: 70px;
        }

        .imagepage {

            padding-left: 60px;
        }

        .vanue {

            margin-left: 60px;
        }

        .logo {}
    </style>
</head>

<body>

    <div class="header">

        <h1 class="heding">Welcome To Admine Page</h1>
    </div>

    <div class="sub_container">

        <div class="adminlogo">

            <a href="adminedata.php"><img src="adminelogo.jpg" alt=""></a>

        </div>

        <div class="imagepage">

            <a href="servicedelete.php"><img src="imagepage.jpg" alt=""></a>

        </div>
        <div class="vanue">

            <a href=""><img src="vanue-logo.png" alt=""></a>
        </div>
    </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>