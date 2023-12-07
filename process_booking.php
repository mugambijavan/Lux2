<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    // Create email message
    $message = "New Room Booking:\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Check-in Date: $checkin\n";
    $message .= "Check-out Date: $checkout\n";

    // Send email
    $to = "info@luxlounge.co.ke";
    $subject = "New Room Booking";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // You may want to add additional logic or redirect the user after the form submission
    echo "Booking successful. Thank you!";
} else {
    // Handle invalid requests
    header("Location: index.html");
    exit();
}
?>
