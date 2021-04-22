<?php
require('functie.php');
require('Database.php');

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Home</title>
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
        <h1><a>The<span class="logo_colour"> Ledger</a></h1>
      </div>

      <div id="site_content">
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
    </div>
</body>

</html>