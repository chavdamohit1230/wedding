<?php
include('smtp/PHPMailerAutoload.php');

if (isset($_POST['send'])) {
    $to = $_POST['to'];

    // Generate a username with random numbers
    $ml = explode("@", $to);
    // $mt = $ml[0] . rand(1000, 9999);

    $otp = rand(1000, 9999);



    // Read the HTML template file
    $template = file_get_contents('email_template.html');

    // Replace placeholders with dynamic values
    $template = str_replace('[USERNAME]', $ml[0], $template);
    $template = str_replace('[OTP]', $otp, $template);

    // Create the email body with the template content
    $emailBody = $template;
}

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
//$mail->SMTPDebug = 2;
$mail->Username = "mohitchavda1230@gmail.com";
$mail->Password = "phdmzusinslcpfws";
$mail->SetFrom('mohitchavda1230@gmail.com', 'mohit');
$mail->Subject = "Your account info.";
$mail->Body = $emailBody;
$mail->AddAddress($to);

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    )
);

if (!$mail->Send()) {
    echo $mail->ErrorInfo;
} else {
    ?>
    <script>
        let check = confirm("Send your mail?");
        console.log(
            'tru'
        );
        if (check) {
            <?php
            // header('Location: ../register.php');
            ?>

        } else {

            console.log(
                'fal'
            );
            <?php
            //  header("location:../register.php"); ?>

        }
    </script>
    <?php
}
?>