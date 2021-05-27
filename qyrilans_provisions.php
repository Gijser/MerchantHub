<?php
require('functie.php');
session_start();

$_SESSION["merchant"] = '1';
$_SESSION["URL"] = 'qyrilans_provisions.php';

//echo $_SESSION["merchant"];

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Qyrilan's Provisions</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <!-- class="logo_colour", allows you to change the colour of the text -->
        <h1><a href="index.php">The<span class="logo_colour"> Ledger</a></h1>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="qyrilans_provisions.php">Qyrilan's shop</a></li>
          <li><a href="larz_blacksmith.php">larz's blacksmith</a></li>
          <!-- <li><a href="contact.asp">Contact</a></li>
          <li><a href="about.asp">About</a></li>-->
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <?php
        moneyOverzicht();
        ?>
        <p>de 1.xx is het gold aantal</p>
        <p>de x.1x is het silver aantal</p>
        <p>de x.x1 is het copper aantal</p>
      </div>
      <div>
        <?php
        ledgerOverzicht();

        ?>
      </div>

      <div>
        <form class="form_settings" method="post" name="toevoegen">
          <input type="text" name="naam" placeholder="naam">
          <br>
          <input type="number" name="aantal" placeholder="aantal">
          <br>
          <input type="number" name="gold" placeholder="gold">
          <br>
          <input type="number" name="silver" placeholder="silver">
          <br>
          <input type="number" name="copper" placeholder="copper">
          <br>
          <button class="submit" type="submit" name="toDB">Toevoegen</button>
        </form>
        <?php
        ledgerAdd();
        ?>

      </div>
    </div>
    <div id="footer">

      <p>Copyright &copy; simple_light | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>

</body>

</html>