<<?php
require_once('header.php');
require_once('footer.php');

$headr = new Header();
$headr->plain_header_display2();

$footr = new Footer();
$footr->display_socialmedia_footer();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_verification.css">
     <!-- <source src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/clockcounter.js"></script> -->
     <title>Employer_Login_Page</title>
   </head>
   <body>
     <div class="container">

       <div class="verify_details">

         <div class="row">

           <div class="col-md-12">
             
           </div>

         </div>

         <div id="second" class="row">
           <div class="col-md-12">
           <b>Input your details to login to your account: </b> <br> <br>

             <form class="" action="employer_login_check.php" method="post">

               <input type="email" name="email" id="vercode" required class="form-control" placeholder="Input your emailaddress" aria-describedby="helpId"><br>
               <input type="password" name="password" id="vercode" required class="form-control" placeholder="Input your password" aria-describedby="helpId"><br>
               <button name="submit" type="submit" class="btn btn-outline-primary">Login</button>
           </div>
         </div>

         </div>

       </div>

     </div>

   </body>
 </html>
