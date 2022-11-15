<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'assets/vendor/PHPMailer/src/Exception.php';
require 'assets/vendor/PHPMailer/src/PHPMailer.php';
require 'assets/vendor/PHPMailer/src/SMTP.php';

function send_email($from, $from_name, $to, $to_user, $subject, $message)
{
    //script php mailer
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "zakamaragames@gmail.com";
    $mail->Password = "cfxatavqrardcuhv";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($from, $to_user);

    $mail->addAddress($to, $from_name);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    ob_start();
    include('email_template.php');
    $mail->Body = ob_get_clean();
    ob_end_clean();
    if ($mail->send()) {
        return true;
    } else {
        return "Mailer Error: $mail->ErrorInfo";
    }
}

function feedback($from, $from_name, $to, $subject, $message)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "zakamaragames@gmail.com";
    $mail->Password = "cfxatavqrardcuhv";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($from, $from_name);
    $mail->addAddress($to);

    $mail->isHTML(true);
    $mail->Subject = $subject;

    ob_start();
    include('feedback_template.php');
    $mail->Body = ob_get_clean();
    ob_end_clean();

    if ($mail->send()) {
        return true;
    } else {
        return "Mailer Error: $mail->ErrorInfo";
    }
}
