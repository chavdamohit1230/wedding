<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Label Form with Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 800px;
            /* Total width for form + image */
        }

        .image-container {
            flex: 1;
            /* Takes 50% of the width */
            background-color: #f3f3f3;
            /* Placeholder background */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            max-width: 100%;
            max-height: 100%;
        }

        .form-container {
            flex: 1;
            /* Takes 50% of the width */
            padding: 40px;
        }

        .form-container h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 15px;
        }

        .form-container ul {
            list-style-type: disc;
            margin: 0 0 20px 20px;
            padding: 0;
            color: #555;
            font-size: 14px;
            line-height: 1.6;
        }

        .form-container ul li {
            margin-bottom: 8px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 16px 12px 12px;
            /* Adjusted padding for better alignment */
            border: 1px solid #d2d2d2;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border: 2px solid #8c007e;
            /* Thicker purple border */
            outline: none;
            background-color: #fef9ff;
            /* Light purple background */
        }

        .form-group label {
            position: absolute;
            left: 12px;
            top: 16px;
            /* Matches the padding of the input */
            font-size: 14px;
            color: #aaa;
            transition: all 0.3s ease;
            pointer-events: none;
            background-color: #fff;
            padding: 0 4px;
        }

        .form-group input:focus+label,
        .form-group input:not(:placeholder-shown)+label {
            top: -10px;
            /* Aligns label with the top border */
            font-size: 12px;
            color: #8c007e;
            /* Matches the focus border color */
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #8c007e;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #720063;
        }

        .form-container button:active {
            background-color: #5a004f;
            transform: scale(0.98);
        }

        .resend {

            width: 100px;
            height: 40px;
            background-color: #5a004f;
            color: white;
            font-size: 18px;
            letter-spacing: 1.2px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 55px;
            border-radius: 3px;




        }

        #btn {

            width: 100%;
            height: 50px;
            margin-bottom: 20px;
            display: none;


        }
    </style>
</head>

<div class="container">
    <!-- Left Image Placeholder -->
    <div class="image-container">
        <!-- Replace this with your actual image -->
        <img src="https://via.placeholder.com/400x400" alt="Image Placeholder">
    </div>

    <!-- Right Form Section -->
    <div class="form-container">
        <h2>Why sign up?</h2>
        <ul>
            <li>Exclusive discounts for all bookings</li>
            <li>Full access to all discounted prices</li>
            <li>Dedicated wedding coordinator for your wedding</li>
            <li>Custom wedding planner for your wedding event</li>
        </ul>
        <form>
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder=" ">
                <label for="name">Name</label>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder=" ">
                <label for="email">Email</label>
            </div>
            <div id="btn">
                <div class="resend">
                    Resend
                </div>
                <div class="resend">
                    Edit
                </div>

            </div>
            <div class="form-group">
                <input type="tel" name="phone" id="phone" placeholder=" ">
                <label for="phone">Phone Number</label>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" id="otp" placeholder=" " hidden>
                <label for="otp" id="lableotp" hidden>Enter Otp</label>
            </div>
            <button type="button" onclick="ok()">Get OTP</button>
        </form>
    </div>
</div>
<script>
    function ok() {
        let no = document.getElementById("otp").value
        let no1 = document.getElementById("otp");
        let no2 = document.getElementById("lableotp");
        let phone = document.getElementById("phone");
        let btn = document.getElementById("btn");
        no1.style.display = "block";
        no2.style.display = "block";
        phone.style.display = "none";
        btn.style.display = "flex";

    }
</script>
<!-- <script src="register.js"></script> -->
</body>

</html>