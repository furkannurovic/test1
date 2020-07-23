<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$username = $_POST["userName"];
$phonenumber = $_POST["userEmail"];
$adress = $_POST["userMessage"];

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp-relay.gmail.com';                 // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'furkan.nurovic@bosnjackagim.edu.ba';                 // SMTP username
$mail->Password = 'sjediodlican5';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'from@example.com';
$mail->FromName = 'Mailer';
$mail->addAddress('furkan.nurovic@gmail.com', 'Furkan Nurovic');     // Add a recipient


$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'AHIRETSKA OBSKRBA';
$mail->Body    = 'IME: $username \n TEL: $phonenumber \n ADRESA: $adress';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>