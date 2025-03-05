<?php
include("navbar.php");
session_start();
include("connection/connection.php");

$mm = isset($_GET['serviceid']) ? mysqli_real_escape_string($con, $_GET['serviceid']) : '';

$query1 = "SELECT * FROM subservice WHERE serviceid='$mm'";
$result = mysqli_query($con, $query1);

// Store the first row in session
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['subservicename'] = $row['subservicename'];
    $_SESSION['price'] = $row['price'];
    $_SESSION['location'] = $row['location'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Amazing Catering Services</title>
    <style>
        .body_Class {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .service-sub_container {
            max-width: 1400px;
            margin: auto;
            padding: 40px 20px;
        }

        .title {
            font-size: 36px;
            color: #A6206A;
            font-weight: bold;
        }

        .subtitle {
            font-size: 18px;
            color: #666;
            margin-top: 20px;
        }

        .services {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            height: 370px;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: scale(1.05);
        }

        .image-container {
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #A6206A;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .service-info {
            padding: 15px;
        }

        .service-info h3 {
            font-size: 20px;
            color: #A6206A;
            margin-bottom: 5px;
        }

        .location,
        .price {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .btn {
            background: #A6206A;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            top: 12px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #8D1750;
        }

        a {
            color: #A6206A;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="body_Class">
        <div class="service-sub_container">
            <h1 class="title">Book Delicious Catering Services</h1>
            <p class="subtitle">Find the best multi-cuisine catering for your wedding</p>

            <h2 class="section-title" style="margin-top:20px;">Our Top Catering Services</h2>
            <div class="services">
                <?php
                // Reset result pointer and loop through all results
                mysqli_data_seek($result, 0);
                while ($row = mysqli_fetch_assoc($result)) {
                    $imageArray = explode(",", $row['subserviceimage']);
                    $firstImage = trim($imageArray[0]);
                    ?>
                    <div class="service-card">
                        <a href="servicebooking.php?serviceid=<?php echo htmlspecialchars($row['subserviceid']); ?>">
                            <div class="image-container">
                                <img src="../admine side/serviceimage/subserviceimage/<?php echo htmlspecialchars($firstImage); ?>"
                                    alt="<?php echo htmlspecialchars($row['subservicename']); ?>">
                                <div class="badge"><?php echo htmlspecialchars($row['subservicename']); ?></div>
                            </div>
                            <div class="service-info">
                                <h3><?php echo htmlspecialchars($row['subservicename']); ?></h3>
                                <p class="location">📍<?php echo htmlspecialchars($row['location']); ?></p>
                                <p class="price">💰 Price: <?php echo htmlspecialchars($row['price']); ?> Lakhs</p>
                                <a class="btn">Get Offers</a>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include("footer/footer.php"); ?>
</body>

</html>