<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

    $mail ->Username = 'itspersonal077@gmail.com';
    $mail ->Password = 'itwwjbcnueougtje';

$mail->setFrom($email, $name);
$mail->addAddress('itspersonal077@gmail.com', 'Owner');
$mail->Subject = $subject;
  $mail->Body    = 'Name: '.$name."\r\n".
                   'Email: '.$email."\r\n".
                   'Message: '.$message;
if($mail->send()){
            echo
            "
            <div class='popup' id='popup'>
            <span class='popup__close' onclick='hidePopup()'>&times;</span>
            <p>Your message has been sent successfully.</p>
            </div>
                <script>
                document.location.href = 'contact.php';
                </script>";
        }
        else{
            {echo
                "<script>
                    document.location.href = 'contact.php';
                </script>";}
        }
?>