<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $days = $_POST['days'];
    $specific_place = $_POST['specific_place'];
    $consultant = $_POST['consultant'];

    // You would need to assign the correct email for each consultant
    $consultants_emails = [
        'consultant1' => 'faqrulikram06@icloud.com',
        'consultant2' => 'fionatanziyin@gmail.com',
        'consultant3' => 'airelllezal51@gmail.com',
        'consultant4' => 'fiqriahibrahim@gmail.com',
    ];

    $consultant_email = $consultants_emails[$consultant];

    $subject = "New Journey Inquiry";
    $message = "Name: $name\nCountry: $country\nDays: $days\nSpecific Places: $specific_place";
    $headers = "From: no-reply@yourwebsite.com";

    mail($consultant_email, $subject, $message, $headers);

    echo "Your request has been submitted to the consultant!";
}
?>