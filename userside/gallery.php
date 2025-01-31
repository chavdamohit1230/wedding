<?php
include("connection/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery.com</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .main_img {
            background-image: url("images/gallery/background.webp");
            height: 95vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
        }

        .main_sub {
            height: 95vh;
            width: 100%;
            background-color: black;
            opacity: 0.4;
            position: absolute;
        }

        .main_sub_h3 {
            font-size: 60px;
            color: white;
            position: absolute;
            top: 50%;
            left: 8%;
        }

        .main_sub_h3_sp {
            color: rgb(281, 17, 119);
        }

        .main_sub_h1 {
            position: absolute;
            color: white;
            font-size: 40px;
            top: 60%;
            left: 10%;
        }

        .photography_card_container {
            width: 100%;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .photography_card {
            margin: 20px;
            height: 70vh;
            width: 27%;
            text-decoration: none;
        }

        .photography_img {
            width: 100%;
            height: 75%;
            border-radius: 5%;
            background-size: cover;
            background-repeat: no-repeat;
            object-fit: cover;
        }

        .studio_name {
            font-size: 20px;
            margin-left: 2px;
            margin-top: 12px;
            color: black;
        }

        .card_travel,
        .card_team,
        .card_price {
            font-size: 18px;
            color: #6a6a6a;
            margin-top: 8px;
        }
    </style>

    <link rel="stylesheet" href="aos/aos.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="main_sub"></div>

    <div class="main_img">
        <h3 class="main_sub_h3" data-aos="fade-right" data-aos-offset="200" data-aos-delay="300"
            data-aos-duration="1200" data-aos-mirror="true"> <span class="main_sub_h3_sp">Our</span> Exclusive</h3>
        <h1 class="main_sub_h1" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
            data-aos-mirror="true">
            Photography</h1>
    </div>

    <div class="photography_card_container">
        <?php
        $query = "SELECT * FROM gallarytable";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <a href="gallery-subpage.php?gid=<?php echo $row['studioname']; ?>" class="photography_card" data-aos="fade-up"
                data-aos-offset="200" data-aos-delay="300" data-aos-duration="1100">
                <img src="../admine side/images/<?php echo $row['studioimage']; ?>" alt="" class="photography_img">
                <div>
                    <p class="studio_name"><?php echo htmlspecialchars($row['studioname']); ?></p>
                    <p class="card_travel"><?php echo htmlspecialchars($row['travel']); ?></p>
                    <p class="card_team">Team size <?php echo htmlspecialchars($row['teamsize']); ?></p>
                    <p class="card_price">Rs <?php echo htmlspecialchars($row['price']); ?> lakhs domestic wedding price</p>
                </div>
            </a>
        <?php } ?>
    </div>

    <script src="aos/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <?php include 'footer/footer.php'; ?>

</body>

</html>