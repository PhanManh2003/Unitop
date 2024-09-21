<?php
$config_email= array(
//    $mail->isSMTP();                                            //Send using SMTP
//    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//    $mail->Username   = 'manhamsterdam2003@gmail.com';                     //SMTP username
//    $mail->Password   = 'mxhqsudeiujcazkt';                               //SMTP password
//    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
//    $mail->CharSet = 'UTF-8';
    
    'host'=> 'smtp.gmail.com',
    'username' => 'manhamsterdam2003@gmail.com',
    'fullname' => 'Phan Tiến Mạnh',
    'password' => 'mxhqsudeiujcazkt',
    'smtp_secure' =>'ssl',
    'port' => 465,
);
