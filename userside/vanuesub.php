<?php
include("connection/connection.php");
include("navbar.php");
session_start();

$vanue_id = isset($_GET["gid"]) ? $_GET["gid"] : '';

$select1 = "SELECT * FROM vanue WHERE vanueid='$vanue_id'";
$result = mysqli_query($con, $select1);
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

$roww = mysqli_fetch_array($result);
if (!$roww) {
    die("No venue found with ID: $vanue_id");
}

$image = explode(",", $roww['vanueimage']);

$userid = $_SESSION["useremail"];
$usertable = "SELECT * FROM userregistration WHERE email='$userid'";
$usertable1 = mysqli_query($con, $usertable);
if (!$usertable1) {
    die("User query failed: " . mysqli_error($con));
}

$row = mysqli_fetch_assoc($usertable1);

if (isset($_POST['book'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fun_date = $_POST['fun_date'];
    $vanuename = $_POST['vanuename'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $guestno = $_POST['guestno'];

    // Check if the date is already booked
    $check_query = "SELECT * FROM vanuerequest WHERE fun_date='$fun_date' AND vanuename='$vanuename'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'This date is already booked!',
                });
            });
        </script>";
    } else {
        // Insert booking request if the date is available
        $res = "INSERT INTO vanuerequest (username, email, phone, fun_date, vanuename, price, location, guestno, status) 
                VALUES ('$username', '$email', '$phone', '$fun_date', '$vanuename', '$price', '$location', '$guestno', 'pending')";

        $ress = mysqli_query($con, $res);

        if ($ress) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your booking request has been submitted.',
                    });
                });
            </script>";
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong, please try again.',
                    });
                });
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Banner & Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* font-family: Arial, sans-serif; */
            background: #f8f8f8;
        }

        /* First Banner */
        .banner {
            position: relative;
            width: 100%;
            max-width: 1892px;
            height: 500px;
            background: url('image.png') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }

        .text {
            position: absolute;
            color: white;
            text-align: left;
            left: 10%;
            bottom: 20%;
        }

        .text span {
            color: #ff4081;
            font-size: 48px;
            font-weight: bold;
        }

        .text h1 {
            font-size: 48px;
            display: inline;
            font-weight: bold;
        }

        .text p {
            font-size: 28px;
            font-style: italic;
        }

        /* Second Image Section (Grid Layout) */
        .gallery-container {
            display: flex;
            justify-content: center;
            padding: 30px;
        }

        .gallery {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 10px;
            max-width: 1500px;
        }

        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Custom Grid Positions */
        .img1 {
            grid-column: 1 / 2;
            grid-row: 1 / 3;
            height: 100%;
        }

        .img2 {
            grid-column: 2 / 3;
            grid-row: 1 / 2;
        }

        .img3 {
            grid-column: 3 / 4;
            grid-row: 1 / 2;
        }

        .img4 {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
        }

        .img5 {
            grid-column: 3 / 4;
            grid-row: 2 / 3;
        }

        /* Venue Name Section */
        .venue-name {
            height: 70px;
            width: 100%;
            background: #631549;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            font-weight: bold;
        }

        /* Venue Details Section */
        .venue-details {
            max-width: 1200px;
            background: white;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .venue-details h2 {
            font-size: 28px;
            color: #333;
            border-bottom: 2px solid #631549;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .venue-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .info-box {
            flex: 1;
            min-width: 250px;
            background: #f8f8f8;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .rating {
            color: #631549;
            font-size: 22px;
        }

        .additional-info {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        /* Venue Summary Section */
        .venue-summary {
            max-width: 1200px;
            background: #631549;
            margin: 30px auto;
            padding: 25px;
            border-radius: 12px;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .venue-summary:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* Book Now Button */
        .book-now-container {
            text-align: center;
            margin: 30px auto;
        }

        .book-now-btn {
            background: #631549;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .book-now-btn:hover {
            background: #631549;
        }

        /* Booking Modal */
        .booking-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }


        .booking-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            max-height: 100vh;
            /* Ensure it fits the screen */
            overflow-y: auto;
            /* Enable scrolling if needed */
            text-align: center;
            position: relative;
        }


        .close-btn {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #631549;
        }

        .booking-content h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Input Field with Floating Label */
        .input-group {
            position: relative;
            margin: 20px 0;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            background: transparent;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #777;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        /* Move label up only when input is focused */
        .input-group input:focus+label,
        .input-group input:valid+label {
            top: 0;
            font-size: 12px;
            color: #631549;
            background: white;
            padding: 0 5px;
        }


        .booking-content button {
            background: #631549;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        .booking-content button:hover {
            background: #631549;
        }
    </style>
</head>

<body>
    <!-- First Banner Section -->
    <div class="banner">
        <div class="overlay"></div>
        <div class="text">
            <span>Our</span>
            <h1>Exclusive</h1>
            <p>Photography</p>
        </div>
    </div>

    <!-- Second Image Section with Correct Layout -->
    <div class="gallery-container">
        <div class="gallery">
            <img src="../admine side/vanueimage/<?php echo !empty($image[0]) ? $image[0] : 'default.jpg'; ?>"
                alt="Wedding Image 1" class="img1"> <!-- Tall Image -->
            <img src="../admine side/vanueimage/<?php echo !empty($image[1]) ? $image[1] : 'default.jpg'; ?>"
                alt="Wedding Image 2" class="img2">
            <img src="../admine side/vanueimage/<?php echo !empty($image[2]) ? $image[2] : 'default.jpg'; ?>"
                alt="Wedding Image 3" class="img3">
            <img src="../admine side/vanueimage/<?php echo !empty($image[3]) ? $image[3] : 'default.jpg'; ?>"
                alt="Wedding Image 4" class="img4">
            <img src="../admine side/vanueimage/<?php echo !empty($image[4]) ? $image[4] : 'default.jpg'; ?>"
                alt="Wedding Image 5" class="img5">
        </div>
    </div>

    <!-- Venue Name -->
    <div class="venue-name">Venue: Grand Royal Palace</div>

    <!-- Venue Details Section -->
    <div class="venue-details">
        <h2>Venue Details</h2>
        <div class="venue-info">
            <div class="info-box">📍 Location: Mumbai, India</div>
            <div class="info-box">💰 Price: ₹5,00,000</div>
            <div class="info-box">⭐ Rating: <span class="rating">★★★★★</span></div>
            <div class="info-box">👥 Guests: Up to 500</div>
            <div class="info-box">🎉 Event Types: Weddings, Receptions, Corporate Events</div>
        </div>
        <p class="additional-info">
            This venue offers a luxurious experience with stunning decor, top-notch catering services, and a scenic
            outdoor setting. Perfect for your special day!
        </p>
    </div>

    <!-- Venue Summary Section -->
    <div class="venue-summary">
        🌟 **Grand Royal Palace is a premium wedding destination featuring an elegant banquet hall, open garden seating,
        and top-class catering.** With a reputation for excellence, this venue has hosted countless successful events.
        Whether you're planning a wedding or a corporate event, this space offers both luxury and comfort!
    </div>

    <!-- Book Now Button -->
    <div class="book-now-container">
        <button class="book-now-btn" onclick="openBookingModal()">Book Now</button>
    </div>

    <!-- Booking Modal -->
    <div class="booking-modal" id="bookingModal">
        <div class="booking-content">
            <span class="close-btn" onclick="closeBookingModal()">&times;</span>
            <h2>Booking Form</h2>
            <form method="post">
                <div class="input-group">
                    <input type="text" id="name" name="username"
                        value="<?php echo !empty($row['username']) ? $row['username'] : '' ?>" required>
                    <label for="name">Your Name</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email"
                        value="<?php echo !empty($row['email']) ? $row['email'] : '' ?>" required>
                    <label for="email">Your Email</label>
                </div>

                <div class="input-group">
                    <input type="text" id="email" name="phone"
                        value="<?php echo !empty($row['phone']) ? $row['phone'] : '' ?>" required>
                    <label for="email">phone</label>
                </div>
                <div class="input-group">
                    <input type="date" id="date" name="fun_date" required>
                    <label for="date">Event Date</label>
                </div>

                <div class="input-group">
                    <input type="text" id="email" name="vanuename"
                        value="<?php echo !empty($roww['vanuename']) ? $roww['vanuename'] : '' ?>" required>
                    <label for="email">vanue_name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="email" name="price"
                        value="<?php echo !empty($roww['price']) ? $roww['price'] : '' ?>" required>
                    <label for="email">price</label>
                </div>
                <div class="input-group">
                    <input type="text" id="email" name="location"
                        value="<?php echo !empty($roww['location']) ? $roww['location'] : '' ?>" required>
                    <label for="email">location</label>
                </div>
                <div class="input-group">
                    <input type="text" id="email" name="guestno" required>
                    <label for="email">guest_no</label>
                </div>

                <button type="submit" name="book">Submit</button>
            </form>
        </div>
    </div>

    <script>
        // JavaScript to handle modal open/close
        function openBookingModal() {
            document.getElementById('bookingModal').style.display = 'flex';
        }

        function closeBookingModal() {
            document.getElementById('bookingModal').style.display = 'none';
        }

        // Close modal when clicking outside the modal content
        window.onclick = function (event) {
            const modal = document.getElementById('bookingModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        };
    </script>
</body>

</html>