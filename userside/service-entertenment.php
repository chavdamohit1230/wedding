<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Amazing Artists</title>
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

        .categories {
            margin-top: 60px;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
        }

        .category {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            width: 150px;
            height: 170px;
            text-align: center;

        }

        .category:hover {
            transform: scale(1.05);
        }

        .icon {
            font-size: 30px;
            margin-bottom: 10px;
            margin-left: 2%;
        }

        .section-title {
            font-size: 28px;
            color: #A6206A;

            margin-bottom: 10px;
        }

        .artists {
            display: flex;
            /* background-color: black; */
            justify-content: center;
            gap: 50px;
            position: relative;
            top: 10px;
            flex-wrap: wrap;
        }

        .artist-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s ease;
        }

        .artist-card:hover {
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

        .artist-info {
            padding: 15px;
        }

        .artist-info h3 {
            font-size: 20px;
            color: #A6206A;
            ;
            margin-bottom: 5px;
        }

        .location,
        .rating {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .btn {
            background: #A6206A;
            ;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #A6206A;
            ;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>
    <!-- Hero Section -->
    <div class="body_Class">
        <div class="service-sub_container">
            <h1 class="title">Book Amazing Artists for Your Event</h1>
            <p class="subtitle">Find and book the perfect entertainment for any occasion</p>



            <!-- Featured Artists -->
            <h2 class="section-title" style="margin-top:20px;">Featured Artists</h2>
            <div class="artists">
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="Raj Kamal Band">
                        <div class="badge">Band</div>
                    </div>
                    <div class="artist-info">
                        <h3>Raj Kamal Band</h3>
                        <p class="location">📍 Delhi NCR</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>

                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="Perpetual Rodrigues">
                        <div class="badge">Anchor</div>
                    </div>
                    <div class="artist-info">
                        <h3>Perpetual Rodrigues</h3>
                        <p class="location">📍 Mumbai</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>

                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="image-container">
                        <img src="images/service/resort1.jpg" alt="DJ Chetan">
                        <div class="badge">DJ</div>
                    </div>
                    <div class="artist-info">
                        <h3>DJ Chetan</h3>
                        <p class="location">📍 Bengaluru</p>
                        <p class="rating">⭐ 4.5 (2625 reviews)</p>
                        <button class="btn">Get Offers</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include("footer/footer.php") ?>
</body>

</html>