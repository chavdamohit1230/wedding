<?php

session_start();
include('Email/smtp/PHPMailerAutoload.php');

// Initialize variables
$to = "";
$emailBody = "";
$otp = "";
$inputOtp = "";
$showButtons = false;
$verifyOtpButton = false;



if (isset($_POST['send'])) {

    // Get the email from the form
    $to = $_POST['to'];
    // $inputOtp = $_POST['otp-input'];
    $otp = rand(1000, 9999);
    // Generate a username from the email (before @ symbol)
    $_SESSION['otp'] = $otp;
    $ml = explode("@", $to);

    // Generate OTP


    // Read the HTML template file
    $template = file_get_contents('Email/email_template.html');

    // Replace placeholders with dynamic values
    $template = str_replace('[USERNAME]', $ml[0], $template);
    $template = str_replace('[OTP]', $otp, $template);

    // Assign the email body
    $emailBody = $template;
}

if ($to && $emailBody) {
    // Proceed with sending the email
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "mohitchavda1230@gmail.com";  // Your email
    $mail->Password = "phdmzusinslcpfws"; // Your email password (you should consider using environment variables for this)
    $mail->SetFrom('mohitchavda1230@gmail.com', 'mohit');
    $mail->Subject = "Your account info.";
    $mail->Body = $emailBody;
    $mail->AddAddress($to);

    // Disable SSL verification for self-signed certificates
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );

    // Send the email
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
        $showButtons = true;
        $verifyOtpButton = true;

    }


}
if (isset($_POST["verify"])) {

    $inputOtp = $_POST["otp-input"];

    // echo $inputOtp;
    if ($_SESSION['otp'] == $inputOtp) {
        echo "verification is successfully";

    } else {
        echo "not succsess";

    }
}
?>
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
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            max-width: 44%;
            height: 90%;
            position: fixed;
        }

        .form-container {
            flex: 1;
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
            border: 1px solid #d2d2d2;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border: 2px solid #8c007e;
            outline: none;
            background-color: #fef9ff;
        }

        .form-group label {
            position: absolute;
            left: 12px;
            top: 16px;
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
            display:
                <?php echo $showButtons ? 'flex' : 'none'; ?>
            ;


        }

        #otp,
        #lableotp {
            display:
                <?php echo $showButtons ? 'block' : 'none'; ?>
            ;
        }

        #otp-verify-btn {
            display:
                <?php echo $verifyOtpButton ? 'flex' : 'none'; ?>
            ;
            /* Show OTP Verify button if OTP is sent */
        }

        #send-otp-btn {
            display:
                <?php echo !$verifyOtpButton ? 'flex' : 'none'; ?>
            ;
            /* Show Get OTP button if OTP isn't sent */
        }
    </style>
</head>

<div class="container">
    <!-- Left Image Placeholder -->
    <div class="image-container">
        <!-- Replace this with your actual image -->
        <img src='../images/gallery/background.webp' alt="Image Placeholder">
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
        <form method="POST" id="form">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder=" ">
                <label for="name">Name</label>
            </div>
            <div class="form-group">
                <input type="email" name="to" id="email" placeholder="" value="<?php echo $to; ?>">
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
                <input type="tel" name="phone" id="phone" placeholder=" " <?php echo $showButtons ? "hidden" : '' ?>>
                <label for="phone">Phone Number</label>
            </div>
            <div class="form-group">
                <input type="tel" name="otp-input" id="otp" placeholder=" ">
                <label for="otp" id="lableotp">Enter Otp</label>
            </div>
            <button type="submit" name="send" id="send-otp-btn">Get OTP</button>
            <button type="submit" name="verify" id="otp-verify-btn">Verify OTP</button>


        </form>
    </div>
</div>


</body>

</html>