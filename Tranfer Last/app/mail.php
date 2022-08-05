<?php



session_start();





require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->CharSet = 'utf-8';




if(empty($_SESSION)){

    header('location: /form-error.php');

    return false;

}


    $name = $_POST['name'];

    $name1 = $_POST['name1'];
    $passport1 = $_POST['pasaport1'];

    $name2 = $_POST['name2'];
    $passport2 = $_POST['pasaport2'];

    $name3 = $_POST['name3'];
    $passport3 = $_POST['pasaport3'];

    $name4 = $_POST['name4'];
    $passport4 = $_POST['pasaport4'];

    $name5 = $_POST['name5'];
    $passport5 = $_POST['pasaport5'];

    $name6 = $_POST['name6'];
    $passport6 = $_POST['pasaport6'];


    $phone = $_POST['phone'];

    $email = $_POST['email'];

    $time = $_POST['time'];

    $air_company = $_POST['air_company'];

    $flight_number = $_POST['flight_number'];

    $destination = $_POST['destination'];

    $special_note = $_POST['special_note'];

    $child_seat = $_POST['child_seat'];

    $from = $_SESSION['from'];

    $to = $_SESSION['to'];

    $people = $_SESSION['people'];

    $date_to = $_SESSION['date_to'];

    $time_to = $_SESSION['time_to'];

    $back_on = $_SESSION['back_on'];

    $back_date = $_SESSION['back_date'];

    $back_time = $_SESSION['back_time'];

    $price = $_SESSION['price'];

    $price_2x = $_SESSION['price_2x'];
    $auto =  $_SESSION['name_auto'];





//$mail->SMTPDebug = 3;                               // Enable verbose debug output



    $mail->isSMTP(); // Set mailer to use SMTP

    $mail->Host = 'mail.yoncu.com'; // Specify main and backup SMTP servers

    $mail->SMTPAuth = true; // Enable SMTP authentication

    $mail->Username = 'info@clktransfer.com'; // Ваш логин от почты с которой будут отправляться письма

    $mail->Password = 'Cameron.Class2000'; // Ваш пароль от почты с которой будут отправляться письма

    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted

    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров



    $mail->setFrom('info@clktransfer.com', 'CLK VIP Transfer'); // от кого будет уходить письмо?

    $mail->addAddress('clkgrouptransfer@gmail.com');
    $mail->addAddress('kamrankutumov@gmail.com'); // Кому будет уходить письмо
    $mail->addAddress($email); // Кому будет уходить письмо
    //$mail->addAddress('clkgroupcarrental@gmail.com');
    //$mail->addAddress('clkgrouptransfer@gmail.com');



    $mail->isHTML(true);



    $mail->Subject = 'Transfer Siparişiniz';


    $message = '<html><body>';

    $message .= '<div style="border-radius: 0.25rem !important; overflow: hidden; display: inline-block; margin:auto; -webkit-transition: 300ms ease; transition: 300ms ease; border: 1px solid #e98d1f6b;
                    -webkit-box-shadow: 0px 5px 30px -16px #adadad;
                    box-shadow: 0px 5px 30px -16px #adadad;
                    width: 99%;

                    ">';

    $message .= '<h2 style="
                    margin:0;
                    padding: 0 70px;
                    text-align: center;
                    border-bottom: none;
                    background-color: #fbda7b;
                    color: #944d4d;
                    font-weight: bold;
                    font-size: 19px;">Rezervasyon Özeti</h2>';
    $message .= '<table style="border-collapse: collapse;           width: 100%;

                    color: #212529;">';

    $message .= '<tbody>';

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>İsim </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between;top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $name . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>E-mail </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $email . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>GSM / Telefon </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $phone . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Kişi Sayısı </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $people . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Araç Seçimi </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $auto . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Transfer Alış Yeriniz </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $from . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Transfer Bölgesi </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $to . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Transfer Alış Tarihi </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $date_to . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Alış Saati </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $time . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Havayolu Şirketi </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $air_company . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Uçuş Kodu </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $flight_number . "</td>
            </tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Gidilecek Yer </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $destination . "</td>
            </tr>";
if(isset($child_seat)){
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Bebek Koltuğu </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>Evet</td>
            </tr>";
}

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Özel Notunuz </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $special_note . "</td>
            </tr>";

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Yolcu ismi </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $name1 . "</td>
</tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Kimlik veya Pasaport </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $passport1 . "</td>
</tr>";

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Yolcu bilgileri </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $name2 . "</td>
</tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Kimlik veya Pasaport </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $passport2 . "</td>
</tr>";

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Yolcu bilgileri </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $name3 . "</td>
</tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Kimlik veya Pasaport </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $passport3 . "</td>
</tr>";

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Yolcu bilgileri </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $name4 . "</td>
</tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Kimlik veya Pasaport </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $passport4 . "</td>
</tr>";

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Yolcu bilgileri </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $name5 . "</td>
</tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Kimlik veya Pasaport </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $passport5 . "</td>
</tr>";

$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Yolcu bilgileri </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $name6 . "</td>
</tr>";
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
<th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Kimlik veya Pasaport </th>
<td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $passport6 . "</td>
</tr>";

if(isset($back_on)){
if(isset($back_date)){
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Geri Transfer Tarihi </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $back_date . "</td>
            </tr>";
}
if(isset($back_time)){
$message .= "<tr style='font-size: 13px; border-top: 1px solid #e98d1f6b; width: 100%;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Geri Transfer Saati </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 10px 15px; font-weight: bold;'>" . $back_time . "</td>
            </tr>";
}

$message .= "<tr style='font-size: 20px; border-top: 1px solid #e98d1f6b; width: 100%; background-color: #fde7a7;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Toplam Tutar </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 20px 15px; font-weight: bold;'>" . $price_2x . "</td>
            </tr>";
}else{
   $message .= "<tr style='font-size: 20px; border-top: 1px solid #e98d1f6b; width: 100%; background-color: #fde7a7;'>
                <th scope='row' style='text-align:left; display: flex;  align-items: center; justify-content: space-between; border-top: none; padding: 10px 15px; width: 100%;'>Toplam Tutar </th>
                <td style='width: 100%; text-align:right; display: flex;  align-items: center; justify-content: space-between; border-top: none; color: #e78000; padding: 20px 15px; font-weight: bold;'>" . $price . "</td>
            </tr>";
}








    $message .= '</tbody>';
    $message .= "</table>";
    $message .= "<div>";
    $message .= "</body></html>";

    $mail->Body = $message;

    $mail->AltBody = '';



if (!$mail->send()) {

    header('location: /form-error.php');



} else {

    header('location: /form-end.php');

    $_SESSION['name'] = $name;

    $_SESSION['phone'] = $phone;

    $_SESSION['peoples'] = $people;


    $_SESSION['email'] = $email;

    $_SESSION['time'] = $time;

    $_SESSION['air_company'] = $air_company;

    $_SESSION['flight_number'] = $flight_number;

    $_SESSION['destination'] = $destination;

    $_SESSION['special_note'] = $special_note;

    $_SESSION['child_seat'] = $child_seat;



}









?>
