<?php
$servername = "localhost";
$username = "root";
$pass = "";

$con = mysqli_connect($servername, $username, $pass);

if (!$con) {
    echo "Connection failed";
}
$db = mysqli_select_db($con, "project");

if (!$db) {
    echo "Database selection failed";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Background</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Responsive background image */
        .main-container {
            position: relative;
            width: 100%;
            height: 100vh;
            /* Ensure the container takes full height of the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Full responsive background */
        .sub_container {
            background-image: url("bg.webp");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            /* Ensure the image is centered */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Full height to cover the entire viewport */
        }

        .main_text {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .main_p {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .main_p_sp {
            color: #ff1167;
        }

        .main_p1 {
            font-size: 2rem;
        }

        .why_book_vanue_container {

            height: 120vh;
            width: 100%;
            background: pink;
        }

        /* Cards styling */
        .wave {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            gap: 20px;
        }

        .card_container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            width: 100%;
            max-width: 300px;
        }

        .card_container:hover {
            transform: scale(1.05);
        }

        .card_img img {
            width: 100%;
            height: auto;
        }

        .card_header {
            background-color: #6b1d4f;
            color: white;
            padding: 10px;
            font-size: 1.2rem;
        }

        .card_body {
            padding: 15px;
            font-size: 1rem;
        }

        .card_body p {
            margin: 10px 0;
        }

        .location {
            color: midnightblue;
        }

        .star {
            color: green;
        }

        .massage,
        .contect {
            display: block;
            width: 100%;
            text-align: center;
            margin: 10px 0;
            padding: 10px;
            border: none;
            background-color: #a6206a;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
        }

        .massage:hover,
        .contect:hover {
            background-color: #ff1167;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .main_p {
                font-size: 3rem;
            }

            .main_p1 {
                font-size: 1.5rem;
            }

            .card_container {
                max-width: 90%;
            }

            .sub_container {
                background-position: top center;
            }
        }

        @media (max-width: 480px) {
            .main_p {
                font-size: 2.5rem;
            }

            .main_p1 {
                font-size: 1.2rem;
            }

            .sub_container {
                background-size: cover;
                background-position: center center;
                height: auto;
            }

            .card_body {
                font-size: 0.9rem;
            }

            .massage,
            .contect {
                font-size: 0.9rem;
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="sub_container"></div>
        <div class="main_text">
            <p class="main_p"><span class="main_p_sp">Welcome</span> to Incredible India's</p>
            <p class="main_p1">Destination <span class="main_p_sp">Wedding</span> Venue</p>
        </div>
    </div>
    <div class="why_book_vanue_container"></div>
    <div class="wave">
        <?php
        $query = "SELECT * FROM vanue";
        $result = mysqli_query($con, $query);

        if (!$result) {
            echo "Query failed";
        }

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="card_container">
                <div class="card_img">
                    <img src="../../admine side/vanueimage/<?php echo $row['vanueimage']; ?>" alt="Venue Image">
                </div>
                <div class="card_header">
                    <h2><?php echo $row['vanuename']; ?></h2>
                </div>
                <div class="card_body">
                    <p>
                        <i class="fa-solid fa-location-dot location"></i> <?php echo $row['location']; ?>
                        <span><i class="fa-regular fa-star star"></i> <?php echo $row['rating']; ?> (7 reviews)</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $row['price']; ?>
                    </p>
                    <button class="massage"><i class="fa-solid fa-envelope"></i> Send Message</button>
                    <button class="contect"><i class="fa-solid fa-phone"></i> View Contact</button>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>