<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>service</title>



  <style>
    * {

      margin: 0px;
      padding: 0px;
    }

    .container {

      background-image: url("service.jpg");
      height: 95vh;
      width: 100%;
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container-sub {
      height: 95vh;
      width: 100%;
      z-index: 0;
      position: absolute;
      top: 0;
      background-color: black;
      opacity: 0.4;
    }

    .container_h1 {
      position: relative;
      color: white;
      z-index: 20;
      font-size: 90px;
      margin-top: 40px;
      font-family: "Playfair Display", serif;
      font-weight: 200;
    }

    .container_h3 {

      font-size: 60px;
      color: white;
      margin-bottom: 100px;
      position: absolute;
      font-family: "Playfair Display", serif;
      font-weight: 200;
    }

    .container_h3_sp {
      color: rgb(281, 17, 119);
    }

    .second {
      background-color: white;
      min-height: 120vh;
      height: 310vh;
      width: 100%;
    }

    .contain {
      height: 30vh;
      width: 100%;
      position: relative;
      top: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: ;
    }

    .contain_h1 {

      font-size: 35px;
      font-family: "Playfair Display", serif;
      color: #6B1D4F;
    }

    .card_container {

      height: 220vh;
      width: 100%;
      background-color: ;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    .card {

      height: 77vh;
      width: 35%;
      background-color: white;
      margin: 60px;

    }

    .img {

      height: 37vh;
      width: 90%;
      object-fit: cover;
      position: relative;
      left: 24px;

    }

    .card_header {

      font-size: 35px;
      position: relative;
      margin: 10px;
      left: 21%;
      top: 10px;
      font-family: "Playfair Display", serif;
      font-weight: 200;
      color: #6B1D4F;
    }

    .card_line {

      height: 60px;
      width: 200px;
      position: relative;
      left: 170px;
      top: 10px;
    }

    .card_summury {

      font-size: 17px;
      margin-left: 20px;
      line-height: 25px;
    }


    .btn {

      height: 50px;
      width: 250px;
      font-size: 17px;
      position: relative;
      left: 25%;
      top: 8%;
      background-color: #A6206A;
      color: white;
      border: 1px solid black;
      border-top-left-radius: 40px;
      border-bottom-right-radius: 30px;
    }


    .btn:hover {

      color: white;
      background-color: black;
      border-radius: 20px;
    }

    .chavda {

      height: 120vh;
      width: 100%;
      background-color: rgb(240, 240, 240);

    }

    .special_card_header {

      height: 180px;
      width: 100%;
      position: relative;
      top: 80px;

    }

    .special_card_header_h1 {


      font-size: 60px;
      position: relative;
      margin-left: 31%;
      top: 50px;
      font-family: "Playfair Display", serif;
      font-weight: 200;
      color: #6B1D4F;
    }

    .special_card_header_h1_p {


      font-size: 60px;
      position: relative;
      margin-left: 42%;
      top: 15px;
    }

    .special_card_design {

      height: 450px;
      width: 100%;
      position: absolute;
      margin-top: 140px;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .img2 {

      height: 380px;
      width: 420px;
      position: relative;
    }

    .white_color {

      height: 320px;
      width: 83.1%;
      background-color: rgb(234, 234, 234);
      margin-top: 170px;
      position: relative;
      opacity: 0.9;
      top: 3px;
      left: 8.4%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }

    .special_Card1 {

      width: 33.3%;
      height: 320px;
      background-color: #f0f0f0;
    }

    .special_Card2 {

      width: 33.3%;
      height: 320px;
      background-color: #f0f0f0;
    }

    .special_Card3 {

      width: 33.3%;
      height: 320px;
      background-color: f0f0f0;
    }

    .special_Card1_h1 {

      font-size: 35px;
      position: relative;
      left: 17%;
      top: 14%;
      color: #6B1D4F;
    }

    .special_Card1_p {

      font-size: 18px;
      margin-top: 70px;
      margin-left: 60px;
      line-height: 25px;
      font-family: "Roboto", serif;
      font-weight: 300;
      font-style: italic;
    }

    .special_Card1_sp {

      margin-left: 80px;
    }

    .special_Card_button {

      height: 55px;
      width: 170px;
      font-size: 16px;
      background-color: #6B1D4F;
      color: white;
      margin-top: 30px;
      margin-left: 25%;
      font-weight: 550;

    }
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@416&family=Playwrite+AU+NSW+Guides&family=Playwrite+CO+Guides&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Playwrite+AU+NSW+Guides&family=Playwrite+AU+QLD+Guides&family=Playwrite+CO+Guides&family=Playwrite+US+Modern+Guides&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Vollkorn:ital@1&display=swap');
  </style>
  <!-- <link rel="stylesheet" href="card.css"> -->
  <link rel="stylesheet" href="aos.css">



</head>

<body>
  <div class="main-container">
    <div class="container-sub"></div>
    <div class="container">
      <h3 class="container_h3" data-aos="fade-right" data-aos-delay="3 00" data-aos-mirror="true"
        data-aos-duration="1600"><span class="container_h3_sp">Facilisis</span> Fugit Blanditiis Corrupti</h3>
      <h1 class="container_h1" data-aos="fade-left" data-aos-delay="300" data-aos-mirror="true"
        data-aos-duration="1600">service</h1>
    </div>
  </div>

  <section class="second">

    <div class="contain">
      <h1 class="contain_h1">The opportunities surrounding your wedding day are<br>endless and sometimes overwhelming.
        We can help!</h1>
    </div>
    <div class="card_container">

      <div class="card">
        <img src="p1.jpg" alt="" class="img">
        <h1 class="card_header">Wedding Ceremony</h1>
        <img src="menu-line.png" alt="" class="card_line">
        <p class="card_summury">
          Our wedding agency offers a full range of ceremonies to choose from,<br><span card="card_summry_sp">regardless
            of your design</span>
          preferences
          and religious background</p>

        <button class="btn"> LERN MORE </button>
      </div>


      <div class="card">
        <img src="p1.jpg" alt="" class="img">
        <h1 class="card_header">Wedding Ceremony</h1>
        <img src="menu-line.png" alt="" class="card_line">
        <p class="card_summury">
          Our wedding agency offers a full range of ceremonies to choose from,<br>regardless of your design preferences
          and religious background</p>

        <button class="btn"> LERN MORE </button>
      </div>


      <div class="card">
        <img src="p1.jpg" alt="" class="img">
        <h1 class="card_header">Wedding Ceremony</h1>
        <img src="menu-line.png" alt="" class="card_line">
        <p class="card_summury">
          Our wedding agency offers a full range of ceremonies to choose from,<br>regardless of your design preferences
          and religious background</p>

        <button class="btn"> LERN MORE </button>
      </div>


      <div class="card">
        <img src="p1.jpg" alt="" class="img">
        <h1 class="card_header">Wedding Ceremony</h1>
        <img src="menu-line.png" alt="" class="card_line">
        <p class="card_summury">
          Our wedding agency offers a full range of ceremonies to choose from,<br>regardless of your design preferences
          and religious background</p>

        <button class="btn"> LERN MORE </button>
      </div>



      <div class="card">
        <img src="p1.jpg" alt="" class="img">
        <h1 class="card_header">Wedding Ceremony</h1>
        <img src="menu-line.png" alt="" class="card_line">
        <p class="card_summury">
          Our wedding agency offers a full range of ceremonies to choose from,<br>regardless of your design preferences
          and religious background</p>

        <button class="btn"> LERN MORE </button>
      </div>



      <div class="card">
        <img src="p1.jpg" alt="" class="img">
        <h1 class="card_header">Wedding Ceremony</h1>
        <img src="menu-line.png" alt="" class="card_line">
        <p class="card_summury">
          Our wedding agency offers a full range of ceremonies to choose from,<br>regardless of your design preferences
          and religious background</p>

        <button class="btn"> LERN MORE </button>
      </div>
    </div>
  </section>

  <section>

    <div class="chavda">

      <div class="special_card_header">
        <h1 class="special_card_header_h1">Stay Informed with Us</h1>
        <p class="special_card_header_h1_p">_______</p>
      </div>





      <div class="special_card_design">

        <img src="p8.jpg" alt="" class="img2">
        <img src="p8.jpg" alt="" class="img2">
        <img src="p8.jpg" alt="" class="img2">

      </div>

      <div class="white_color">
        <div class="special_Card1">
          <h1 class="special_Card1_h1">We Love Passion</h1>
          <p class="special_Card1_p">

            &nbsp &nbspLook at the most passionate wedding<br>
            ceremony ever. We wish happiness to the<br>
            <span class="special_Card1_sp">wedding couple!</span>
          </p>
          <button class="special_Card_button">READ MORE</button>

        </div>
        <div class="special_Card2">
          <h1 class="special_Card1_h1">We Love Passion</h1>
          <p class="special_Card1_p">

            &nbsp &nbspLook at the most passionate wedding<br>
            ceremony ever. We wish happiness to the<br>
            <span class="special_Card1_sp">wedding couple!</span>
          </p>
          <button class="special_Card_button">READ MORE</button>


        </div>
        <div class="special_Card3">
          <h1 class="special_Card1_h1">We Love Passion</h1>
          <p class="special_Card1_p">

            &nbsp &nbspLook at the most passionate wedding<br>
            ceremony ever. We wish happiness to the<br>
            <span class="special_Card1_sp">wedding couple!</span>
          </p>
          <button class="special_Card_button">READ MORE</button>


        </div>

      </div>

    </div>


  </section>


  <script src="aos.js">
  </script>
  <script>

    AOS.init();

  </script>


</body>

</html>