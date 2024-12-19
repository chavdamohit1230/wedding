<?php

include("connection.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery.com</title>

    <link rel="stylesheet" href="gallery.css">


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

        $rr = "select * from gallrytable ";

        $res1 = mysqli_query($con, $rr);


        while ($row = mysqli_fetch_assoc($res1)) {



            ?>

            <!-- <img  alt="" class="image1"> -->

            -->
            <div class="photography_studio_card">
                <img src="../../../project/admine side/images/<?php echo $row['name']; ?>" alt="" class="img">
                <h2 class="photography_studio_card_h1">wedgrapher studio</h2>
                <p class="photography_studio_card_p">can not travel outside</p>
                <p class="photography_studio_card_p1">team size</p>
                <p class="photography_studio_card_p2">RS 1300lakhs for domestic weedding</p>

            </div>

        <?php } ?>

    </div>

    <!-- -->






</body>

</html>