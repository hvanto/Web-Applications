<?php

require "C:/xampp/htdocs/Business/H&A/Website/vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

if (isset($_POST['submit'])) {
    $first_name         = filter_var($_POST['first_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $last_name          = filter_var($_POST['last_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email              = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mobile             = filter_var($_POST['mobile'], FILTER_SANITIZE_NUMBER_INT);
    $existing_website   = filter_var($_POST['existing_website'], FILTER_SANITIZE_URL);
    $price_range        = filter_var($_POST['price_range'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $requests           = filter_var($_POST['requests'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //Ensuring no blank sections
    if (empty($first_name) || empty($email) || empty($mobile)) {
        // Display error message if required fields are empty
        echo 'Please fill in all required fields.';
        header("Location: ../index.php");
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Display error message if email is invalid
        echo 'Please enter a valid email address.';
        header("Location: ../index.php");
        exit;
    } else {

        try {
            

            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // SMTP host for BlueHost
            $mail->SMTPAuth = true;

            $mail->SMTPSecure = 'tls'; // Use TLS encryption
            $mail->Port = 587; // SMTP port for BlueHost

            $mail->Username = 'hvanto19@gmail.com'; // Your BlueHost email address
            $mail->Password = 'bldlxexujmtrmtxn'; // Your BlueHost email password


            $mail->setFrom('hvanto19@gmail.com'); // Your BlueHost email address
            $mail->addAddress('admin@hnawebsolutions.com'); // Recipient email address
            

            $mail->isHTML(true);
            $mail->Subject = 'Message Received from Contact: ' . $first_name . ' ' . $last_name;
            $mail->Body = "First Name: $first_name <br>Last Name: $last_name <br>Email: $email <br>Mobile: $mobile <br> 
        Existing Website: $existing_website <br>Price Range: $price_range<br>Requests: $requests";


            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

        // Connecting to DB
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "vtd";

        $connection = mysqli_connect($host, $username, $password, $database);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Insert form data into database
        $query = $connection->prepare("INSERT INTO enquiry (first_name, last_name, email, mobile, existing_website, price_range, requests) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param('sssssss', $first_name, $last_name, $email, $mobile, $existing_website, $price_range, $requests);
        $query->execute();

        // Close the connection and statement
        $query->close();
        $connection->close();

        header("Location: ../index.php#form");
        exit;
    }
}
