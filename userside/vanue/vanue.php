<?php


$servername = "localhost";
$username = "root";
$pass = "";

$con = mysqli_connect($servername, $username, $pass);

if (!$con) {
  echo "not connect";
}
$db = mysqli_select_db($con, "project");

if (!$db) {
  echo "not connect";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="aos.css" />
  <style>
    * {

      margin: 0px;
      padding: 0px;
      /* box-sizing:border-box;
 */
    }

    img {
      width: 100%;
    }

    .main-container {
      background-color: black;
      height: 650px;
      position: absolute;
      opacity: 0.3;
      width: 100%;
      z-index: ;
    }

    .sub_container {

      height: 650px;
      align-items: center;
      background-image: url(main2.jpeg);
      display: flex;
      justify-content: center;
      background-repeat: no-repeat;
      background-size: cover;

    }

    .main_p {

      font-size: 45px;
      color: white;
      position: absolute;
      /* <!-- margin-bottom:190px;-> */
    }

    .main_p {
      background: linear-gradient(pink, white);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .wave {

      height: 100%;
      width: 100%;
      background: #f0f0f0;
      position: relative;
      margin-top: 12px;
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
      box-shadow: 1px 1px 8px 1px;
      border-radius:
        position: relative;


    }

    .card_img {

      height: 400px;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;

    }

    img {
      width: 90%;
      height: 360px;
      object-fit: cover;
      position: relative;
      border-radius: 10px 10px 0 0;
    }

    .card_header {

      width: 86%;
      height: 50px;
      background-color: #123;
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
      margin-top: 12px;
      height: 40px;
      width: 160px;
      font-size: 15px;
      color: white;
      background-color: rgb(281, 17, 119);
      border: none;
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
      background-color: rgb(0, 154, 9);
      border: none;
      color: whitesmoke;
      font-size: 17px;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <div class="container">
    <div class="main-container"></div>
    <div class="sub_container">

      <p class="main_p">welcome to incredible india's destination wedding vanue.. </p>


    </div>
  </div>
  <div class="wave">
    <!-- 
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ee88aa" fill-opacity="1" d="M0,256L1440,32L1440,320L0,320Z"></path>
    </svg>
 -->

    <?php

    $query = "select * from vanue";

    $result = mysqli_query($con, $query);

    if (!$result) {

    }



    while ($row = mysqli_fetch_array($result)) {
      ?>


      <a href="../../../../<?php echo $row['vanueimage']; ?>" ;>
        <div class="card_container">
          <div class="card_img">
            <img src="../../admine side/vanueimage/<?php echo $row['vanueimage']; ?>" alt="">
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
                (7reviws)</span>
              <i class="fa-solid fa-indian-rupee-sign fa-beat ruppi"></i> <?php echo $row['price']; ?>
            </p>
            <p><button class="massage"><i class="fa-solid fa-envelope mail"></i>Send Massage</button><span
                class="sp-contect"><button class="contect"><i class="fa-solid fa-phone phone-i"></i>
                  view contect</button></span></p>
          </div>
      </a>
    </div>


  <?php } ?>



</body>

</html>

<!-- <script src="aos.js"></script>
  <script>
    AOS.init();
  </script> -->