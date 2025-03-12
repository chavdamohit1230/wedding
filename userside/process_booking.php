<?php
include("connection/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["payment_id"])) {
        echo json_encode(["status" => "error", "message" => "Payment not received"]);
        exit;
    }

    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_phone = $_POST["user_phone"];
    $booking_name = $_POST["booking_name"];
    $fun_date = $_POST["fun_date"];
    $guest_no = $_POST["guest_no"];
    $booking_price = $_POST["booking_price"];
    $additional_detail = $_POST["additional_detail"];
    $payment_id = $_POST["payment_id"];

    // Check if the service is already booked on the same date
    $check_query = "SELECT * FROM bookingrequest WHERE booking_name='$booking_name' AND fun_date='$fun_date'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo json_encode(["status" => "error", "message" => "Service already booked"]);
        exit;
    }

    // ✅ Insert into database (only after successful payment)
    $query = "INSERT INTO bookingrequest VALUES('', '$user_name', '$user_email', '$user_phone', '$booking_name', '$fun_date', '$guest_no', '$booking_price', '$additional_detail', 'pending')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database insertion failed"]);
    }
}
?>