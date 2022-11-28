<?php

/**
 * Include external classes
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require 'classes/Config.php';


/**
 * Configure PHPMailer
 */
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = Config::SMTP_HOST;
$mail->Port = Config::SMTP_PORT;
$mail->SMTPAuth = true;
$mail->Username = Config::SMTP_USER;
$mail->Password = Config::SMTP_PASSWORD;
$mail->SMTPSecure = 'tls';
$mail -> CharSet = "UTF-8";


/**
 * Send an email
 */
$mail->setFrom('yannickbabou@gmail.com');
$mail->addAddress('yannickbabou@gmail.com');

$mail->Subject = 'message from my photo website';
$mail->Body = 'from: '.$_GET['name'].'\n'.'email: '.$_GET['email'].'\n'.$_GET['body'];

if ($mail->send()) {
	echo 'Thank you, we\'ve received your message!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
