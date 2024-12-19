<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ananata booking vanue</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .container {

            background-image: url("puskar/cardphoto.webp");
            height: 700px;
            width: 100%;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            background-repeat: no-repeat;


        }

        .sub-container {

            background: blue;
            height: 700px;
            width: 100%;
            position: absolute;
            opacity: 0.3;


        }

        .booking-menu {

            height: 180px;
            width: 70%;
            background-color: #f9f9f9;
            margin-top: 240px;
            position: absolute;
            padding-left: 25px;
            border: 1.8px solid black;
            border-radius: 6px;
        }

        .input {

            height: 38px;
            width: 25%;
            margin-top: 30px;
            padding-left: 20px;
            font-size: 21px;
            border-color: #e33d70;

        }

        .input:hover {

            border: 2px solid green;
        }

        .select {


            height: 38px;
            width: 23%;
            margin-top: 20px;
            padding-left: 15px;
            font-size: 20px;
            border-color: #e33d70;
            border: 1.5px solid #e33d70;

        }

        .check-button {

            height: 45px;
            width: 20%;
            font-size: 20px;
            margin-bottom: 7px;
            border-color: #e33d70;

        }

        .check-button:hover {

            background-color: #e33d70;
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);

        }

        .book-menu-p {

            color: #e33d70;
            font-size: 16px;
        }

        .second-container {

            height: 480px;
            width: 100%;
            margin-top: 12px;
            position: relative;



        }

        svg {

            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.8;
        }

        .card {

            height: 410px;
            width: 97%;
            background-color: #f9f9f9;
            margin-top: 15px;
            margin-left: 25px;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .card1,
        .card2,
        .card3 {

            height: 80%;
            width: 28%;
            background-color: #f0f0f0;
            box-shadow: #62;
            margin: 30px;
            position: relative;
        }

        .hammer {

            position: absolute;
            top: 6%;
            left: 35%;
            color: #e33d70
        }

        .hammer-detail {

            top: 35%;
            font-size: 28px;
            position: absolute;
            align-items: justify;
            padding-left: 70px;
            padding-right: 15px;
            color: #e33d70;
        }

        .hammer-detail1 {

            position: absolute;
            top: 60%;
            align-items: justify;
            padding-left: 20px;
            font-size: 17px;
        }

        .hammer-detal2 {

            position: absolute;
            top: 85%;
            left: 25%;
            color: #e33d70;
            font-size: 20px;
        }

        .vanue_image {

            height: 100%;
            width: 58%;
            background-color: #f0f0f0;

        }

        .gallary-title {

            font-size: 28px;
            margin-top: 1px;
            padding-left: 150px;

        }

        .title-color {

            color: #e33d70;
            font-size: 45px;
        }

        .img {

            height: auto;
            width: 380px;
            margin-top: ;
            border: 2px solid black;

        }

        .img1 {

            margin-left: 40px;
            position: absolute;
            margin-top: 30px;
            height: 320px;
            width: 430px;


        }

        .img2 {

            /* margin-left:350px;
        margin-top:100px; */
            top: 12%;
            left: 45%;
            position: absolute;
            height: 320px;
            width: 430px;


        }

        .img3 {

            /* padding-bottom:100px;
        padding-left:50px; */
            position: relative;
            top: 44%;
            height: 320px;
            width: 430px;
            left: 8%;

        }

        .img4 {

            height: 320px;
            width: 430px;
            position: absolute;
            top: 51%;
            left: 40%;

        }

        .mm {

            padding-bottom: 20px;
            margin-left: 12px;

        }

        .img-content {

            height: 700px;
            width: 100%;
            display: flex;
        }

        .vanue_image {

            height: 710px;
            width: 58%;
            background-color: #f0f0f0;
            position: relative;
        }

        .detail-part {
            height: 700px;
            width: 42%;
        }

        .vn-dp {

            font-size: 28px;
            padding-left: 30%;
            padding-top: 20px;
        }

        .vn-sd {
            font-size: 60px;
            color: #e33d70;

        }

        .vn-ditail {
            font-size: 20px;
            padding-top: 23px;
            padding-left: 70px;
            padding-right: 70px;
            text-align: justify;
            font-family: Arial, sans-serif;
            line-height: 1.7;

        }

        .detail-buttton {

            height: 50px;
            width: 400px;
            margin-top: 45px;
            margin-left: 120px;
            font-size: 20px;
            background-color: #f9f9f9;
            border: 1px solid #e33d70;
            ;
            box-shadow: 0px 1px 2px;

        }

        .detail-buttton:hover {

            box-shadow: 0px 1px 4px 1px #e33d70;
            background-color: #e33d70;
            ;
            color: white;
            border: 1px solid black;

        }

        .pop {
            position: relative;
            width: 250px;
            height: 250px;
            right: 43%;
            bottom: 60%;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            backdrop-filter: blur(50px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.9);
        }

        .hide {
            margin-top: 12px;
            width: 60%;
            height: 120px;
            font-size: 19px;
            border-start-end-radius: 12px;
            border-bottom-left-radius: 12px;
            border-color: rgb(151, 43, 119);
            color: rgb(151, 43, 119);
            background-color: blanchedalmond;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>

    <div class="sub-container"></div>
    <div class="container">


        <div class="booking-menu">

            <form action="">

                <i class="fa-solid fa-location-dot"></i>
                <input type="text" placeholder="your location" class="input">
                Check in <input type="date" class="input">
                check out <input type="date" class="input">
                <br>
                <i class="fa-solid fa-user-tie"></i>
                <select name="" id="" class="select">
                    <option value="">Adult</option>
                    <option value="">10 to 50</option>
                    <option value="">50 to 100</option>
                    <option value="">more than above</option>
                </select>
                <i class="fa-regular fa-user"></i>
                <select name="" id="" class="select">
                    <option value="">children</option>
                    <option value="">10 to 50</option>
                    <option value="">50 to 100</option>
                    <option value="">more than above</option>
                </select>

                <i class="fa-solid fa-bed"></i>
                <select name="" id="" class="select">
                    <option value="">rooms</option>
                    <option value="">10 to 20</option>
                    <option value="">20 to 30</option>
                    <option value="">more than above</option>
                </select>
                <i class="fa-solid fa-arrow-right "></i>

                <button type="submit" class="check-button">Check Availability</button>
                <p class="book-menu-p">about the page in the helping your jkhds
                </p>
            </form>
        </div>
    </div>
    <section>
        <div class="second-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0099ff" fill-opacity="0.38"
                    d="M0,320L80,298.7C160,277,320,235,480,213.3C640,192,800,192,960,208C1120,224,1280,256,1360,272L1440,288L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                </path>
            </svg>

            <div class="card">

                <div class="card1">
                    <i class="fa-solid fa-hammer fa-beat-fade fa-4x hammer"></i>
                    <p class="hammer-detail">prellentesque accumsan arrcunec dolor tempus</p>
                    <p class="hammer-detail1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sit sint
                        odio reprehenderit
                        commodi, quia debitis vitae!
                    </p>
                    <p class="hammer-detal2">continue to reading.....</p>
                </div>
                <div class="card2">
                    <i class="fa-solid fa-plane fa-beat-fade fa-4x hammer"></i>
                    <p class="hammer-detail">Duis scelerisque metus veldeils porttiotor</p>
                    <p class="hammer-detail1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sit sint
                        odio reprehenderit
                        commodi, quia debitis vitae!
                    </p>
                    <p class="hammer-detal2">continue to reading.....</p>
                </div>
                <div class="card3">
                    <i class="fa-solid fa-circle-half-stroke fa-spin fa-4x hammer"></i>
                    <p class="hammer-detail">Etiam alilquam arcu at maurits consectetur</p>
                    <p class="hammer-detail1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sit sint
                        odio reprehenderit
                        commodi, quia debitis vitae!
                    </p>
                    <p class="hammer-detal2">continue to reading.....</p>
                </div>
            </div>

            <p class="gallary-title"><span class="title-color"> photo</span> About Ananta</p>
        </div>
    </section>


    <div class="img-content">

        <div class="vanue_image">


            <img src="puskar/hotel.avif" class="img img1" alt="">
            <img src="puskar/function.avif" class="img img2" alt="">
            <img src="puskar/a1.png" class="img img3" alt="">
            <img src="puskar/p2.jpeg" class="img img4" alt="">

        </div>

        <div class="detail-part">

            <p class="vn-dp"><span class="vn-sd">vanue</span> summry</p>
            <p class="vn-ditail">In 2023,Ananta was the top destination for weddings in Rajkot and for
                destination weddings worldwide.
                Ananta sits along the India coastline on the Yucatan Peninsula, possessing some of the most
                brightly-lit waters in all of Mexico.
                Beach weddings are therefore very popular in this regionwith its turquoise reef waters serving as the
                perfect backdrop for couples saying "I do."
                In addition to beaches, couples have the option to marry in a lush jungle setting, nearby a secluded
                underwater cove, or next to ancient Mayan ruins. Tulum, a small-town retreat in Ananta,
                ranked among US News' top five most affordable destination wedding locations in the world.</p>
            <button class="detail-buttton" onclick="show()">BOOK NOW</button>
            <div class="pop">
                <?php include("booking-menu.php") ?>
                <button class="hide" onclick="hide()">close</button>
            </div>


        </div>
    </div>
</body>
<script>



    const pop = document.querySelector(".pop");

    function show() {
        pop.style.display = "flex";
    }
    function hide() {
        pop.style.display = "none";
    }
</script>

</html>