<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 30;
    $mail->isSMTP();
    $mail->SMTPKeepAlive = true;
    $mail->Mailer = "smtp";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "jennifer.sabado001@gmail.com";
    $mail->Password = "chqtyurpfpmwmtiu";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("jennifer.sabado001@gmail.com", $_POST['fname'] . " " . $_POST['lname']);
    $mail->addAddress("jennifer.sabado@cvsu.edu.ph");
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'] . "\r\nFeedback from: " . $_POST['email'] . "\r\nContact No.: " . $_POST['mobile'];
    $mail->send();
    $script = "<script>
window.location = '../sent-successfully.php';</script>";
    echo $script;
} catch (Exception $e) {
    echo "There's been an error" . $e;
}
