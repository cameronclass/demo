<?php



$formPlace = $_POST['from'];

$to = $_POST['to'];



$countPeople = $_POST['demo0'];



$dateTo = $_POST['date_to'];



$timeTo = $_POST['time_to'];



$backOn = $_POST['back_input'];



$backDate = $_POST['back_date'];

$backTime = $_POST['back_time'];

$valuta = $_POST['valuta'];



session_start();







$_SESSION['from'] = $formPlace;

$_SESSION['to'] = $to;

$_SESSION['valuta'] = $valuta;

$_SESSION['people'] = $countPeople;



$_SESSION['date_to'] = $dateTo;



$_SESSION['time_to'] = $timeTo;



// $_SESSION['back_input'] = $backOn;
// echo '<pre>';
// var_dump($_POST, $_SESSION);
// echo '</pre>';

if(isset($backOn)){

     $_SESSION['back_on'] = $backOn;



     $_SESSION['back_date'] = $backDate;

     $_SESSION['back_time'] = $backTime;



} else{
     unset( $_SESSION['back_on']);
}





   header('Location: /en/transfer.php');
