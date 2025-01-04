<?php

include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery.com</title>

    <style>
        body {

            margin: 0px;
            padding: 0px;


        }

        .main_img {

            background-image: url("background.webp");
            height: 95vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            height: 95vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .main_sub {

            height: 95vh;
            width: 100%;
            z-index: 0px;
            background-color: black;
            opacity: 0.4;
            position: absolute;
        }

        .main_sub_h3 {
            font-size: 60px;
            color: white;
            position: absolute;
            top: 35%;
            left: 8%;
        }

        .main_sub_h3_sp {
            color: rgb(281, 17, 119);
            ;
        }

        .main_sub_h1 {

            position: absolute;
            color: white;
            z-index: 20;
            font-size: 40px;
            top: 45%;
            left: 10%;


        }

        .photography_card_container {
            width: 100%;
            max-height: 2250px;
            min-height: 120px;

            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .photography_card {
            margin: 20px;
            height: 70vh;
            width: 27%;

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
            position: relative;
            margin-left: 2px;
            top: 12px;

        }

        .card_travel {

            font-size: 18px;
            color: #6a6a6a;
            position: relative;
            top: 12px;
        }

        .card_team {

            font-size: 18px;
            color: #6a6a6a;
            position: relative;
            top: 12px;
        }

        .card_price {
            font-size: 18px;
            color: #6a6a6a;
            position: relative;
            top: 12px;
        }
    </style>
    <link rel="stylesheet" href="aos.css">


</head>


<div class="main_sub"></div>

<div class="main_img">

    <h3 class="main_sub_h3"> <span class="main_sub_h3_sp">Our</span> Exclusive</h3>
    <h1 class="main_sub_h1">Photography</h1>

</div>

<div class="photography_card_container">

    <?php
    $query = "select * from gallarytable";

    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {

        ?>

        <div class="photography_card">
            <img src="../../admine side/images/<?php echo $row['studioimage']; ?>" alt="" class="photography_img">
            <div>
                <p class="studio_name"><?php echo $row['studioname']; ?></p>
                <p class="card_travel"><?php echo $row['travel']; ?></p>
                <p class="card_team"> team size <?php echo $row['teamsize']; ?></p>
                <p class="card_price">Rs <?php echo $row['price']; ?> lakhs domestic wedding price</p>
            </div>
        </div>


    <?php } ?>


</div>

</section>
<script src="aos.js">
</script>
<script>

    AOS.init();

</script>
<?php
include '../footer/footer.php';
?>

</body>


</html>