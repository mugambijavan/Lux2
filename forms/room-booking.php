<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $guests = $_POST["guests"];
    $message = $_POST["message"];

    // Send email to the specified address
    $to = "info@luxlounge.co.ke";
    $subject = "New Room Booking Request";
    $messageBody = "Name: $name\nEmail: $email\nPhone: $phone\nCheck-in: $checkin\nCheck-out: $checkout\nGuests: $guests\nMessage: $message";

    // You can use additional headers, like "From:" and "Reply-To:" if needed
    $headers = "From: $email";

    // Send the email
    $mailResult = mail($to, $subject, $messageBody, $headers);

    // Check if the email was sent successfully
    if ($mailResult) {
        echo "success"; // You can customize this response as needed
    } else {
        echo "error"; // You can customize this response as needed
    }
} else {
    // Invalid request method
    echo "error"; // You can customize this response as needed
}
?>
