<?php
include 'navbar.php';
include("connection/connection.php");
session_start();

$userid = $_SESSION["useremail"] ?? null;

if (!$userid) {
    header("location:login.php");
    exit;
}

// Include SweetAlert JavaScript Library
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $state = mysqli_real_escape_string($con, $_POST["state"]);
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    $date = mysqli_real_escape_string($con, $_POST["date"]);
    $additional_detail = mysqli_real_escape_string($con, $_POST["textarea"]);

    // Check if the date is already booked
    $check_query = "SELECT * FROM appoinmentrequest WHERE date = '$date'";
    $result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Already booked! Please choose another date.',
                background: 'rgb(99, 21, 73)',
                color:'white',
                confirmButtonColor: '#d33'
            });
        </script>";
    } else {
        // Insert new appointment if date is available
        $query = "INSERT INTO appoinmentrequest (appoinment_user, email, phone, date, state, city, additional_detail,status) 
                  VALUES ('$name', '$email', '$phone', '$date', '$state', '$city', '$additional_detail','Pending')";

        if (mysqli_query($con, $query)) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Appointment request submitted successfully!',
                    background: 'rgb(99, 21, 73)',
                    color:'white',
                    confirmButtonColor: '#3085d6'
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Something went wrong. Please try again.',
                    confirmButtonColor: '#d33'
                });
            </script>";
        }
    }
}

?>


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

        .booking_container {

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
            background: url("images/appoiment/ap-backimage.webp");
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
            font-size: 13px;
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
            margin: 20px 5px 5px;
            font-size: 0.9rem;
            letter-spacing: 0.1rem;
            font-family: Montserrat, sans-serif;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
        }

        .third_container {

            height: 100vh;
            width: 100%;
        }

        .third_section_header {
            height: 12%;
            width: 100%;
            justify-content: center;
            display: flex;
        }

        .third_section_h1 {

            color: #9B2172;
            font-size: 2.3rem;
            margin-top: 20px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            letter-spacing: 0.1rem;
            padding-bottom: 20px;
        }

        .brand_cetegory {
            height: 27vh;
            width: 100%;
            display: flex;
            align-items: ;
            justify-content: center;

        }

        .gift {
            height: 70%;
            width: 16%;
            background-image: url("images/appoiment/gift.png");
            background-repeat: no-repeat;
            object-fit: cover;
            background-size: cover;
        }

        .card_text {
            /* 
            color: white;
            position: absolute;
            margin-left: 90px;
            font-size: 28px; */

            color: white;
            font-size: 1.2rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            margin-left: 24%;
            margin-top: 25%;
        }

        .wedding_cloth {
            height: 70%;
            width: 16%;
            background-image: url("images/appoiment/weddingcloth.png");
            background-repeat: no-repeat;
            object-fit: cover;
            background-size: cover;
        }

        .wed {

            margin-left: 38px;
        }

        .jewellery {
            height: 70%;
            width: 16%;
            background-image: url("images/appoiment/jewellery.png");
            background-repeat: no-repeat;
            object-fit: cover;
            background-size: cover;
        }

        .assesory {
            height: 70%;
            width: 16%;
            background-image: url("images/appoiment/assesory.png");
            background-repeat: no-repeat;
            object-fit: cover;
            background-size: cover;
        }

        .store_container {

            height: 40vh;
            width: 100%;
            position: relative;

        }

        .store_container_h1 {

            color: #9B2172;
            font-size: 2.5rem;
            margin-top: 30px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            letter-spacing: 0.1rem;
            padding-bottom: 20px;
        }

        .store_image {
            height: 30vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .store_img {}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <section>
        <div class="booking_container">

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
                    associated on the platform to give our customer the best wedding r</p>

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
                </div>
            </div>
            <div class=" booking_from">
                <div class="booking_form_backimage">
                    <p class="hadding_form">BOOK YOUR APPOIMENT</p>
                    <div class="booking_form_backimage_form">

                        <form action="" method="POST">
                            <input name="name" type="text" class="input" placeholder="name"
                                value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>">
                            <input name="phone" type="text" class="input" placeholder="phone">
                            <input name="email" type="text" class="input" placeholder="email"
                                value="<?php echo isset($_SESSION['useremail']) ? $_SESSION['useremail'] : ''; ?>">
                            <input name="state" type="text" class="input" placeholder="state">
                            <input name="city" type="text" class="input" placeholder="city">
                            <input name="date" id="date" type="date" class="input" placeholder="appoiment-date">

                            <textarea name="textarea" id="" class="textarea"
                                placeholder="any specific store or brand preferences"></textarea>
                            <button class="submit_btn" type="submit">SUBMIT</button>

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
                    <img src="images/appoiment/step1.svg" alt="" class="card_img">
                    <p class="step_name">step1</p>
                    <p class="card_name">SIGN UP</p>
                    <p class="card_description">Visit saptapadi.com and click on Wedshop. Sign up with your email &
                        phone
                        number easily
                    </p>
                </div>
                <div class="card">
                    <img src="images/appoiment/step2.svg" alt="" class="card_img">
                    <p class="step_name">step2</p>
                    <p class="card_name">BROWSE & SELECT DESIGNER</p>
                    <p class="card_description">Browse through the wide range of designer brands available on Wedshop,
                        across all the cities in India. You can filter your search based on the city or designer’s
                        specialty. Once you have selected the designer, you can browse through their collection and
                        catalogue
                    </p>
                </div>
                <div class="card">
                    <img src="images/appoiment/card3.svg" alt="" class="card_img">
                    <p class="step_name">step3</p>
                    <p class="card_name">BOOK APPOINTMENT</p>
                    <p class="card_description">
                        To ensure a hassle-free experience, Wedshop offers personalized assistance. You can click on the
                        “schedule appointment” button on the designer’s page to plan your visit to their studio. Get
                        confirmation of your appointment on mail
                    </p>
                </div>
                <div class="card">
                    <img src="images/appoiment/step4.svg" alt="" class="card_img">
                    <p class="step_name">step4</p>
                    <p class="card_name">PLAN YOUR VISIT</p>
                    <p class="card_description">
                        Wedshop will help you plan your visit to the designer studio as per your convenience.Once you
                        visit the designer’s studio, Wedshop will provide personalized assistance to help you select the
                        perfect outfit.
                    </p>
                </div>
                <div class="card">
                    <img src="images/appoiment/step5.svg" alt="" class="card_img">
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
    <section>
        <div class="third_container">
            <div class="third_section_header">
                <h1 class="third_section_h1">
                    BRAND CATEGORIES
                </h1>
            </div>
            <div class="brand_cetegory">
                <div class="gift">
                    <p class="card_text"> WEDING GIF</p>
                </div>
                <div class="wedding_cloth">
                    <p class="card_text wed"> WEDING CLOTHS</p>
                </div>
                <div class="jewellery">
                    <p class="card_text">JEWELLERY</p>
                    <img src=".svg" alt="">
                </div>
                <div class="assesory">
                    <p class="card_text"> ACCESSORIES</p>
                </div>
            </div>
            <div class="store_container">
                <h1 class="store_container_h1">STORES IN OUR CITIES</h1>
                <div class="store_image">
                    <img src="images/appoiment/mumbai.svg" alt="" class="store_img">
                    <img src="images/appoiment/ahmedabad.svg" alt="">
                    <img src="images/appoiment/bengaluru.svg" alt="">
                    <img src="images/appoiment/kolkata.svg" alt="">
                    <img src="images/appoiment/hyderabad.svg" alt="">

                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let today = new Date().toISOString().split("T")[0];
            document.getElementById("date").setAttribute("min", today);
        });
    </script>
    <?php
    include 'footer/footer.php';
    ?>
</body>

</html>