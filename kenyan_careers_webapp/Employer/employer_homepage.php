<?php
session_start();
require_once('header.php');
require_once('footer.php');
$headr = new Header();
$headr->isLoggedin();

$footr = new Footer();
$footr->isLoggedin();

if(!isset($_SESSION['myid']))
{
    header('location: employer_loginpage.php');
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employer Homepage</title>
    <?php echo $_SESSION['myid']; ?>
  </head>
  <body>

    <div class="container">
        <!--This part displays the blog content-->
    </div>

  </body>
</html>
