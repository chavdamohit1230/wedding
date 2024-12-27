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
            display: flex;


        }

        .main_sub {

            height: 95vh;
            width: 100%;
            z-index: 0px;
            background-color: black;
            opacity: 0.2;
            position: absolute;
        }

        .main_sub_h3 {
            font-size: 60px;
            color: white;
            position: absolute;
            top: 30%;
            left: 5%;
        }

        .main_sub_h1 {

            position: absolute;
            color: white;
            z-index: 20;
            font-size: 40px;
            top: 45%;
            left: 7%;

        }

        .pre_wed {

            background-color: #f9f8f8;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-top: 5px;
        }

        .photography_studeo_container {

            height: 250vh;
            width: 100%;
            background-color: ;
            display: flex;
            justify-content: left;
            flex-wrap: wrap;
        }

        .photography_studio_card {

            height: 77vh;
            width: 30%;
            background-color: #;
            margin: 25px;

        }

        .img {

            width: 100%;
            height: 60vh;
            border-radius: 15px;
        }

        .photography_studio_card_h1 {

            position: relative;
            top: -20px;
        }

        .photography_studio_card_p {

            position: relative;
            top: -30px;
            font-size: 17px;
        }

        .photography_studio_card_p1 {

            position: relative;
            top: -45px;
            font-size: 17px;
        }

        .photography_studio_card_p2 {

            position: relative;
            top: -57px;
            font-size: 17px;
        }
    </style>



</head>

<body>


    <div class="main_sub"></div>

    <div class="main_img">

        <h3 class="main_sub_h3"> Our Exclusive Wedding</h3>
        <h1 class="main_sub_h1">Photography</h1>

    </div>

    <div class="pre_wed">

        <h1>Pre-Wedding Gallery </h1>

    </div>


    <div class="photography_studeo_container">

        <?php

        $rr = "select * from gallarytable ";

        $res1 = mysqli_query($con, $rr);


        while ($row = mysqli_fetch_assoc($res1)) {



            ?>



            <div class="photography_studio_card">
                <img src="../../../project/admine side/images/<?php echo $row['image']; ?>" alt="" class="img">
                <h2 class="photography_studio_card_h1">wedgrapher studio</h2>
                <p class="photography_studio_card_p">can not travel outside</p>
                <p class="photography_studio_card_p1">team size</p>
                <p class="photography_studio_card_p2">RS 1300lakhs for domestic weedding</p>

            </div>

        <?php } ?>

    </div>

    <!-- -->






</body>
</body>

</html>