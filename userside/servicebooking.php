<?php
include("connection/connection.php");
include('navbar.php');

$serviceid = $_GET['serviceid'];

$select = "select * from  subservice where subserviceid='$serviceid'";

$result = mysqli_query($con, $select);

$row = mysqli_fetch_array($result);

$image = explode(",", string: $row['subserviceimage']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination Wedding Shop</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Quicksand:wght@500&family=Dancing+Script:wght@400&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .webody {
            font-family: 'Poppins', sans-serif;
            background-color: #fff7f0;
            text-align: center;
        }

        .banner {
            position: relative;
            background: url("bg.jpg") no-repeat center center/cover;
            padding: 80px 20px;
            text-align: center;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .banner-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .banner-content h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 60px;
            margin: 0;
            color: #A6206A;
        }

        .banner-content p {
            font-family: 'Quicksand', sans-serif;
            font-size: 20px;
            font-weight: 400;
        }

        .description-section {
            max-width: 900px;
            margin: 40px auto;
            font-size: 18px;
            line-height: 1.8;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Service Image Section */
        .service-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 100%;
            margin: 40px auto;
        }

        .big-image {
            width: 100%;
        }

        .big-image img {
            width: 100%;
            height: 300px;
            object-fit: fill;
            /* border-radius: 8px; */
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
        }

        .small-images {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
            max-width: 90%;
        }

        .small-images img {
            width: 35%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        /* Booking Table Design */
        .booking-table {
            width: 50%;
            margin: 40px auto;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-collapse: collapse;
        }

        .booking-table th,
        .booking-table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .booking-table th {
            background-color: #A6206A;
            color: white;
            font-size: 18px;
        }

        .booking-table td {
            font-size: 16px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 30px 20px;
            width: 30%;
            height: 75%;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            float: right;
            font-size: 28px;
            cursor: pointer;
        }

        /* Floating Label Design */
        .input-group {
            position: relative;
            margin: 20px 0;
        }

        .input-group input,
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 17px;
            background: transparent;
            outline: none;
        }

        .input-group textarea {
            height: 80px;
            resize: none;
        }

        .input-group label {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            padding: 0 5px;
            font-size: 17px;
            color: gray;
            transition: 0.3s;
        }

        .input-group input:focus~label,
        .input-group input:valid~label,
        .input-group select:focus~label,
        .input-group select:valid~label,
        .input-group textarea:focus~label,
        .input-group textarea:valid~label {
            top: 0;
            left: 10px;
            font-size: 12px;
            color: #A6206A;
        }

        button {
            background-color: #A6206A;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 10px;

        }

        button:hover {
            background-color: #87004D;
        }

        .booking_button_main {
            width: 20%;
            position: relative;
            left: 40%;
            bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="wedbody">
        <div class="banner">
            <div class="banner-content">
                <h1>Welcome to Destination Service Booking</h1>
                <p>Elegance, Luxury, and Tradition – Everything You Need for Your Special Day</p>
            </div>
        </div>

        <div class="description-section">
            <p> We offer a seamless wedding planning experience, covering catering, vendor coordination, cocktails, and
                entertainment to make your special day unforgettable. Our expert chefs curate exquisite menus, while
                trusted vendors handle décor, photography, and styling. Enjoy a premium cocktail experience with
                signature drinks, and keep the celebration lively with live music, DJs, and cultural performances. From
                elegant themes to flawless execution, we ensure every detail is perfect. Book now and let us bring your
                dream wedding to life!</p>
        </div>

        <!-- Service Image Section -->
        <div class="service-container">
            <div class="big-image">
                <img src="../admine side/serviceimage/subserviceimage//<?php echo !empty($image[0]) ? $image[0] : 'default.jpg'; ?>"
                    alt="
                    Main Wedding Service">
            </div>
            <div class="small-images">
                <img src="../admine side/serviceimage/subserviceimage//<?php echo !empty($image[1]) ? $image[1] : 'default.jpg'; ?>"
                    alt="Catering">
                <img src="../admine side/serviceimage/subserviceimage//<?php echo !empty($image[2]) ? $image[2] : 'default.jpg'; ?>"
                    alt="Vendors">
                <img src="../admine side/serviceimage/subserviceimage//<?php echo !empty($image[3]) ? $image[3] : 'default.jpg'; ?>"
                    alt="Cocktails">
                <img src="../admine side/serviceimage/subserviceimage//<?php echo !empty($image[4]) ? $image[4] : 'default.jpg'; ?>"
                    alt="Entertainment">
            </div>
        </div>

        <!-- Booking Table Section -->
        <table class="booking-table">
            <tr>
                <th>Service</th>
                <th>Details</th>

            </tr>
            <tr>
                <td>Catering</td>
                <td>Delicious Multi-Cuisine Menu</td>
            </tr>
            <tr>
                <td>Venue & Decor</td>
                <td>Exclusive Wedding Themes</td>
            </tr>
            <tr>
                <td>Entertainment</td>
                <td>Live Music, DJ & Performers</td>
            </tr>
            <tr>
                <td>Photography</td>
                <td>Professional Wedding Shoot</td>

            </tr>
        </table>
        <div class="booking_button1">
            <button type="button" onclick="openForm()" class="booking_button_main">Book Now</button>
        </div>

        <!-- Pop-up Form -->
        <div id="bookingForm" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeForm()">&times;</span>
                <h2>Service Booking Form</h2>
                <form action="" method="POST">

                    <div class="input-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">Full Name</label>
                    </div>

                    <div class="input-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="input-group">

                        <input type="text" name="service" id="service">
                        <label for="service">your Service</label>
                    </div>
                    <div class="input-group">
                        <input type="date" id="date" name="date" required>
                        <label for="date">Event Date</label>
                    </div>

                    <div class="input-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">Full Name</label>
                    </div>


                    <div class="input-group textarea-group">
                        <textarea id="message" name="message"></textarea>
                        <label for="message">Additional Requests</label>
                    </div>

                    <button type="submit">Submit Booking</button>
                </form>
            </div>
        </div>

        <script>
            function openForm() {
                document.getElementById("bookingForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("bookingForm").style.display = "none";
            }

            document.addEventListener("DOMContentLoaded", function () {
                let today = new Date().toISOString().split("T")[0]; // Get current date in YYYY-MM-DD format
                document.getElementById("date").setAttribute("min", today);
            });

        </script>

        <?php include("footer/footer.php") ?>
</body>

</html>