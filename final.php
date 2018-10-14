<?php

session_start();
if (!isset ($_SESSION['LoginState'])){
    ob_start();
    header('Location: ./login.html');
    ob_end_flush();
    die();
}

if(isset($_COOKIE["Details"])){
    $pieces = explode(",", $_COOKIE["Details"]);
    $accountnumber = $pieces[0];
    $amount = $pieces[1];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required CSS -->
    <link rel="stylesheet" href="./styles.css">
    <title>Money Transfer</title>
  </head>

  <body>
    <label><h3><?php echo $_SESSION['status']; ?></h3></label>
    <label><br>Account Number : <?php echo $accountnumber ?></label>
    <label><br>Amount : <?php echo $amount ?></label>
  </body>
</html>