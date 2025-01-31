<?php
include("connection/connection.php");

$gt = $_GET['gid'];

$select = "select * from  gallarytable where studioname='$gt'";

$result = mysqli_query($con, $select);

$row = mysqli_fetch_array($result);

$image = explode(",", $row['studioimage']);

$mmm = $image[0];




?>


<?php
require('vendor/autoload.php'); // If you're using Composer
use Razorpay\Api\Api;

$keyId = 'rzp_live_8tKlXBqiwVoirn'; // Replace with your Razorpay Key ID
$keySecret = '0QgvmxcPL82yKGLsr1GnggZL'; // Replace with your Razorpay Key Secret

// Razorpay API object creation
$api = new Api($keyId, $keySecret);

// Order Data (Updated receipt as string)
$orderData = [
    'receipt' => strval(rand(1000, 9999)), // Convert receipt to string
    'amount' => '100', // Amount in paise (500 INR)
    'currency' => 'INR',
    'payment_capture' => 1, // Automatic capture
];

// Razorpay order creation
$order = $api->order->create($orderData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* font-family: Arial, sans-serif; */
            background-color: #fff;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 25px;
            /* padding: 20px; */
        }

        .main-content {
            padding: px 0;


        }

        .gallery-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;

        }

        .featured-image {
            position: relative;
            padding-top: 75%;
            /* Aspect ratio 3:4 */
            overflow: hidden;
            border-radius: 8px;
        }

        .featured-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .featured-image img:hover {
            transform: scale(1.05);
        }

        .small-images {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .small-image {
            position: relative;
            padding-top: 100%;
            /* Aspect ratio 1:1 */
            overflow: hidden;
            border-radius: 8px;
        }

        .small-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .small-image img:hover {
            transform: scale(1.05);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .button {
            padding: 10px 20px;
            background-color: black;
            color: white;
            width: 300px;
            font-size: 17px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .text-gray {
            color: gray;
            line-height: 28px;

        }

        .body_content {

            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>
    <!-- Header -->
    <header class="header">
        <div class="container header-container">
            <h1 class="title">
                Photography Gallery
            </h1>
        </div>
        </div>
    </header>

    <!-- Gallery Grid -->
    <main class="main-content">
        <div class="container">
            <div class="gallery-grid">
                <!-- Featured Large Image -->
                <div class="featured-image">
                    <img src="images/gallery/p2.jpg" alt="Featured photograph" />
                </div>

                <!-- Grid of Smaller Images -->
                <div class="small-images">
                    <div class="small-image">
                        <?php $index = 0; ?>

                        <img src="../admine side/images/<?php echo !empty($image[0]) ? $image[0] : 'default.jpg'; ?>"
                            alt="Gallery image 1" />
                    </div>
                    <div class="small-image">
                        <?php $index = 1; ?>

                        <img src="../admine side/images/<?php echo !empty($image[1]) ? $image[1] : 'default.jpg'; ?>"
                            alt="Gallery image 2" />
                    </div>
                    <div class="small-image">
                        <img src="../admine side/images/<?php echo !empty($image[2]) ? $image[2] : 'default.jpg'; ?>"
                            alt="Gallery image 3" />
                    </div>
                    <div class="small-image">
                        <img src="../admine side/images/<?php echo !empty($image[2]) ? $image[3] : 'default.jpg'; ?>"
                            alt="Gallery image 4" />
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="body_content">

            <div class="header">
                <div>
                    <h1>Swiping Stories Photography</h1>
                </div>


                <button class="button" id="pay-button">Pay now Conform Booking</button>

            </div>

            <div class="section">
                <p class="text-gray">Been on 7Vachan Since</p>
            </div>

            <div class="section">
                <h2>Specialization in</h2>
                <p class="text-gray">Candid Photography, Cinematic Videography, Traditional Photography, Traditional
                    Videography, Coupleshoot</p>
            </div>

            <div class="section">
                <h2>Event Coverage</h2>
                <p class="text-gray">Engagement, Pre-Wedding, Sangeet, Cocktail, Reception, Wedding, Post-Wedding</p>
            </div>

            <div class="section">
                <h2>Services & Facilities Offered</h2>
                <p class="text-gray">Bride/Groom portraits, Candid Arial photoshoot, Cinematic Photography, Cinematic
                    Style
                    Traditional Video, Couple Shoots, Day After Session, Destination Wedding Photography, Documentaries,
                    Engagement Photography, Family Photography, HD Videography, Helicopter Shoot, LipDub Videos, Music
                    videos, Outdoor Shoots, Photo Call, Photobooth, Post Wedding Shoot, Pre Wedding Films, Pre Wedding
                    Photoshoot, Save the Date Videos, Short Film, Slow Motion cameras, Studio Photography, Teaser
                    Videos,
                    Video E-invites, Wedding Films, Wedding Highlight, Wedding Photography, Wedding website</p>
            </div>

            <div class="section">
                <h2>Other Services</h2>
                <p class="text-gray">Album, Reels, Canvas Prints, Coffee Table book, Digital Albums, HD Cameras, HD DVD,
                    High Speed cameras, Led Wall, Lighting, Live Screening, Online Album, Photo Frames, Plazma Screens,
                    Props & Themes, Raw file image, Studio Light Set-up, Webcasting, Wedding Photo Albums</p>
            </div>
            <div class="section">
                <h2>Outstation Travel/Destination Weddings</h2>
                <p class="text-gray">Yes</p>
            </div>
            <div class="section">
                <h2>
                    Travel, Food & Accommodation Cost (Borne By Customer)</h2>
                <p class="text-gray">Yes</p>
            </div>
            <div class="section">
                <h2>
                    Mode of Payment</h2>
                <p class="text-gray">Cash, Cheque/DD, Credit/Debit cards, Net banking, UPI</p>
            </div>
            <div class="section">
                <h2>
                    Delivering Time</h2>
                <p class="text-gray">50</p>
            </div>
            <div class="section">
                <h2>
                    Original, Raw, Unedited Images/Video Footage Provided</h2>
                <p class="text-gray">Yes</p>
            </div>
            <div class="section">
                <p class="text-gray">Swiping Stories Photography - Best Wedding Photographers in Kolkata, West Bengal
                    Capture the magic of your special day with Swiping Stories Photography, the best wedding
                    photographers in Kolkata, West Bengal. Our team of passionate and experienced photographers
                    specializes in creating timeless memories through stunning visuals. From intimate pre-wedding shoots
                    to grand wedding celebrations, we ensure every moment is beautifully preserved. With an eye for
                    detail and a creative approach, we tailor our services to meet your unique vision. Our expertise
                    extends to candid photography, traditional photography, and cinematic videography, making us the
                    go-to choice for couples seeking top-notch wedding photography in Kolkata.</p>
            </div>
            <hr style="width: 100%; height: 1px; background-color: black; border: none; margin: 20px 0;">

            <div class="section">
                <h2>
                    Cancellation Policy</h2>
                <p class="text-gray">At Swiping Stories, we understand that unforeseen circumstances can arise, leading
                    to changes in your plans. To ensure clarity and mutual understanding, we have established the
                    following cancellation policy: Non-Refundable Deposit: A non-refundable deposit of 10% is required
                    to secure your booking. This deposit guarantees your date and our commitment to providing you with
                    exceptional photography services. Cancellation by Client: If you cancel the booking for any reason,
                    the initial deposit will not be refunded. This policy helps us manage our schedule and cover the
                    loss of potential business.</p>
            </div>
        </div>
    </section>
    <?php include("footer/footer.php"); ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.getElementById('pay-button').onclick = function (e) {
            var options = {
                "key": "<?= $keyId; ?>", // Replace with your Razorpay Key ID
                "amount": "100", // Amount in paise
                "currency": "INR",
                "name": "saptapadi",
                "description": "Payment for order",
                "image": "https://example.com/logo.png", // Your logo URL
                "order_id": "<?= $order->id; ?>", // Dynamic Order ID
                "handler": function (response) {
                    alert("Payment successful. Razorpay Payment ID: " + response.razorpay_payment_id);
                    // You can further process the response here
                },
                "prefill": {
                    "name": "hiren",
                    "email": "hiren@example.com",
                    "contact": "9999999999"
                },
                "theme": {
                    "color": "#631549"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>

</html>