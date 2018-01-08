<?php
$msg = "";
// Checks if has been submited and if the method is POST
if (filter_has_var(INPUT_POST, 'submit') && $_SERVER['REQUEST_METHOD'] === "POST") {
    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Check if required fields are not empty
    if (!empty($email) && !empty($name) && !empty($message)) {
        // checks email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = "Please use a valid email";
        } else {
            // Recipient
            $to = "carmocanueduard@gmail.com";
            $subject = "Contact Request From " . $name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>' . $name . '</p>
                <h4>Name</h4><p>' . $email . '</p>
                <h4>Name</h4><p>' . $message . '</p>
            ';

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if (mail($to, $subject, $body, $headers)) {
            $msg = "Your message has been succesfully sent!";
            }else {
                $msg = "There has been an internal error when sending you email, Please Try again";
            }
        }
    } else {
        $msg = "Please fill in all fields";
    }
} else {
    // $msg = "There has been a problem in submitting the from, Try refreshing the page";
}
