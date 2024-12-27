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
            height: 600px;
            width: 100%;
            background-color: black;
            position: relative;
            opacity: 0.4;

        }

        .conteiner {
            height: 600px;
            width: 100%;
            background-image: url(p2.png);
            background-size: cover;
            position: absolute;

        }

        .container_p1 {
            color: white;
            z-index: 20;
            margin-left: 19%;
            margin-top: 10%;
            font-size: 80px;
            position: relative;
            color: rgb(281, 17, 119);
            font-family: "Playfair Display", serif;
            font-weight: 200;

        }

        .container_p2 {
            color: white;
            z-index: 20;
            margin-left: 19%;
            margin-top: 2%;
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
            background-color: whitex;
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
            ;
        }

        .second_section {

            height: 550px;
            width: 100%;
            background-color: #f9f9f9;
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
        }

        .decond_section_btn:hover {
            color: white;
            background-color: rgb(281, 17, 119);
        }

        .tird_section {

            height: 700px;
            width: 100%;

            margin-top: 10px;
            position: absolute;
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

        }

        .third_section_card_img {
            height: 250px;
            width: 180px;
            position: relative;
            bottom: 50PX;
            left: 55px;

        }

        .third_section_card_h1 {
            position: relative;
            bottom: 15%;
            margin-left: 35px;
            font-size: 26px;
            font-family: "Playfair Display", serif;
            font-weight: 200;
            color: #6B1D4F;

        }

        .third_section_card_p {
            position: relative;
            bottom: 30px;
            left: 55px;
            line-height: 25px;
            opacity: 0.8;
            font-family: "Roboto", sans-serif;
            color: #6B1D4F;



        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@416&family=Playwrite+AU+NSW+Guides&family=Playwrite+CO+Guides&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Playwrite+AU+NSW+Guides&family=Playwrite+AU+QLD+Guides&family=Playwrite+CO+Guides&family=Playwrite+US+Modern+Guides&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Vollkorn:ital@1&display=swap');
    </style>




</head>

<body>

    <div class="conteiner">
        <p class="container_p1">About us</p>
        <p class="container_p2">Inpiration / Planning / Travel / Registry</p>
    </div>
    <div class="cover_container"></div>
    <section>

        <div class="first_section">

            <div class="first_Section_Detail">
                <h1 class="first_Section_Detail_h1">
                    Our wedding agency has<br>&nbspbeen presented for over<br> &nbsp20 years in the market.
                </h1>
                <p class="first_Section_Detail_p1">We are glad to be the number one<BR>agency in the wedding industry.
                    Our,<br> team does its best for
                    each
                    of<br>
                    our clients, regardless of his or her<br> requirements, goals and intentions.<br> Tell us your needs
                    and we
                    will open for<br> you the world of beauty, style and<br> delicacy.
                </p>
                <p class="first_Section_Detail_p2">
                    One of our wedding planning<br> specialists will take care of every<br> aspect of your special day
                    from the<br>
                    ceremony to the fireworks. Discuss<br> everything to the tiny detail to make<br> your wedding truly
                    unforgettable.
                </p>
            </div>
            <div class="designer_info">
                <div class="designer_detal">
                    <div class="designer_img">
                        <img src="owner.jpg" alt="">
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

                <div class="designer_detal">
                    <div class="designer_img">
                        <img src="specilist.jpg" alt="">
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

                <div class="designer_detal">
                    <div class="designer_img">
                        <img src="organizer.jpg" alt="">
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

            <h1 class="third_section_h1">Everything You Need to Start</h1>
            <p class="third_section_p">__________________</p>
            <p class="third_section_p1">Your wedding planning adventure</p>
            <div class="third_section_function">
                <div class="third_section_card">
                    <img src="Budget & Checklist.png" class="third_section_card_img" alt="">
                    <h1 class="third_section_card_h1">Ideas & Inspiration</h1>
                    <p class="third_section_card_p">
                        > Collect & organize ideas<br>
                        &nbsp > Connect to vendors<br>
                        &nbsp &nbsp > Get wedding tips
                    </p>
                </div>

                <div class="third_section_card">
                    <img src="idia&inception.png" class="third_section_card_img img2" alt="">
                    <h1 class="third_section_card_h1">Ideas & Inspiration</h1>
                    <p class="third_section_card_p">
                        > Collect & organize ideas<br>
                        &nbsp > Connect to vendors<br>
                        &nbsp &nbsp > Get wedding tips
                    </p>
                </div>

                <div class="third_section_card">
                    <img src="registry.jpg" class="third_section_card_img" alt="">
                    <h1 class="third_section_card_h1">Ideas & Inspiration</h1>
                    <p class="third_section_card_p">
                        > Collect & organize ideas<br>
                        &nbsp > Connect to vendors<br>
                        &nbsp &nbsp > Get wedding tips
                    </p>
                </div>

            </div>
        </div>
    </section>
</body>

</html>