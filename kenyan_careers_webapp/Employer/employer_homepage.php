<?php
require_once('header.php');
require_once('footer.php');
$headr = new Header();
$headr->isLoggedin();

$footr = new Footer();
$footr->isLoggedin();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employer Homepage</title>
  </head>
  <body>

    <div class="container">
        <!--This part displays the blog content-->
    </div>

  </body>
</html>
