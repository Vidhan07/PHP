<?php
require 'PHPMailer/PHPMailerAutoload.php';
$to=$_POST['email'];
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'cvcngo0704@gmail.com';                 // SMTP username
$mail->Password = 'vidhanvidhisharon2508';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('cvcngo0704@gmail.com', 'Change Vadodara Campaign NGO Admin');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
//$mail->addReplyTo('15ce053@charusat.edu.in', 'Vidhi');
$mail->addAddress($to);               // Name is optional
$mail->addCC('15ce053@charusat.edu.in');
$mail->addCC('15ce027@charusat.edu.in');

//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Password reset request for your CVC account';
$mail->Body    = 'Dear user,<br><br>You recently requested for your password to be reset for your CVC account and you can do so by clicking on the link - http://localhost/NGO/resetpass.php<br><br> 
	If you did not request a password reset, do not worry. No action is required at your end; you may continue using CVC account with your old password.<br><br>
Many thanks, 
Team CVC  ';
//$mail->AltBody = 'This is to check the php mailer';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}