<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appoiment</title>
    <style>
        * {

            margin: 0px;
            padding: 0px;
        }

        .container {

            height: 550px;
            width: 100%;
            background-color: blue;
            display: flex;
        }

        .booking_Deatail {

            width: 45%;
            background-color: rgb(99, 21, 73);
            height: 550px;

        }

        .booking_form {

            height: 600px;
            width: 55%;

        }

        .booking_p1 {

            color: white;
            font-size: 24px;
            position: relative;
            left: 17%;
            top: 7%;
            letter-spacing: 0.1rem;
        }

        .booking_h1 {
            color: white;
            font-size: 3.5rem;
            position: relative;
            top: 9%;
            left: 15.6%;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .booking_description {

            margin: 0px;
            font-size: 0.9rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat, sans-serif;
            font-weight: 400;
            line-height: 1.5;
            color: white;
            margin-left: 17%;
            margin-right: 10%;
            position: relative;
            top: 11%;
        }

        .icon_and_description {

            height: 15%;
            width: 100%;
            position: relative;
            top: 14%;
        }

        .star {

            color: rgb(155, 33, 114);
            ;
            font-size: 13px;
        }

        .icon_and_description_p1 {

            margin-left: 20%;
            margin-top: 2%;
            position: absolute;
        }

        .icon_and_description_p1_sp {

            padding-left: 20px;
            font-size: 1rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat, sans-serif;
            font-weight: 400;
            color: white;
        }

        .icon_description_p2 {
            color: white;
            position: absolute;
            margin-top: 5%;
            margin-left: 21%;
            font-size: 12px;
        }

        .icon_description_p2_sp {

            margin-left: 35px;
            font-size: 15px;
            font-family: Montserrat, sans-serif;
            letter-spacing: 0.1rem;
        }

        .icon_description_p2_sp1 {

            margin-left: 35px;
            font-size: 15px;
            font-family: Montserrat, sans-serif;
            letter-spacing: 0.1rem;
        }

        .booking_detail_btn {

            height: 50%;
            position: relative;
            top: 110%;
            left: 20%;
            width: 20%;
            border-radius: 15px;
            font-size: 15px;
            background-color: #C76FAA;
            color: white;
            border: none;
        }

        .booking_form_backimage {
            background: url("ap-backimage.webp");
            height: 550px;
            width: 55%;
            position: absolute;
            background-size: cover;
            object-fit: cover;
        }

        .bookung_form_backimage_layer {

            position: absolute;
            height: 550px;
            width: 55%;
            background-color: rgb(99, 21, 73);
            opacity: 0.4;
        }

        .booking_form_backimage_form {
            font-size: 40px;
            color: white;
            position: relative;
            z-index: 30;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
            width: 100%;
        }

        form {
            z-index: 20;
            width: 70%;
            height: 80%;
            position: absolute;
            top: 15%;
            /* display: flex; */
            flex-wrap: wrap;
        }

        .hadding_form {
            color: white;
            z-index: 20;
            position: absolute;
            top: 10%;
            left: 31.5%;
            font-size: 24px;
        }

        .input {

            height: 7%;
            width: 38%;
            margin-left: 5.5%;
            border-radius: 7px;
            margin-top: 3%;
            font-size: 17px;
            letter-spacing: 0.1em;
            padding-left: 2%;
            border: none;
        }

        input[type="text"] {

            padding-left: 12px;
        }

        .textarea {

            height: 35%;
            position: relative;
            left: 6%;
            top: 7%;
            width: 84%;
            border-radius: 15px;
            padding-left: 18px;
            padding-top: 1%;
            font-size: 15px;
            border: none;
        }

        .submit_btn {

            height: 10%;
            position: relative;
            top: 5%;
            left: 37%;
            width: 23%;
            background: white;
            border: none;
            border-radius: 12px;
            color: rgb(99, 21, 73);
        }

        .second_container {

            height: 100vh;
            width: 100%;

        }

        .second_conteiner_h1 {
            color: rgb(99, 21, 73);
            letter-spacing: .03em;
            font-size: 40px;
            padding-left: 29%;
            padding-top: 2%;
        }

        .second_conteiner_p {
            text-align: center;
            margin-top: 1%;
            font-size: 17px;
            letter-spacing: 0.5px;
        }

        .card_container {
            height: 80%;
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            margin: 10px;
            height: 80%;
            width: 16%;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            text-align: center;
            align-items: center;
            border-radius: 10px;
            justify-content: center;
        }

        .card_img {

            height: 100px;
            margin-top: 20px;
        }

        .step_name {
            margin: 0px;
            font-size: 1rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat, sans-serif;
            font-weight: 400;
            line-height: 1.5;
        }

        .card_name {
            color: #9b2172;
            font-size: 1.1rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            padding-top: 8px;
        }

        .card_description {
            margin: 20px 0px 0px;
            font-size: 0.9rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat, sans-serif;
            font-weight: 400;
            line-height: 1.5;
            ;
        }

        .third_container {

            height: 100vh;
            width: 100%;
            background-color: blue;
        }

        .third_section_header {
            height: 12%;
            width: 100%;
            background-color: pink;
            justify-content: center;
            display: flex;
        }

        .third_section_h1 {

            color: #9B2172;
            font-size: 2.5rem;
            margin-top: 25px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            letter-spacing: 0.1rem;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <section>
        <div class="container">

            <div class="booking_Deatail">
                <p class="booking_p1">BOOK YOUR APPOINTMENT AND</p>
                <p>
                <h1 class="booking_h1">GET HEFTY</h1>
                <p>
                <h1 class="booking_h1">
                    CASHBACK
                </h1>
                </p>
                <p class="booking_description">Booking appointments with your favourite designer for wedding shopping
                    has
                    never been this easier.Wedshop
                    gives you first of it's kind cashback on premium designer wear with the widest range of designer
                    brands
                    associated on the platform to give our customer the best wedding wear</p>

                <div class="icon_and_description">
                    <p class="icon_and_description_p1">
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <span class="icon_and_description_p1_sp">2000+ Customers</span>
                    </p>
                    <p class="icon_description_p2">1500+ reviews <span class="icon_description_p2_sp">300+
                            Weddings</span>
                        <span class="icon_description_p2_sp1">₹ 25 Lacks Cash paid back</span>
                    </p>
                    <button class="booking_detail_btn">SIGN UP</button>
                </div>
            </div>
            <div class=" booking_from">
                <div class="booking_form_backimage">
                    <p class="hadding_form">BOOK YOUR APPOIMENT</p>
                    <div class="booking_form_backimage_form">

                        <form action="">
                            <input name="" type="text" class="input" placeholder="name">
                            <input name="" type="text" class="input" placeholder="phone">
                            <input name="" type="text" class="input" placeholder="email">
                            <input name="" type="text" class="input" placeholder="state">
                            <input name="" type="text" class="input" placeholder="city">
                            <input name="" type="date" class="input" placeholder="appoiment-date">

                            <textarea name="" id="" class="textarea"
                                placeholder="any specific store or brand preferences"></textarea>
                            <button class="submit_btn">SUBMIT</button>

                        </form>

                    </div>
                </div>
                <div class="bookung_form_backimage_layer">
                </div>
            </div>
    </section>

    <section>
        <div class="second_container">
            <h1 class="second_conteiner_h1">WHY TO BOOK APPOINTMENT</h1>
            <p class="second_conteiner_p">Designer Wedding shopping won’t be fun online as it’s on live you need to
                enjoy the look and feel of your
                grand wedding attire. The<br>experience is personalized, and the designer’s team works closely with the
                bride to ensure that every detail is perfect. The live experience<br>allows the bride or groom to see
                and
                feel the fabric, understand the fitting, and get feedback from friends and family, which cannot be<br>
                replicated online.
            </p>
            <div class="card_container">
                <div class="card">
                    <img src="step1.svg" alt="" class="card_img">
                    <p class="step_name">step1</p>
                    <p class="card_name">SIGN UP</p>
                    <p class="card_description">Visit saptapadi.com and click on Wedshop. Sign up with your email &
                        phone
                        number easily
                    </p>
                </div>
                <div class="card">
                    <img src="step2.svg" alt="" class="card_img">
                    <p class="step_name">step2</p>
                    <p class="card_name">BROWSE & SELECT DESIGNER</p>
                    <p class="card_description">Browse through the wide range of designer brands available on Wedshop,
                        across all the cities in India. You can filter your search based on the city or designer’s
                        specialty. Once you have selected the designer, you can browse through their collection and
                        catalogue
                    </p>
                </div>
                <div class="card">
                    <img src="card3.svg" alt="" class="card_img">
                    <p class="step_name">step3</p>
                    <p class="card_name">BOOK APPOINTMENT</p>
                    <p class="card_description">
                        To ensure a hassle-free experience, Wedshop offers personalized assistance. You can click on the
                        “schedule appointment” button on the designer’s page to plan your visit to their studio. Get
                        confirmation of your appointment on mail
                    </p>
                </div>
                <div class="card">
                    <img src="step4.svg" alt="" class="card_img">
                    <p class="step_name">step4</p>
                    <p class="card_name">PLAN YOUR VISIT</p>
                    <p class="card_description">
                        Wedshop will help you plan your visit to the designer studio as per your convenience.Once you
                        visit the designer’s studio, Wedshop will provide personalized assistance to help you select the
                        perfect outfit.
                    </p>
                </div>
                <div class="card">
                    <img src="step5.svg" alt="" class="card_img">
                    <p class="step_name">step5</p>
                    <p class="card_name">GET CASHBACK</p>
                    <p class="card_description">
                        Finally, make your payment at the store and upload your invoice on Wedshop and enjoy a hefty
                        cashback directly in your bank account within a week
                    </p>
                </div>
            </div>
        </div>
    </section>
    <search>
        <div class="third_container">
            <div class="third_section_header">
                <h1 class="third_section_h1">
                    BRAND CATEGORIES
                </h1>
            </div>
        </div>
    </search>
</body>

</html>