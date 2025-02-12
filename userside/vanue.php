<?php

include("connection/connection.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    * {

      margin: 0px;
      padding: 0px;
      /* box-sizing:border-box;
 */
    }

    /* 
    img {
      width: 100%;
    } */

    @font-face {
      font-family: 'dancing';
      src: url('font/DancingScript-Bold');
    }

    .main-container {
      background-color: black;
      height: 650px;
      position: absolute;
      opacity: 0.6;
      width: 100%;
      z-index: ;
    }

    .sub_container {

      height: 650px;
      align-items: center;
      background-image: url("images/vanue/bg.webp");
      display: flex;
      justify-content: center;
      background-repeat: no-repeat;
      background-size: cover;
      object-fit: cover;

    }

    .main_p {

      font-size: 73px;
      color: white;
      font-family: 'dancing';
      position: absolute;
    }

    .main_p_sp {

      color: rgb(281, 17, 119);
    }

    .main_p1 {

      font-size: 55px;
      color: white;
      position: absolute;
      font-family: 'dancing';
      margin-top: 8%;
    }

    .why_bookvanue_container {

      height: 70vh;
      width: 100%;
      margin-top: 1%;
      background: #f0f0f0;
    }

    .why_bookvanue {

      height: 40vh;
      width: 100%;
    }

    .why_bookvanue_Calass {

      height: 15vh;
      width: 60%;

      margin-left: 21%;
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .why_bookvanue_Calass_h1 {
      color: #9b2172;
      font-family: 'dancing';
      font-size: 50px;


    }

    .description_whybook_vanue {

      height: 25vh;
      width: 80%;
      margin-left: 11%;
    }

    .description_whybook_vanue_P {
      letter-spacing: .7px;
      font-size: 18px;
      justify-items: center;
      line-height: 24px;
      text-align: center;

    }

    .top_city_vanue {

      height: 25vh;
      width: 57%;
      margin-left: 22%;
      position: relative;
      bottom: 30px;
    }

    .top_city_vanue_h3 {
      color: #9b2172;
      font: normal normal 300 38px / 73px Montserrat;
      font-size: 40px;
      font-weight: 600;
      margin-bottom: 15px;
      text-align: center;
      /* text-transform: uppercase; */
      font-family: 'dancing';

    }

    .top_city_vanue_p {
      font: 700 20px Montserrat;
      text-align: center;
      letter-spacing: .1px;
      line-height: 30px;
      ;
    }


    .wave {

      height: 100%;
      width: 100%;
      background: ;
      position: relative;
      margin-top: 10px;
      justify-content: left;
      align-items: left;
      display: flex;
      flex-wrap: wrap;
    }

    svg {
      position: absolute;
      bottom: 0;
      left: 0;
    }

    /* card css */
    .card_container {
      height: 600px;
      width: 440px;
      background-color: white;
      margin: 18px;
      left: 45px;
      top: 12px;
      box-shadow: 1px 1px 6px 1px;
      border-radius: ;
      position: relative;
      border-radius: 20px;


    }

    .card_img {

      height: 400px;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;

    }

    .card_img1 {
      width: 90%;
      height: 360px;
      object-fit: cover;
      position: relative;
      border-radius: 10px 10px 0 0;
    }

    .card_header {

      width: 86%;
      height: 60px;
      background-color: #6B1D4F;
      color: white;
      padding: 10px;
      border-bottom: 1px solid #ddd;
      position: relative;
      left: 20px;
    }

    .card_body {
      padding: 20px;
    }


    .mm {

      background: #f9f9f9;
      width: 100%;
      margin-top: 25px;

    }

    a {

      text-decoration: none;
      color: black;
    }

    .location {
      color: midnightblue;
    }

    .c1-star {

      padding-left: 15px;
    }

    .star {
      color: green;
    }

    .ruppi {

      padding-left: 24px;
    }

    .massage {
      margin-top: 20px;
      height: 40px;
      width: 160px;
      font-size: 15px;
      color: white;
      background-color: #A6206A;
      border: none;
      margin-left: 12px;
      white: space 1px;
    }

    .massage:hover,
    .contect:hover {
      border-radius: 20px;
    }

    .mail {
      padding-right: 12px;
    }

    .sp-contect {
      padding-left: 34px;
    }

    .phone-i {
      padding-right: 5px;
    }

    .contect {
      height: 40px;
      width: 160px;
      background-color: #A6206A;
      border: none;
      color: whitesmoke;
      font-size: 17px;
      margin-left: 17px;
    }

    .space {
      height: 40px;
      width: 100%;
    }
  </style>
  <link rel="stylesheet" href="aos/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
  <?php
  include("navbar.php");
  ?>

  <div class="container">
    <div class="main-container"></div>
    <div class="sub_container">

      <p class="main_p" data-aos="fade-right" data-aos-delay="300" data-aos-mirror="true" data-aos-duration="1600"><span
          class="main_p_sp">welcome</span> to incredible india's</p>
      <p class="main_p1" data-aos="fade-left" data-aos-delay="300" data-aos-mirror="true" data-aos-duration="1600">
        destination <span class="main_p_sp">wedding</span> vanue </p>


    </div>
  </div>
  <div class="why_bookvanue_container">
    <div class="why_bookvanue">
      <div class="why_bookvanue_Calass">
        <h1 class="why_bookvanue_Calass_h1" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Why Book
          Destination Vanue ?</h1>
      </div>
      <div class="description_whybook_vanue">
        <p class="description_whybook_vanue_P" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
          Booking a destination wedding venue offers a unique and memorable experience by combining the beauty of a
          special location with the joy of your big day. These venues often provide stunning backdrops, whether it's a
          sandy beach, a charming countryside, or an elegant historic site, enhancing the atmosphere and photographs.
          Many destination venues offer all-inclusive packages, simplifying planning by covering accommodations,
          catering, and event coordination. Additionally, destination weddings typically lead to a smaller, more
          intimate guest list, allowing you to celebrate with close family and
          friends.
        </p>
      </div>
    </div>
    <div class="top_city_vanue">
      <h3 class="top_city_vanue_h3" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Top Destination
        Wedding City's</h3>
      <p class="top_city_vanue_p" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Select a city and
        see whats in store for you. 7Vachan brings to you a wide range of
        venue options for your big day.</p>
    </div>
  </div>
  <div class="wave">

    <?php

    $query = "select * from vanue";

    $result = mysqli_query($con, $query);

    if (!$result) {

    }



    while ($row = mysqli_fetch_array($result)) {

      // echo $row['vanueid'];
    

      ?>




      <!-- <?php echo "<a href='ananta.php?vid=$row[vanueid]'>"; ?> -->
      <div class="card_container" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
        <div class="card_img">
          <img src="../admine side/vanueimage/<?php echo $row['vanueimage']; ?>" alt="" class="card_img1">
        </div>
        <div class="card_header">
          <h2><?php echo $row['vanuename']; ?></h2>
          <p>From <?php echo $row['location']; ?> </p>
        </div>
        <div class="card_body">
          <p> <i class="fa-solid fa-location-dot fa-bounce location"></i> Middle
            <?php echo $row['location']; ?>
            <span class="c1-star"> <i class="fa-regular fa-star fa-shake star"></i>
              <?php echo $row['rating']; ?>
              (reviws)</span>
            <i class="fa-solid fa-indian-rupee-sign fa-beat ruppi"></i>
            <?php echo $row['price']; ?> Lakhs
          </p>
          <p><button class="massage"><i class="fa-solid fa-envelope mail"></i>Send Massage</button><span
              class="sp-contect"><button class="contect"><i class="fa-solid fa-phone phone-i"></i>
                view contect</button></span></p>
        </div>


      </div>
      <?php "</a>"; ?>

    <?php } ?>
    <div class="space"></div>
  </div>

  <?php
  include("footer/footer.php");
  ?>
  <script src="aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>


</html>