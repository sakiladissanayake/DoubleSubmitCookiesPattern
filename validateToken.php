<?php
session_start();

if (!isset ($_SESSION['LoginState'])){
    ob_start();
    header('Location: ./login.html');
    ob_end_flush();
    die();
}

$userCSRF = $_POST['token'];
$cookieCSRF = $_POST['cookie'];
$cookieValue = $_COOKIE[$cookieCSRF];

if ($userCSRF == $cookieValue){
  $_SESSION['status'] = "Transaction successfull!!! ";
  setcookie("Details",$_POST['accountnumber'].",".$_POST['amount']);
}else{
  $_SESSION['status'] = "Current token is invalid!!!";
  setcookie("Details","".","."");
}
header('Location: ./final.php');
?>