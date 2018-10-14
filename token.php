<?php
session_start();

$_SESSION['LoginState'] = 'SET';
$sessionId = session_id();

$sessionExp = time()+60*60*24;
setcookie('Session', $sessionId, $sessionExp, '', '', '', FALSE);

$csrfToken = hash('sha256', $sessionId.rand(1000,10000));

$tokenExp = time()+60*60*24;
setcookie($sessionId, $csrfToken, $tokenExp, '', '', '', FALSE);

header('Location: ./moneyTransfer.php');
?>