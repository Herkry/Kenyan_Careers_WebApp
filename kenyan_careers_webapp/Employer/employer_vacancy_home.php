<?php
session_start();
  include_once('emp_dbconnect.php');

  if(!isset($_SESSION['myid']))
  {
      header('location: employer_loginpage.php');
  }

?>


<html>
    <title>Employer Vacancy Home</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_signup.css">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_profiledisplay.css">

    </head>
    <body>

        <h3 style="text-align:center; margin-top:20px;">
           <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_homepage.php"><img src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/back_button.png" height="50px" alt=""></a>
            <b style="color:green;">Back to My Dashboard</b> </h3>

         <div class="container">

             <div id="header">
                 <h2 style = "color: blue; font-weight: bold"> My Vacancies</h2>
             </div>

             <div class="container" style="margin-left:110px;">

             <div class="row" style="display: flex;align-content:center;flex-direction:row">
               <div class="col-md-4">
                 <b style="color:blue;">Add Vacancy</b><br>
                 <a href="#"><img  width="80" height="80" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/employeradd.png" alt=""></a>
               </div>
               <div class="col-md-4">
                 <b style="color:blue;">Edit Vacancies</b> <br>
                 <a href="#"><img  width="80" height="80" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/employeredit.png" alt=""></a>
               </div>
               <div class="col-md-4">
                 <b style="color:blue;"> Check Inbox</b><br>
                 <a href="#"><img  width="80" height="80" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/employeremail.png" alt=""></a>
               </div>
             </div>
             
             </div>

        </div>
 </body>

</html>
