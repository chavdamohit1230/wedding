<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Suit Booking</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Playfair+Display:wght@500&display=swap');

        .clothbookingbody {
            font-family: 'Playfair Display', serif;
            /* background: linear-gradient(to bottom, #fff6e6, #e8d8c4); */
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        /* Wrapper for side-by-side cards */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
            justify-content: center;
        }

        .card {
            width: 100%;
            background: white;
            border-radius: 12px;
            /* box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2); */
            overflow: hidden;
            position: relative;
            padding-bottom: 20px;
            /* border: 3px solid #d4af37; */
            animation: fadeIn 0.8s ease-in-out;
            display: flex;
            border: 1px solid black;
            flex-direction: column;
            min-height: 490px;
            /* Fixed height for uniformity */
        }

        .image-container {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease-in-out;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        }

        .card-header {
            position: absolute;
            bottom: 10px;
            left: 15px;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            font-family: 'Dancing Script', cursive;
        }

        .card-content {
            padding: 20px;
            flex-grow: 1;
            /* Ensure content takes full space */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        label {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            padding: 0 5px;
            font-size: 16px;
            /* color: #8b6f2f; */

            transition: 0.3s ease-in-out;
            pointer-events: none;
        }

        input {
            width: calc(100% - 24px);
            padding: 12px;
            /* border: 2px solid #d4af37; */
            border-radius: 6px;
            /* background: #fffaf0; */
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease-in-out;
            display: block;
            margin: auto;
            border: 1px solid rgb(155, 33, 114);

        }

        input:focus {
            /* border-color: #b8860b; */
            background: #fff;
        }

        input:focus+label,
        input:not(:placeholder-shown)+label {
            top: 0;
            left: 10px;
            font-size: 12px;
            /* color: #b8860b; */
        }

        input[type="date"] {
            color: black;
            border: 1px solid rgb(155, 33, 114);

        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: rgb(155, 33, 114);
            color: white;
            border: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            border-radius: 6px;
            font-family: 'Dancing Script', cursive;
            text-transform: uppercase;
        }

        .submit-btn:hover {
            /* background: #b8860b; */
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="clothbookingbody">

        <div class="container">
            <!-- 5 Cards with Fixed Height -->
            <div class="card">
                <div class="image-container">
                    <img src="images/gallery/p15.webp" alt="Elegant groom's suit">
                    <div class="overlay"></div>
                    <div class="card-header">
                        <h2 class="card-title">Wedding Suit Booking</h2>
                    </div>
                </div>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder=" " required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder=" " required>
                            <label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="date" required>
                            <label>Booking Date</label>
                        </div>
                        <button type="submit" class="submit-btn">Book Now</button>
                    </form>
                </div>
            </div>

            <!-- Duplicate 4 more times -->
            <div class="card">
                <div class="image-container">
                    <img src="images/gallery/p12.jpg" alt="Elegant groom's suit">
                    <div class="overlay"></div>
                    <div class="card-header">
                        <h2 class="card-title">Wedding Suit Booking</h2>
                    </div>
                </div>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder=" " required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder=" " required>
                            <label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="date" required>
                            <label>Booking Date</label>
                        </div>
                        <button type="submit" class="submit-btn">Book Now</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="image-container">
                    <img src="images/gallery/p21.webp" alt="Elegant groom's suit">
                    <div class="overlay"></div>
                    <div class="card-header">
                        <h2 class="card-title">Wedding Suit Booking</h2>
                    </div>
                </div>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder=" " required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder=" " required>
                            <label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="date" required>
                            <label>Booking Date</label>
                        </div>
                        <button type="submit" class="submit-btn">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="images/gallery/p16.jpeg" alt="Elegant groom's suit">
                    <div class="overlay"></div>
                    <div class="card-header">
                        <h2 class="card-title">Wedding Suit Booking</h2>
                    </div>
                </div>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder=" " required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder=" " required>
                            <label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="date" required>
                            <label>Booking Date</label>
                        </div>
                        <button type="submit" class="submit-btn">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="images/gallery/p16.jpeg" alt="Elegant groom's suit">
                    <div class="overlay"></div>
                    <div class="card-header">
                        <h2 class="card-title">Wedding Suit Booking</h2>
                    </div>
                </div>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder=" " required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder=" " required>
                            <label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="date" required>
                            <label>Booking Date</label>
                        </div>
                        <button type="submit" class="submit-btn">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="images/gallery/p16.jpeg" alt="Elegant groom's suit">
                    <div class="overlay"></div>
                    <div class="card-header">
                        <h2 class="card-title">Wedding Suit Booking</h2>
                    </div>
                </div>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder=" " required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder=" " required>
                            <label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="date" required>
                            <label>Booking Date</label>
                        </div>
                        <button type="submit" class="submit-btn">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="images/gallery/p16.jpeg" alt="Elegant groom's suit">
                    <div class="overlay"></div>
                    <div class="card-header">
                        <h2 class="card-title">Wedding Suit Booking</h2>
                    </div>
                </div>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder=" " required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder=" " required>
                            <label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="date" required>
                            <label>Booking Date</label>
                        </div>
                        <button type="submit" class="submit-btn">Book Now</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <?php include("footer/footer.php") ?>
</body>

</html>