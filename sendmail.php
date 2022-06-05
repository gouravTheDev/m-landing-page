<?php
function sendMail($to, $subject, $msg)
{
    // $basePath = realpath($_SERVER["DOCUMENT_ROOT"]);
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/SMTP.php';
    require 'mailconfig.php';
    $from = MAIL_FROM;

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();                                  // Set mailer to use SMTP
        $mail->Host = MAIL_HOST;               // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                         // Enable SMTP authentication
        $mail->Username = MAIL_ID;      // SMTP username
        $mail->Password = MAIL_PASSWORD;            // SMTP password
        $mail->Port = MAIL_PORT;                              // TCP port to connect to
        $mail->SMTPSecure = 'tls';

        $mail->setFrom(MAIL_ID, $from);
        $mail->addReplyTo(MAIL_ID, $from);
        $mail->addAddress($to);     // Add a recipient


        $mail->isHTML(true);  // Set email format to HTML

        $bodyContent = $msg;

        $mail->Subject = $subject;
        $mail->Body    = $bodyContent;

        $mail->send();
    } catch (Exception $e) {
        echo $e;
    }
}