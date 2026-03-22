<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rghdrayd5@gmail.com"; 
    $subject = "New Table Reservation";

    $customerName = $_POST['customerName'];
    $reservationDate = $_POST['reservationDate'];
    $reservationTime = $_POST['reservationTime'];
    $numberOfPeople = $_POST['numberOfPeople'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $message = "Reservation Details:\n\n";
    $message .= "Customer Name: $customerName\n";
    $message .= "Reservation Date: $reservationDate\n";
    $message .= "Reservation Time: $reservationTime\n";
    $message .= "Number of People: $numberOfPeople\n";
    $message .= "Contact Number: $contactNumber\n";
    $message .= "Email: $email\n";
    $message .= "Comment: $comment\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "There was an error submitting your reservation. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
