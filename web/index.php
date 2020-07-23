<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';

$username = $_POST["userName"];
$phonenumber = $_POST["userEmail"];
$adress = $_POST["userMessage"];

$mail = new PHPMailer;

$mail->isSMTP();    
$mail->Host = ' smtp.zoho.eu';                 // Specify main and backup SMTP servers
$mail->SMTPAuth = true;        
$mail->Port = 587;      
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                           // Enable encryption, 'ssl' also accepted                  // Enable SMTP authentication
$mail->Username = 'email@ishakdervisevic.com';                 // SMTP username
$mail->Password = 'atwas64atwwbwb32';                           // SMTP password

$mail->From = 'email@ishakdervisevic.com';
$mail->FromName = 'Ishak Dervisevic';
$mail->addAddress('furkan.nurovic@gmail.com', 'Furkan Nurovic');     // Add a recipient


$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'AHIRETSKA OBSKRBA';
$mail->Body    = 'IME: ${username} \n TEL: ${phonenumber} \n ADRESA: ${adress}';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
