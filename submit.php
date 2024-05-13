<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $destination = $_POST['destination'];
    $mode = $_POST['mode'];
    $date = $_POST['date'];
    $purpose = $_POST['purpose'];
    $budget = $_POST['budget'];
    $activities = $_POST['activities'];
    $tour = $_POST['tour'];
    $group = $_POST['group'];
    $diet = $_POST['diet'];
    $accommodation = $_POST['accommodation'];
    $conditions = $_POST['conditions'];
    $requests = $_POST['requests'];
    $traveled_before = $_POST['traveled_before'];
    $hear_about = $_POST['hear_about'];
    $expectations = $_POST['expectations'];

    // Compose the email message
    $to = "ggmasika@gmail.com"; // Change this to your email
    $subject = "Survey Response";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Age: $age\n";
    $message .= "Preferred travel destination: $destination\n";
    $message .= "Preferred mode of travel: $mode\n";
    $message .= "Preferred travel date: $date\n";
    $message .= "Purpose of your trip: $purpose\n";
    $message .= "Preferred travel budget: $budget\n";
    $message .= "Activities you would like to engage in: $activities\n";
    $message .= "Guided tour or self-drive option: $tour\n";
    $message .= "Size of your travel group: $group\n";
    $message .= "Dietary requirements or allergies: $diet\n";
    $message .= "Preferred type of accommodation: $accommodation\n";
    $message .= "Medical conditions or physical limitations: $conditions\n";
    $message .= "Special requests for your trip: $requests\n";
    $message .= "Have you traveled with Tatu Tours and Travel before? $traveled_before\n";
    $message .= "How did you hear about Tatu Tours and Travel? $hear_about\n";
    $message .= "Expectations for this trip: $expectations\n";

    // Send the email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect to thank you page
    header("Location: thank_you.html");
    exit;
} else {
    // If someone tries to access this script directly
    header("Location: index.html");
    exit;
}
?>

