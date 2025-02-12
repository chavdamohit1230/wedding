<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        footer {
            height: 30em;
            width: 100%;
            background-color: rgb(99, 21, 73);
            position: absolute;
            justify-content: center;


        }


        .over_company {

            height: 15rem;
            width: 23%;
            /* margin: 10px; */
            display: flex;
            margin-left: 6%;
            flex-direction: column;
        }

        .plan_your_wedding {
            margin: 10px;
            height: 15rem;
            width: 23%;

        }

        .vendore_signup {
            margin: 10px;
            height: 15rem;
            width: 23%;

        }

        .socialmedia_logo {
            margin: 10px;
            height: 15rem;
            width: 23%;


        }

        .footer_container {
            position: relative;
            height: 34vh;
            top: 20%;
            width: 95%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 2%;
        }

        .over_company_h2 {
            align-items: left;
            margin-bottom: 12px;
            color: white;
        }

        .ul {
            list-style: none;
            text-transform: uppercase;
        }

        li {
            display: list-item;
            text-align: -webkit-match-parent;
            unicode-bidi: isolate;
            font-size: 15px;
            margin-top: 6%;
            color: white;
        }

        .logo_copiyright {

            height: 25%;
            width: 100%;
            margin-top: 7%;
            display: flex;
            justify-content: center;

        }

        .web_logo {

            height: 160px;
            position: relative;
            right: 2%;
            top: -40%;
            opacity: 0.9;
        }

        .footerp {
            margin: 5%;
            color: white;
            position: relative;
            top: -35px;
            letter-spacing: 0.3px;
        }

        .copyright {
            font-size: 17px;
        }

        .icon {

            font-size: 40px;
            color: #C76FAA;
            position: absolute;
            margin-top: 60px;
        }

        .icon1 {
            margin-left: 70px;
        }

        .icon2 {
            margin-left: 140px;
        }

        .icon3 {
            margin-left: 220px
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <footer>

        <div class="footer_container">
            <div class="over_company">
                <h2 class="over_company_h2">OUR COMPANY</h2>
                <ul class="ul">
                    <li>About Us</li>
                    <li>Testimonials</li>
                    <li>Wedshop Customer T&C</li>
                    <li>Wedshop Vendor T&C</li>
                </ul>
            </div>
            <div class="plan_your_wedding">
                <h2 class="over_company_h2">PLAN YOUR WEDDING</h2>
                <ul class="ul">
                    <li>Photography</li>
                    <li>Venues</li>
                    <li>Destination weddings</li>
                    <li>Wedshop</li>
                    <li>Wedding Entertainment</li>
                </ul>
            </div>
            <div class="vendore_signup">
                <h2 class="over_company_h2">VENDOR SIGNUPS</h2>
                <ul class="ul">
                    <li>Photographers</li>
                    <li>Stores</li>
                    <li>Hotels</li>
                    <li>Makeup Artist</li>
                    <li>Wedding Entertainers</li>
                </ul>
            </div>
            <div class="socialmedia_logo">
                <i class="fa-brands fa-whatsapp icon"></i>
                <i class="fa-brands fa-instagram icon icon1"></i>
                <i class="fa-brands fa-github icon icon2"></i>
                <i class="fa-brands fa-square-twitter icon icon3"></i>

            </div>
        </div>
        <div class="logo_copiyright">

            <img src="footer/l1.png" class="web_logo" alt="">
            <p class="footerp">Terms & Conditions.</p>
            <p class="footerp">Privacy & Policy</p>
            <p class="copyright footerp">copyright &copy;2025 saptapadi services pvt ltd. All rights .</p>
        </div>
    </footer>
</body>

</html>