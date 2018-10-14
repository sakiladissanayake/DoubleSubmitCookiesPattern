<?php

session_start();
if (!isset ($_SESSION['LoginState'])){
    ob_start();
    header('Location: ./login.html');
    ob_end_flush();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./tokenRequest.js"></script>

    <title>Money Transfer</title>
  </head>

  <!--Invoking a javascript function to get CSRF token and set it in the hidden field of form -->
  <body onload="tokenRequest('<?php echo $_COOKIE['Session'];?>')">
  <div class="wrapper">
    <form name="loginForm" action="validateToken.php"  method="post">
      <h2>Money Transfer</h2>
      <br>
      Account Number: <br> <input type="text" required="required" class="input-group mb-3" name="accountnumber">
      <br>
      Amount: <br> <input type="text" required="required" name="amount" >
      <br><br>
      <input type="hidden" id="token" name="token" value="" />
      <input type="hidden" id="cookie" name="cookie" value="" />
      <input type="submit" value="Send">
    </form>
  </div>
  </body>
</html>