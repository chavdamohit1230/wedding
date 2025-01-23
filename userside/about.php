<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page </title>

    <style>
        * {

            margin: 0px;
            padding: 0px;
        }


        .cover_container {
            height: 700px;
            width: 100%;
            background-color: black;
            position: relative;
            opacity: 0.5;

        }

        .conteiner {
            height: 700px;
            width: 100%;
            background-image: url("images/about/sc6.jpg");
            background-size: cover;
            position: absolute;

        }

        .container_p1 {
            color: white;
            z-index: 20;
            margin-left: 14%;
            margin-top: 15%;
            font-size: 80px;
            position: relative;
            color: rgb(281, 17, 119);
            font-family: "Playfair Display", serif;
            font-weight: 200;

        }

        .container_p1_sp {
            color: white;
        }

        .container_p2 {
            color: white;
            z-index: 20;
            margin-left: 14%;
            margin-top: 1%;
            font-size: 20px;
            position: relative;
        }

        .first_section {
            height: 1380px;
            width: 100%;
            position: relative;
            top: 2px;
        }

        .first_Section_Detail {

            height: 400px;
            width: 100%;
            background-color: white;
            position: relative
        }

        .first_Section_Detail_h1 {

            font-size: 40px;
            margin-left: 9%;
            position: absolute;
            margin-top: 120px;
            line-height: 55px;
            font-family: "Playfair Display", serif;
            font-weight: 200;
            color: #6B1D4F;
        }

        .first_Section_Detail_p1 {

            font-size: 18px;
            margin-left: 45%;
            position: absolute;
            margin-top: 7%;
            line-height: 25px;
            color: #6B1D4F;
        }

        .first_Section_Detail_p2 {

            font-size: 18px;
            margin-left: 68%;
            position: absolute;
            margin-top: 7%;
            line-height: 25px;
            color: #6B1D4F;

        }

        .designer_info {

            height: 470px;
            width: 100%;
            position: absolute;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .designer_detal {

            height: 870px;
            width: 25%;
            background-color: white;
            background-color: white;
            margin: 15px;
            position: relative;

        }

        .designer_img {

            height: 180px;
            width: 100%;
            object-fit: fill;
            background-repeat: no-repeat;

        }

        .designer_name {

            font-size: 32px;
            margin-left: 24%;
            margin-top: 25px;
            color: #6B1D4F;

        }

        .designer_position {

            margin-left: 39%;
            margin-top: 6px;
            color: goldenrod;
            opacity: 0.5;
        }

        .designer_description_p {

            font-size: 18px;
            margin-left: 40px;
            line-height: 25px;
            margin-top: 20px;
            opacity: 0.8;
            color: #6B1D4F;


        }

        .designer_description_sp {
            margin-left: 35%;
        }

        .designer_button {

            height: 30%;
            width: 170px;
            margin-top: 50px;
            margin-left: 97px;
            font-size: 17px;
            background-color: #6B1D4F;
            color: white;
        }

        .second_section {

            height: 550px;
            width: 100%;
            background-color: #f9f9f9;
            background-color: #f7f3f3;

        }

        .second_Section_h1 {

            font-size: 60px;
            position: relative;
            top: 15%;
            margin-left: 21.5%;
            /* color: rgb(281, 17, 119); */
            color: #6B1D4F;
            font-family: "Playfair Display", serif;
            font-weight: 200;

        }

        .second_Section_p {
            margin-top: 110px;
            margin-left: 45%;

        }

        .second_Section_p1 {
            margin-top: 50px;
            margin-left: 25%;
            line-height: 27px;
            font-size: 17px;
            color: #A6206A;
        }

        .second_Section_p1_sp {
            margin-left: 23.5%;
        }

        .decond_section_btn {
            height: 55px;
            width: 250px;
            margin-left: 41%;
            margin-top: 70px;
            font-size: 20px;
            background-color: #A6206A;
            color: white;
            border-radius: 50px;
            height: 60px;
            width: 300px;
            margin-left: 38.5%;
            margin-top: 70px;
            font-size: 20px;
        }

        .tird_section {

            height: 700px;
            width: 100%;
            margin-top: 10px;
            position: relative;

        }

        .third_section_h1 {

            font-size: 55px;
            margin-left: 25%;
            margin-top: 6%;
            font-family: "Playfair Display", serif;
            font-weight: 200;
            color: #6B1D4F;

        }

        .third_section_p {

            margin-left: 43%;
            margin-top: 2%;

        }

        .third_section_p1 {

            margin-left: 36%;
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
            margin-left: 35px;
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
            margin-left: 30%;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@416&family=Playwrite+AU+NSW+Guides&family=Playwrite+CO+Guides&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Playwrite+AU+NSW+Guides&family=Playwrite+AU+QLD+Guides&family=Playwrite+CO+Guides&family=Playwrite+US+Modern+Guides&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Vollkorn:ital@1&display=swap');
    </style>

    <link rel="stylesheet" href="aos/aos.css">
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="conteiner">
        <p class="container_p1" data-aos="fade-right" data-aos-offset="200" data-aos-delay="300"
            data-aos-duration="1200" data-aos-mirror="true">About <span class="container_p1_sp">us</span></p>
        <p class="container_p2" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
            data-aos-mirror="true">Inpiration / Planning / Travel / Registry</p>
    </div>
    <div class="cover_container"></div>
    <section>

        <div class="first_section">

            <div class="first_Section_Detail">
                <h1 class="first_Section_Detail_h1" data-aos="fade-right" data-aos-offset="200" data-aos-delay="300"
                    data-aos-duration="1100">
                    Our wedding agency has<br>&nbspbeen presented for over<br> &nbsp20 years in the market.
                </h1>
                <p class="first_Section_Detail_p1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1100">We
                    are glad to be the
                    number one<BR>agency in the
                    wedding industry.
                    Our,<br> team does its best for
                    each
                    of<br>
                    our clients, regardless of his or her<br> requirements, goals and intentions.<br> Tell us your needs
                    and we
                    will open for<br> you the world of beauty, style and<br> delicacy.
                </p>
                <p class="first_Section_Detail_p2" data-aos="fade-left" data-aos-offset="200" data-aos-delay="300"
                    data-aos-duration="1100">
                    One of our wedding planning<br> specialists will take care of every<br> aspect of your special day
                    from the<br>
                    ceremony to the fireworks. Discuss<br> everything to the tiny detail to make<br> your wedding truly
                    unforgettable.
                </p>
            </div>
            <div class="designer_info">
                <div class="designer_detal" data-aos="fade-right" data-aos-offset="200" data-aos-delay="300"
                    data-aos-duration="1100">
                    <div class="designer_img">
                        <img src="images/about/owner.jpg" alt="">
                        <h1 class="designer_name">April Harris</h1>
                        <p class="designer_position">OWNER</p>
                        <p class="designer_description_p">
                            &nbsp &nbsp; &nbsp This lady is our chief. She knows<br>&nbsp everything about wedding
                            planning<br>
                            thanks to the really stunning career in the<br><span
                                class="designer_description_sp">industry.</span>
                        </p>
                        <button class="designer_button">READ MORE</button>
                    </div>
                </div>

                <div class="designer_detal" data-aos="fade-up" data-aos-offset="200" data-aos-delay="300"
                    data-aos-duration="1100">
                    <div class="designer_img">
                        <img src="images/about/specilist.jpg" alt="">
                        <h1 class="designer_name">Abbie Scott</h1>
                        <p class="designer_position">OWNER</p>
                        <p class="designer_description_p">
                            &nbsp &nbsp; &nbsp This lady is our chief. She knows<br>&nbsp everything about wedding
                            planning<br>
                            thanks to the really stunning career in the<br><span
                                class="designer_description_sp">industry.</span>
                        </p>
                        <button class="designer_button">READ MORE</button>
                    </div>
                </div>

                <div class="designer_detal" data-aos="fade-left" data-aos-offset="200" data-aos-delay="300"
                    data-aos-duration="1100">
                    <div class="designer_img">
                        <img src="images/about/organizer.jpg" alt="">
                        <h1 class="designer_name">Maud Howard</h1>
                        <p class="designer_position">OWNER</p>
                        <p class="designer_description_p">
                            &nbsp &nbsp; &nbsp This lady is our chief. She knows<br>&nbsp everything about wedding
                            planning<br>
                            thanks to the really stunning career in the<br><span
                                class="designer_description_sp">industry.</span>
                        </p>
                        <button class="designer_button">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="second_section">
            <h1 class="second_Section_h1"> Bespoke Wedding & Ceremonies</h1>
            <p class="second_Section_p">_______________</p>
            <p class="second_Section_p1">
                Every bride and groom wants an incomparable wedding combined with fantasy and style. We create
                stunning,<br>
                &nbsp one-of-a-kind events produced and styled to perfection. From traditional to modern, elegant and
                relaxed,
                we <br><span class="second_Section_p1_sp">focus on any event we plan.</span></p>
            <button class="decond_section_btn">LERN MORE</button>
        </div>
    </section>
    <section>

        <div class="tird_section">

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
    </section>


    <script src="aos/aos.js">
    </script>
    <script>

        AOS.init();

    </script>
    <?php
    include("footer/footer.php");
    ?>
</body>

</html>