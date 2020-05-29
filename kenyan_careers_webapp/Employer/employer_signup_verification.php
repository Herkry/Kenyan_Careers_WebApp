<?php
require_once('footer.php');
$footr = new Footer();
$footr->display_plain_footer();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_verification.css">
    <!-- <source src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/clockcounter.js"></script> -->
    <title>Employer_Verification_Page</title>
  </head>

  <body>
    <div class="container">

      <div class="verify_details">

        <div class="row">

          <div class="col-md-12">
            <!-- <a href="#change"><img id="logo" width = "100px"  src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/kenyacareer_logo_plain.png" alt="kenyaCareer_logo" /></a> -->
            <!-- <b id="text1">Additional Verification</b> -->
          </div>

        </div>

        <div id="second" class="row">
          <div class="col-md-12">
          <b>A verification code has been sent to your Email Address: </b> <br> <br>

            <form class="" action="employer_signup_verification.php" method="post">
              <input type="text" name="vercode" id="vercode" required class="form-control" placeholder="Input code to Activate account" aria-describedby="helpId"><br>
              <button name="submit" type="submit" class="btn btn-outline-primary">Activate Account</button>

              <br> <br> <br> <br> <br>
              <button name="" type="" class="btn btn-outline-primary">Resend Email</button>
              <button name="submit" type="submit" class="btn btn-outline-primary">Verify PhoneNumber</button>
            </form>

          </div>

        </div>

        </div>

      </div>

    </div>

  </body>
</html>
  <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kenyan_careers_webapp_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $verificationkey = mysqli_real_escape_string($conn,$_POST['vercode']);
            echo $verificationkey;
            $sql = "UPDATE employer_details SET emp_status = 1 WHERE emp_verification = '$verificationkey'";

            if ($conn->query($sql) === TRUE)
            {
                echo "<script>
                  alert('Verification Complete. Now you can Login!');
                </script>";

                header('Location: employer_loginpage.php');

            } else
            {
                echo "Error verifying record: " . $conn->error;
            }
            
        }
        $conn->close();

  ?>
