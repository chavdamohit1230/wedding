<?php include("navbar.php");


session_start();

$userid = $_SESSION["useremail"];

if (!$userid) {
    header("location:login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination Wedding Shop</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Quicksand:wght@500&family=Dancing+Script:wght@400&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .webody {
            font-family: 'Poppins', sans-serif;
            background-color: #fff7f0;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #444;
        }

        .banner {
            background: url("images/wedshop/wedshop_homepage_banner.jpg") no-repeat center center/cover;
            color: white;
            padding: 80px 20px;
            font-size: 36px;
            color: rgb(155, 33, 114);
            font-weight: 600;
            /* text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.5); */
            */ position: relative;

            text-align: Center;
        }

        .banner h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 60px;
            margin: 0;
        }

        .banner p {
            font-family: 'Quicksand', sans-serif;
            font-size: 20px;
            font-weight: 400;
            color: black;
        }

        .description-section {
            max-width: 900px;
            margin: 40px auto;
            font-size: 18px;
            line-height: 1.8;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
            text-align: center;
        }

        .category {
            background-color: #fff;
            width: 320px;
            height: 460px;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .category img {
            width: 100%;
            height: 62%;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .category:hover img {
            transform: scale(1.1);
        }

        .category h3 {
            font-size: 24px;
            margin-top: 15px;
            font-family: 'Dancing Script', cursive;
            font-weight: 600;
            color: rgb(155, 33, 114);

        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 30px;
            background-color: rgb(99, 21, 73);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #b5835a;
            transform: scale(1.1);
        }

        .category p {
            font-size: 14px;
            color: #888;
            margin-top: 10px;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="wedbody">
        <div class="banner">
            <h1>Welcome to Destination Wedding Shop</h1>
            <p>Elegance, Luxury, and Tradition – Everything You Need for Your Special Day</p>
        </div>

        <div class="description-section">
            <p>Explore our premium collection of wedding essentials. From exquisite clothing for the bride and groom to
                timeless jewelry and elegant accessories, we bring your dream wedding to life.</p>
        </div>

        <div class="container">
            <div class="category">
                <img src="images/wedshop/groombanner.jpg" alt="Groom Clothing">
                <h3>Groom's Clothing</h3>
                <p>Find tailored suits, traditional wear, and more to make the groom look dashing on the big day.</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="category">
                <img src="images/wedshop/bridebanner.jpg" alt="Bride Clothing">
                <h3>Bride's Clothing</h3>
                <p>Shop beautiful bridal gowns, lehengas, and more to make the bride shine.</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="category">
                <img src="images/wedshop/jewelry.jpg" alt="Jewelry">
                <h3>Jewelry</h3>
                <p>Discover luxurious necklaces, earrings, and rings that complete your wedding look.</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="category">
                <img src="images/wedshop/accessories.jpg" alt="Accessories">
                <h3>Accessories</h3>
                <p>From elegant shoes to delicate veils, find all the accessories to perfect your look.</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
        </div>
    </div>
    <?php include("footer/footer.php") ?>
</body>

</html>