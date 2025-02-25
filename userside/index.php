<?php include 'navbar.php'

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {

            /* font-family: Helvetica Neue, Helvetica, Arial, sans-serif; */
            /* font-size: 14px; */
            margin: 0;
            padding: 0;
        }

        @font-face {
            font-family: 'dancing';
            src: url('font/DancingScript-Bold');
        }

        swiper-container {
            width: 100%;
            height: 90%;

        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide::after {

            content: '';
            width: 100%;
            height: 100%;
            opacity: 0.3;
            background: black;
            position: absolute;
        }

        .slider_sub {
            height: 100%;
            width: 100%;
            background-color: black;
            position: absolute;
            opacity: 0.6;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: fill;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 48%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            font-size: 20px;
            z-index: 10;
        }

        .text-overlay_h1 {
            margin: 0px;
            letter-spacing: 0.1rem;
            font-family: 'dancing';
            /* font-family: Montserrat; */
            line-height: 1.167;
            text-align: center;
            font-size: 53px;
            color: white;
        }

        .text-overlay_p {
            margin: 0px;
            font-size: 1rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            color: white;

        }

        swiper-container {
            margin-left: auto;
            margin-right: auto;
        }

        .why_choose {

            height: 23%;
            width: 100%;
            margin: 0px;
            /* background-color: #f9f9f9; */
            background: white;
        }

        .why_choose_h1 {
            margin: 0px;
            font-size: 2.5rem;
            font-weight: 600;
            position: relative;
            top: 30px;
            letter-spacing: 0.05rem;
            /* font-family: Montserrat; */
            line-height: 1.2;
            text-align: center;
            color: rgb(155, 33, 114);
        }

        .why_choose_p {

            font-size: 1.35rem;
            font-weight: 100;
            letter-spacing: 0.1rem;
            font-family: Montserrat;
            line-height: 1.43;
            margin-top: 40px;
            text-align: center;
            color: rgb(96, 91, 91);
        }

        .why_chose_card {

            height: 45%;
            width: 100%;
            background-color: white;
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
        }

        .choose_card1 {
            height: 75%;
            width: 26%;
            /* background-color: blue; */
            box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px, rgba(0, 0, 0, 0.12) 0px 1px 8px 0px;
        }

        .choose_card1_header {

            height: 13%;
            margin-top: 40px;
            width: 100%;
            /* background-color: yellow; */
        }

        .choose_card1_header_h3 {
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 0.05rem;
            font-family: Montserrat;
            line-height: 1.167;
            text-align: center;
            color: rgb(155, 33, 114);
            position: relative;
            margin-top: 5px;
        }

        .choose_card1_content {
            /* background-color: red; */
            height: 75%;
            width: 82%;
            position: relative;
            left: 8%;
        }

        .choose_card1_content_p {
            margin: 0px;
            font-size: 1rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            margin-top: 5px;
        }

        .event_Card {
            height: 47%;
            width: 100%;
            background-color: white;
            display: flex;
            gap: 30px;
            justify-content: center;
        }

        .event_cardimg_main {
            height: 100%;
            width: 16%;
            /* // background-color: pink; */
            display: flex;
            position: relative;

        }

        .event_Card_img {

            height: 100%;
            width: 100%;
            border-radius: 6px;
        }

        .image-text {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            font-family: Arial, sans-serif;
        }

        .img_text_overlay_h4 {
            margin: 220px 0px 0px;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0.05rem;
            font-family: Montserrat;
            line-height: 1.235;
            text-align: center;
            color: rgb(255, 255, 255);
        }

        .img2_text_overlay_h4 {
            margin: 180px 0px 0px;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0.05rem;
            font-family: Montserrat;
            line-height: 1.235;
            text-align: center;
            color: rgb(255, 255, 255);
            padding-left: 40px;
            padding-right: 40px;
        }

        .img2_text_overlay_h6 {
            margin: 0px;
            font-size: 1.2rem;
            position: relative;
            transform: translatey(-100%);
            left: 12%;
            font-family: Montserrat;
            font-weight: 500;
            line-height: 1.6;
            color: rgb(255, 255, 255);
        }

        .wedding_content_container {

            height: 65%;
            margin-top: 2%;
            width: 100%;
            /* background-color: blue; */
            display: flex;
        }

        .wedding_content {
            height: 100%;
            width: 55%;
            /* background-color: pink; */
            background-color: rgb(57, 17, 44);
        }

        .wedding_image {

            height: 100%;
            width: 45%;
            position: relative;
            /* background-color: maroon; */

        }

        .weedding_sub_content {
            height: 70%;
            width: 80%;
            position: relative;
            top: 17%;
            left: 9%;

        }

        .wedding_image_img {
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            object-fit: fill;
            background-size: cover;
        }

        .wedding_sub_content_h4 {
            margin: 0px;
            font-size: 2.3rem;
            font-weight: 700;
            letter-spacing: 0.05rem;
            font-family: Montserrat;
            line-height: 1.2;
            color: rgb(199, 111, 170);
        }

        .wedding_content_main_container {

            height: 35%;
            width: 100%;
        }

        .wedding_content_main_container_p {
            margin-top: 25px;
            font-size: 1rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat;
            font-weight: 400;
            line-height: 1.5;
            color: rgb(255, 255, 255);
        }

        .wedding_main_conteiner_p1 {
            color: white;
            margin: 20px 0px 0px;
            font-size: 1.2rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat;
            line-height: 1.5;
            color: rgb(255, 255, 255);
            font-weight: 600;
        }

        .wedding_main_containe_city {
            font-size: 10px;
            color: rgb(199, 111, 170);
            word-spacing: 5px;
            margin-top: 12px;
        }

        .developer_container {
            height: 40%;
            width: 100%;
            position: relative;
            top: 12px;
            /* background-color: yellow; */

        }

        .developer_container_heading {
            height: 20%;
            width: 100%;
            /* background-color: pink; */
            display: flex;
            align-items: center;
            position: relative;
            top: 12%;
            justify-content: center;
        }

        .developer_container_heading_h3 {
            font-size: 35px;
            position: absolute;
            /* margin-top: 61px; */
            */ letter-spacing: 0.05rem;
            font-family: Montserrat;
            color: rgb(155, 33, 114);

        }

        .developer_comtainer_p {
            height: 40%;
            width: 90%;
            bottom: 12px;
            left: 5%;
            top: 16%;
            position: relative;
            /* / background: yellow; */
        }

        .developer_containerp {
            font-size: 1.2rem;
            letter-spacing: 0.rem;
            font-family: Montserrat;
            line-height: 1.4;
            position: relative;
            top: 15px;
            text-align: center;
        }

        .developer_Card_container {
            height: 60%;
            width: 100%;
            /* background: yellow; */

        }

        .developer_Card_heading {
            height: 8%;
            width: 100%;
            align-items: center;
            position: absolute;
            display: flex;
            justify-content: center;
        }

        .developer_Card_heading_h1 {

            margin: 0px;
            margin-bottom: 4%;
            font-family: Montserrat;
            color: rgb(155, 33, 114);
        }

        .developer_card_main_container {

            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {

            height: 70%;
            width: 20%;
            position: relative;
            top: 2%;
            margin-left: 40px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px, rgba(0, 0, 0, 0.12) 0px 1px 8px 0px;
            border-radius: 5px;
        }

        .card_img {
            width: 100%;
            border-radius: 5px;
            height: 85%;
            object-fit: fill;
        }

        .developernaem {
            height: 14%;
            width: 100%;
            position: relative;
            bottom: 3px;
            background-color: rgb(57, 17, 44);
        }

        .developername_h4 {
            margin: 0PX;
            font-size: 25px;
            text-align: center;
            position: absolute;
            top: 5px;
            font-family: Montserrat;
            left: 17%;
            text-align: center;
            color: white;
        }

        .popular_vanue_container {
            height: 100%;
            width: 100%;
            /* background-color: blue; */
        }

        .popular_vanue_container_heading_div {

            height: 15%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background: maroon; */
        }

        .popular_vanue_container_heading_h1 {
            font-family: Montserrat;
            color: rgb(155, 33, 114);
            margin: 0px;
            position: absolute;
            font-size: 40px;
        }

        .popular_vanue_Card {

            height: 78%;
            width: 100%;
            /* background-color: pink; */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;

        }

        .vanue_card {
            height: 55%;
            width: 20%;
            position: relative;
            top: 1%;
            margin: 18px;
            margin-left: 0px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px, rgba(0, 0, 0, 0.12) 0px 1px 8px 0px;
            border-radius: 5px;
        }

        .vanuename {
            height: 14%;
            width: 100%;
            position: relative;
            bottom: 4px;
            align-items: center;
            justify-content: center;
            display: flex;
            text-align: center;
            background-color: rgb(57, 17, 44);

        }

        .vanuename_h4 {
            margin: 0PX;
            font-size: 25px;
            text-align: center;
            position: absolute;
            top: 10px;
            font-family: Montserrat;
            /* left: 25%; */
            text-align: center;
            color: white;
        }

        .advertisement {
            height: 50%;
            margin-top: %;
            width: 100%;
            /* background-color: blue; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .adverticement_img {
            height: 75%;
            width: 85%;
        }

        .service_container {
            height: 80%;
            width: 100%;
            /* background-color: pink; */
            margin-top: 15%;
            position: relative;
        }

        .third_section_h1 {

            font-size: 55px;
            /* margin-left: 28%; */
            text-align: center;
            margin-top: 18%;
            font-family: "Playfair Display", serif;
            font-weight: 200;
            color: #6B1D4F;

        }

        .third_section_p {

            margin-left: 43%;
            margin-top: 1%;

        }

        .third_section_p1 {

            margin-left: 37%;
            margin-top: 3%;
            font-size: 23px;
            font-family: "Vollkorn", serif;
            color: #6B1D4F;
            font-family: "Vollkorn", serif;
        }

        .third_section_function {
            margin-top: 2%;
            height: 55%;
            width: 100%;
            position: absolute;
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
        }

        .third_section_card {

            height: 80%;
            width: 20%;
            background-color: white;
            margin-left: 9.5%;
            position: relative;

        }

        .third_section_card_img {
            height: 150px;
            width: 140px;
            position: relative;
            bottom: 19PX;
            left: 28%;

        }

        .third_section_card_h1 {
            position: relative;
            bottom: 3.2%;
            margin-left: 40px;
            font-size: 26px;
            font-family: "Playfair Display", serif;
            font-weight: 200;
            color: #6B1D4F;
        }

        .third_section_card_p {
            letter-spacing: 0.1rem;
            font-family: Montserrat;
            font-weight: 400;
            line-height: 1.5;
            padding-top: 8px;
            text-align: center;
            color: #6B1D4F;

        }

        .save-time {
            margin-left: 32%;
        }

        @font-face {
            font-family: 'myfont';
            src: url('Parisienne-Regular');
            font-weight: normal;
            font-style: normal;
        }
    </style>

</head>

<body>

    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" loop="true"
        autoplay="true">

        <swiper-slide><img src="images/gallery/background.webp" alt="">
            <div class="text-overlay">
                <h1 class="text-overlay_h1">Your Wedding Is Our Wedding Too!</h1>
                <p class="text-overlay_p">When In Need, A Wedorniator Is There Indeed.</p>
            </div>
        </swiper-slide>
        <swiper-slide><img src="images/about/mm1.jpg" alt="">
            <div class="text-overlay">
                <h1 class="text-overlay_h1">Your Wedding Is Our Wedding Too!</h1>
                <p class="text-overlay_p">When In Need, A Wedorniator Is There Indeed.</p>
            </div>
        </swiper-slide>
        </div>
    </swiper-container>
    <div class="why_choose">
        <h1 class="why_choose_h1">WHY SAPTAPADI?</h1>
        <p class="why_choose_p">Because Dreams Come True..</p>
    </div>
    <div class="why_chose_card">
        <div class="choose_card1">
            <div class="choose_card1_header">
                <h3 class="choose_card1_header_h3">PARTNER PERFECT PACT</h3>
            </div>
            <div class="choose_card1_content">
                <p class="choose_card1_content_p">Our Pre-screened venue and photography vendors are onboarded just for
                    you, not because they do
                    justice to their work but believe in crafting memorable events for you on your D-Day.</p>
            </div>
        </div>
        <div class="choose_card1">
            <div class="choose_card1_header">
                <h3 class="choose_card1_header_h3">THE WEDORDINATOR</h3>
            </div>
            <div class="choose_card1_content">
                <p class="choose_card1_content_p">A dedicated wedding expert, to assist you through out the saptapadi
                    wedding journey. Make the best decisions, learn about our finest packages & prices and get a helping
                    hand for quick & easy bookings.</p>
            </div>
        </div>
        <div class="choose_card1">
            <div class="choose_card1_header">
                <h3 class="choose_card1_header_h3">POWER TO YOU</h3>
            </div>
            <div class="choose_card1_content">
                <p class="choose_card1_content_p">A Unique set-up, tailored just for you! Create packages based on your
                    requirements, shortlist from the selected lot, book at ease and get closer to your dream wedding
                    celebrations…</p>
            </div>
        </div>
    </div>
    <div class="event_Card">
        <div class="event_cardimg_main">
            <img src="images/evetn_card_vanue.jpg" class="event_Card_img" alt="">
            <div class="image-text">
                <h4 class="img_text_overlay_h4">BREATHTAKING VENUES</h4>
            </div>
        </div>
        <div class="event_cardimg_main">
            <img src="images/mehendi-artists.png" class="event_Card_img" alt="">
            <div class="image-text">
                <h6 class="img2_text_overlay_h6">Comming Soon..</h6>
                <h4 class="img2_text_overlay_h4">MEHENDI ARTISTS</h4>
            </div>
        </div>
        <div class="event_cardimg_main">
            <img src="images/makeup-artists.jpg" class="event_Card_img" alt="">
            <div class="image-text">
                <h6 class="img2_text_overlay_h6">Comming Soon..</h6>
                <h4 class="img2_text_overlay_h4">MAKEUP ARTISTS</h4>
            </div>
        </div>
        <div class="event_cardimg_main">
            <img src="images/destination-wedding.jpg" class="event_Card_img" alt="">
            <div class="image-text">
                <h4 class="img2_text_overlay_h4">DESTINATION WEDDINGS</h4>
            </div>
        </div>
    </div>
    <div class="wedding_content_container">
        <div class="wedding_content">
            <div class="weedding_sub_content">
                <h4 class="wedding_sub_content_h4">MAKE WEDDING DREAMS COME TO LIFE</h4>
                <div class="wedding_content_main_container">
                    <p class="wedding_content_main_container_p">
                        Team saptapadi works with you as your family member to make sure you are refreshed & relaxed on
                        your big day. We take pride in bringing your dream wedding venues, photographers, gifts & more
                        services under one roof, giving you a flawless wedding experience with great savings. Celebrate
                        wedding vows at it’s best!
                    </p>
                    <p class="wedding_main_conteiner_p1">Season’s Best Destinations</p>
                    <p class="wedding_main_containe_city">MUMBAI UDAIPUR GOA KERALA</p>
                </div>
            </div>

        </div>
        <div class="wedding_image">
            <img src="images/maincouple.png" class="wedding_image_img" alt="">
        </div>
    </div>
    <div class="developer_container">
        <div class="developer_container_heading">
            <h3 class="developer_container_heading_h3">
                "Crafting Timeless Wedding Experiences"
            </h3>
        </div>
        <div class="developer_comtainer_p">
            <p class="developer_containerp">
                Every love story is unique, and your wedding should be no different. As a wedding developer, I
                specialize in transforming your vision into a celebration that reflects your style, personality, and
                dreams. From breathtaking décor to seamless planning, I blend creativity with precision to design
                moments that resonate with joy and elegance. Together, let’s create a day that not only celebrates your
                love but also leaves a lasting impression on everyone who witnesses it. 💍✨
            </p>
        </div>
    </div>
    <div class="developer_Card_container">
        <div class="developer_Card_heading">
            <h1 class="developer_Card_heading_h1 ">Meet Our Developer Team</h1>
        </div>
        <div class="developer_card_main_container">
            <div class="card">
                <img src="images/Wedding-Event-Plannerp1.jpg" class="card_img" alt="">
                <div class="developernaem">
                    <h4 class="developername_h4">
                        Richita choudhriy
                    </h4>
                </div>
            </div>

            <div class="card">
                <img src="images/planerman.jpg" class="card_img" alt="">
                <div class="developernaem">
                    <h4 class="developername_h4">
                        Tanus Shekhavat
                    </h4>
                </div>
            </div>
            <div class="card">
                <img src="images/planner2.jpg" class="card_img" alt="">
                <div class="developernaem">
                    <h4 class="developername_h4">
                        Yashika Bhatiya
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="popular_vanue_container">
        <div class="popular_vanue_container_heading_div">
            <h1 class="popular_vanue_container_heading_h1">Most Popular Vanue</h1>
        </div>
        <div class="popular_vanue_Card">

            <div class="vanue_card">
                <img src="images/vanue/card1.jpg" class="card_img" alt="">
                <div class="vanuename">
                    <h4 class="vanuename_h4">
                        Rajasthan
                    </h4>
                </div>
            </div>

            <div class="vanue_card">
                <img src="images/vanue/card2.webp" class="card_img" alt="">
                <div class="vanuename">
                    <h4 class="vanuename_h4">
                        Raipur
                    </h4>
                </div>
            </div>

            <div class="vanue_card">
                <img src="images/vanue/udaivilas.jpg" class="card_img" alt="">
                <div class="vanuename">
                    <h4 class="vanuename_h4">
                        Udayvilas
                    </h4>
                </div>
            </div>

            <div class="vanue_card">
                <img src="images/vanue/goa.jpg" class="card_img" alt="">
                <div class="vanuename">
                    <h4 class="vanuename_h4">
                        Shikhra Resort
                    </h4>
                </div>
            </div>

            <div class="vanue_card">
                <img src="images/vanue/jaisalmer.webp" class="card_img" alt="">
                <div class="vanuename">
                    <h4 class="vanuename_h4">
                        jaisalmer
                    </h4>
                </div>
            </div>


            <div class="vanue_card">
                <img src="images/vanue/tricol-1.jpg" class="card_img" alt="">
                <div class="vanuename">
                    <h4 class="vanuename_h4">
                        Beach
                    </h4>
                </div>
            </div>

        </div>
    </div>
    <div class="service_container">
        <h1 class="third_section_h1" data-aos="zoom-in" data-aos-duration="1600">Everything You Need to Start</h1>
        <p class="third_section_p">__________________</p>
        <p class="third_section_p1">Your wedding planning adventure</p>
        <div class="third_section_function">
            <div class="third_section_card" data-aos="fade-up" data-aos-duration="1200">
                <img src="images/about/save-time.svg" class="third_section_card_img" alt="">
                <h1 class="third_section_card_h1 save-time">Save-time</h1>
                <p class="third_section_card_p">
                    Within 3 days, the 7Vachan team will<br> give you a customized list of venues<br> for the
                    required dateswithin your<br> budget.
                </p>
            </div>
            <div class="third_section_card" data-aos="fade-up" data-aos-duration="1200">
                <img src="images/about/best-price.svg" class="third_section_card_img img2" alt="">
                <h1 class="third_section_card_h1">Unbelievable Prices</h1>
                <p class="third_section_card_p">
                    You can save upto 35% on destination <br>venues with the help of 7Vachan,<br>dream destination
                    wedding becomes<br> more affordable!
                </p>
            </div>
            <div class="third_section_card" data-aos="fade-up" data-aos-duration="1200">
                <img src="images/about/save-money.svg" class="third_section_card_img" alt="">
                <h1 class="third_section_card_h1">Unimaginable Savings</h1>
                <p class="third_section_card_p">
                    Be it your dream venue or wedding<br>services, we promise to fetch you jaw<br> dropping deals
                    from professional<br>vendors across India.
                </p>
            </div>

        </div>
    </div>
    <div class="advertisement">
        <img src="images/advertice.png" class="adverticement_img" alt="">
    </div>
    <?php include 'footer/footer.php'; ?>
    <script src="swiper.js"></script>
</body>

</html>