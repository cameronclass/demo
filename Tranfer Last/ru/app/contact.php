<?php

require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->CharSet = 'utf-8';


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $text = $_POST['textarea'];
    $email = $_POST['mail'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output


    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'mail.yoncu.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'info@clktransfer.com'; // Ваш логин от почты с которой будут отправляться письма
    $mail->Password = 'Cameron.Class2000'; // Ваш пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

    $mail->setFrom('info@clktransfer.com', 'Transfer Destek'); // от кого будет уходить письмо?
    $mail->addAddress('clkgrouptransfer@gmail.com');
    $mail->addAddress('kamrankutumov@gmail.com'); // Кому будет уходить письмо
    //$mail->addAddress('clkgroupcarrental@gmail.com');
    //$mail->addAddress('clkgrouptransfer@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = 'Clktransfer.com iletisim mesaji';

    $message = 'Name : ' . $name . '<br /> Phone : ' . $phone . '<br /> E-mail : ' . $email . '<br /> Message : ' . $text;

    $mail->Body = $message;

    $mail->AltBody = '';



if (!$mail->send()) {

    header('location: ../form-error.php');

} else {

    header('location: ../contact.php');
}


?>
