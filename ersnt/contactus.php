<?php 
use PHPMailer\PHPMailer\PHPMailer;
require './vendor/autoload.php';

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


// $email="sales@hit.ac.zw";
$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPDebug=0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.mailtrap.io';
$mail->Port = 2525;
$mail->Username = '93404f068380b0'; //paste one generated by Mailtrap
$mail->Password = '141755245f84cd'; //paste one generated by Mailtrap


$mail->setFrom($email);
$mail->Subject = $subject;
$mail->Body = $message;
// $mail->addReplyTo($email, 'Mailtrap');
$mail->addAddress('Keithmbofana1@gmail.com', 'TTLCC'); 

$mail->isHTML(true);



if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>