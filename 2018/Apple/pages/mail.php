<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$actual_link = $_SERVER['HTTP_REFERER'];;

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$color = $_POST['appleWatch'];
$size = $_POST['size'];
//$connectivity = $_POST['connectivity'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'babochkinarkady@yandex.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'gzx-GED-U4y-nGi'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('babochkinarkady@yandex.ru'); // от кого будет уходить письмо?
$mail->addAddress('oleg.maxno77@yandex.ru');     // Кому будет уходить письмо 
// $mail->addAddress('oleg.maxno77@yandex.ru');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Apple';
$mail->Body    = 'Имя: ' .$name . '<br>Телефон :' .$phone. '<br>Данные Заказа:<br> Ссылка на часы:' .$actual_link. '<br>Цвет :'.$color.'<br> Размер: '.$size;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>