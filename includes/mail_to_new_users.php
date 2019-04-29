<?php
use PHPMailer\PHPMailer\PHPMailer;

include_once "../lib/PHPMailer/PHPMailer.php";
include_once "../lib/PHPMailer/Exception.php";
include_once "../lib/PHPMailer/SMTP.php";

function Send_Mail($email_receiver,$subject,$message){

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com"; // host
    $mail->SMTPAuth = true;         //set authentication to true
    $mail->SMTPSecure = "ssl";  // set type of Protection
    $mail->Port = 465;          // set port

    // set login details for Gmail accounts
    $mail->Username = 'kabelivehicleservice@gmail.com';
    $mail->Password = 'kabeli8628';


    try {
        $mail->setFrom('kabelivehicleservice@gmail.com'); // set who is sending the mail
    } catch (\PHPMailer\PHPMailer\Exception $e) {
    }

    $mail->addAddress($email_receiver); // where we are sending mail
    $mail->isHTML(true);
    $mail->Subject = $subject; // set subject
    $mail->Body = $message ; // set body

    return $mail->send();
}

?>
