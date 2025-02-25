<?php
ob_start();
include("connection/connection.php");
include("navbar.php");
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
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

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
      margin: 0 auto;
      display: flex;
      align-items: center;
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
      margin: 0 auto;
    }

    .description_whybook_vanue_P {
      letter-spacing: .7px;
      font-size: 18px;
      line-height: 24px;
      text-align: center;
    }

    .top_city_vanue {
      height: 25vh;
      width: 57%;
      margin: 0 auto;
      position: relative;
      bottom: 30px;
    }

    .top_city_vanue_h3 {
      color: #9b2172;
      font-family: 'dancing';
      font-size: 40px;
      font-weight: 600;
      margin-bottom: 15px;
      text-align: center;
    }

    .top_city_vanue_p {
      font-size: 20px;
      text-align: center;
      letter-spacing: .1px;
      line-height: 30px;
    }

    .wave {
      height: 100%;
      width: 100%;
      position: relative;
      margin-top: 10px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    svg {
      position: absolute;
      bottom: 0;
      left: 0;
    }

    /* ---------- Modified Card CSS ---------- */
    .card_container {
      width: 440px;
      background: #fff;
      margin: 18px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
      border-radius: 20px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card_container:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .card_img {
      height: 300px;
      /* Image height reduced from 400px to 300px */
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .card_img1 {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .card_container:hover .card_img1 {
      transform: scale(1.05);
    }

    .card_header {
      width: 100%;
      background: linear-gradient(45deg, #A6206A, #D7548F);
      color: #fff;
      padding: 15px 20px;
      text-align: center;
    }

    .card_header h2 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }

    .card_header p {
      margin: 5px 0 0;
      font-size: 16px;
    }

    .card_body {
      padding: 20px;
    }

    /* Horizontal info section with slide-in animation */
    .card_info {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-bottom: 20px;
      animation: slideIn 0.5s ease-out;
    }

    .info_item {
      display: flex;
      align-items: center;
      font-size: 16px;
      color: #333;
      transition: transform 0.3s ease;
    }

    .info_item i {
      margin-right: 5px;
      color: #A6206A;
    }

    .info_item:hover {
      transform: scale(1.1);
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-20px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .card_buttons {
      text-align: center;
    }

    .card_buttons button {
      background: #A6206A;
      color: #fff;
      border: none;
      padding: 10px 25px;
      font-size: 16px;
      border-radius: 25px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.3s ease;
      margin: 0 10px;
    }

    .card_buttons button:hover {
      background: #821750;
      transform: translateY(-3px);
    }

    /* ---------- End Modified Card CSS ---------- */
    .space {
      height: 40px;
      width: 100%;
    }

    a {
      text-decoration: none;
      color: black;
    }
  </style>
  <link rel="stylesheet" href="aos/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="main-container"></div>
    <div class="sub_container">
      <p class="main_p" data-aos="fade-right" data-aos-delay="300" data-aos-mirror="true" data-aos-duration="1600">
        <span class="main_p_sp">welcome</span> to incredible india's
      </p>
      <p class="main_p1" data-aos="fade-left" data-aos-delay="300" data-aos-mirror="true" data-aos-duration="1600">
        destination <span class="main_p_sp">wedding</span> vanue
      </p>
    </div>
  </div>
  <div class="why_bookvanue_container">
    <div class="why_bookvanue">
      <div class="why_bookvanue_Calass">
        <h1 class="why_bookvanue_Calass_h1" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
          Why Book Destination Vanue ?
        </h1>
      </div>
      <div class="description_whybook_vanue">
        <p class="description_whybook_vanue_P" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
          Booking a destination wedding venue offers a unique and memorable experience by combining the beauty of a
          special location with the joy of your big day. These venues often provide stunning backdrops, whether it's a
          sandy beach, a charming countryside, or an elegant historic site, enhancing the atmosphere and photographs.
          Many destination weddings typically lead to a smaller, more intimate guest list, allowing you to celebrate
          with close family and friends.
        </p>
      </div>
    </div>
    <div class="top_city_vanue">
      <h3 class="top_city_vanue_h3" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
        Top Destination Wedding City's
      </h3>
      <p class="top_city_vanue_p" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
        Select a city and see whats in store for you. 7Vachan brings to you a wide range of venue options for your big
        day.
      </p>
    </div>
  </div>
  <div class="wave">
    <?php
    $query = "select * from vanue";
    $result = mysqli_query($con, $query);
    if (!$result) {
      // Handle error if needed
    }
    while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="card_container" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
        <div class="card_img">
          <img src="../admine side/vanueimage/<?php echo $row['vanueimage']; ?>" alt="" class="card_img1">
        </div>
        <div class="card_header">
          <h2><?php echo $row['vanuename']; ?></h2>
          <p>From <?php echo $row['location']; ?></p>
        </div>
        <div class="card_body">
          <div class="card_info">
            <div class="info_item"><i class="fa-solid fa-location-dot fa-bounce"></i>
              <span><?php echo $row['location']; ?></span>
            </div>
            <div class="info_item"><i class="fa-regular fa-star fa-shake"></i> <span><?php echo $row['rating']; ?>
                (reviws)</span></div>
            <div class="info_item"><i class="fa-solid fa-indian-rupee-sign fa-beat"></i>
              <span><?php echo $row['price']; ?> Lakhs</span>
            </div>
          </div>
          <div class="card_buttons">
            <button class="massage"><i class="fa-solid fa-envelope mail"></i>Send Massage</button>
            <button class="contect"><i class="fa-solid fa-phone phone-i"></i> view contect</button>
          </div>
        </div>
      </div>
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