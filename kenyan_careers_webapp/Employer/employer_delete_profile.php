<?php
session_start();
 require_once('footer.php');
 $footr = new Footer();
 $footr->display_plain_footer();

 if(!isset($_SESSION['myid']))
 {
     header('location: employer_signup.php');
 }
  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_verification.css">
     <!-- <source src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/clockcounter.js"></script> -->
     <title>Employer_Delete_Page</title>
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
           <b style="font-size:25px;color:red;">Confirm you want to delete your account! This action cannot be undone!  </b> <br> <br>

               <br> <br> <br> <br>

               <form class="" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                 <a href="employer_homepage.php"><button name="cancel" type="" class="btn btn-outline-primary">Cancel</button></a>
                  <button name="submit" type="submit" class="btn btn-outline-danger">Delete</button>
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
          $empid = $_SESSION['myid'];
         if($_SERVER["REQUEST_METHOD"] == "POST")
         {
             $sql = "DELETE FROM employer_details WHERE emp_id = $empid";

             if ($conn->query($sql) === TRUE)
             {
                 echo "<script>
                 alert(\"Your account has been deleted!\");
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
