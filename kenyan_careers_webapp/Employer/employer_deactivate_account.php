<?php
session_start();
if(!isset($_SESSION['myid']))
{
    header('location: employer_signup.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deactivate Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <style media="screen">
    body {
          font-family: sans-serif;
          background: white;
          }
          h2 {
          margin: 5px 0;
          }
          #wrapper {
          width: 600px;
          margin: 0 auto;
          background: white;
          padding: 10px 15px;
          border-radius: 10px;
          }
          input {
          margin: 5px 10px;
          }
          button {
          font-size: 18px;
          padding: 10px;
          margin: 20px 0;
          color: white;
          border: 0;
          border-radius: 10px;
          border-bottom: 3px solid #333;
          }
          #submit {
          background: blue;
          }
          #reset {
          background: red;
          }
          #answer {
          border: 1px dashed #ccc;
          background: #eee;
          padding: 10px;
          }
    </style>
    <div id="wrapper">



  <h1 style="color:red;">Deactivate your account</h1>
  <p>Deactivating your account may result in the clearing of your data from the system. However, your profile may still be activated
  from the Homepage. Please fill in the following to help us improve our service!</p>

  <form id="quiz" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <!-- Question 1 -->
    <h2>Why do you want to disable your account?</h2>
    <label><input type="radio" name="q1" value="c1">
      I cannot get quality candidates.
    </label><br />
    <label><input type="radio" name="q1" value="c2">
      I don't have any more jobs for now.
    </label><br />
    <label><input type="radio" name="q1" value="c3">
      Too much disturbance from Kenyan Careers.
    </label><br />
    <label><input type="radio" name="q1" value="c4">
      I want to try something new.
    </label><br />

    <!-- Question 2 -->
    <h2>Are you likely to recommend us to your friends?</h2>
    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
    <label><input type="radio" name="q2" value="c1">
      Yes, you are fantastic.
    </label><br />
    <label><input type="radio" name="q2" value="c2">
      No, your performance is not great.
    </label><br />

    <button type="submit" id="submit">Deactivate Account</button>
    <h3 style="text-align:center; margin-top:20px;">
       <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_homepage.php"><img src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/back_button.png" height="50px" alt=""></a>
        <b style="color:green;"></b> </h3>
  </form>
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
       $empid = $_SESSION['myid'];
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
          $sql = "UPDATE TABLE employer_details SET emp_status='0' WHERE emp_id = $empid";

          if ($conn->query($sql) === TRUE)
          {
              echo "<script>
              alert(\"Your account has been successfully deactivated!\");
              window.location='employer_loginpage.php';
              </script>";
          }
          else
          {
              echo "Error! Please try again!  " . $conn->error;
          }
      }
      $conn->close();
?>
