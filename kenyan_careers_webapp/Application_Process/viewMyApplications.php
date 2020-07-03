<?php
//Require sqlFunctions
require("sqlFunctions.php");
//start session
session_start();
//Checking whether user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
  exit;
}

//Selecting details of applicant from database

//1. Selecting details of all my applications
//Get SESSION data from ISRAEL
$appId = 1;
$appId = $_SESSION["id"];



//Query
$selectApplicantJobAppDetails = "SELECT * FROM jobapplications WHERE appId = '$appId'";
$rowApplicantJobAppDetails = getData($selectApplicantJobAppDetails);

//select job name from database where job application id is in data obtained form query above
//Query
$selectAllJobs = "SELECT * FROM jobs";
$rowSelectAllJobs = getData($selectAllJobs);

//store the jobnames in an array whose length is equal to the $rowApplicantJobAppDetails associative array
$arrayJobNames= array();
$count = 0;
for ($i=0; $i < count($rowApplicantJobAppDetails); $i++) { 
    for ($q=0; $q < count($rowSelectAllJobs); $q++) { 
        if($rowApplicantJobAppDetails[$i]["jobId"] == $rowSelectAllJobs[$q]["jobId"]){
            $arrayJobNames[$count] = $rowSelectAllJobs[$q]["jobName"];
            $count++;
        } 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Mine-->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  
  <!-- MDB -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/Assets/mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/Assets/mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->

  <!--Clinton's-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/13946cb9d3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/mdb/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/animate.css">  
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/owl.carousel.min.css">
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/owl.theme.default.min.css">
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/magnific-popup.css">  
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/aos.css">  
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/ionicons.min.css">  
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/flaticon.css">
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/icomoon.css">
  <link rel="stylesheet" href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/style.css">

  <title>My Applications</title>
  <style>
      .yellow{
        background-color: yellow;
      }
      .green{
          background-color:green;
      }
      .blue{
        background-color:blue;
      }
      .orange{
        background-color:orange;  
      }
      .blue-flatui{
        background-color:#00a8ff;
      }
      .light-flatui{
        background-color:#f5f6fa;
      }
      .dark{
        background-color:black;
      }
      .height-75{
          height:75px;
      }
      .height-140{
          height:140px;
      }
      .height-120{
          height:120px;
      }
      .height-200{
          height:200px;
      }
      .text-center-align{
          text-align:center;
      }
      .height-80{
        height:80px;
      }
      .height-applicationDiv{
        height:150px;
      }
      .width-80{
        width:80px;
      }
      .width-18rem{
        width:18rem;
      }
      .neg-margin-top{
          margin-top:-40px;
      }
      .pd-top-addQualButton{
        padding-top:40px
      }

  </style>
</head>

<body>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark blue-flatui">
        <a class="navbar-brand" href="#">
            <img src="C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png"  alt="">
                   Kenya Careers
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/activities">Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/event">Events</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">About Us</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/about">About YCS Bush</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/committee">Committee Members</a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" data-target="#registration-modal" data-toggle="modal" href="#">Register</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Profile</a>
                    </div>
            </li>
          </ul>
        </div>
    </nav> -->

    <!--Clinton's navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Kenyan Career<span>.</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Upload CV</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                    <div class="navbar">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="login-dropdown" class="nav-link" style="color: orange;">Log In</a>
                                <div class="dropdown-menu nav-item" aria-labelledby="login-dropdown">
                                    <a href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php" class="nav-link" style="color: black">Job Seeker</a>
                                    <a href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_loginpage.php" class="nav-link" style="color: black">Employer</a>
                                </div>
                            </div>
                            <div class="navbar">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="signin-dropdown" class="nav-link" style="color: orange;">Sign In</a>
                                <div class="dropdown-menu nav-item" aria-labelledby="signin-dropdown">
                                    <a href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_registration.php" class="nav-link" style="color: black">Job Seeker</a>
                                    <a href="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_signup.php" class="nav-link" style="color: black">Employer</a>
                                </div>
                            </div>

                </ul>
            </div>
        </div>
    </nav>

    <section>
    <div class="row mx-0 my-0 border-bottom border-dark height-140 light-flatui">
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <div class="text-center-align pt-4">
                <!-- <img src="C:\xampp\htdocs\Kenyan_Careers_WebApp\kenyan_careers_webapp\Assets\Images\code1.jpg" class="img-fluid height-200"  alt=""> -->
                <!-- <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png" class="img-fluid"  alt="icon.png" style="width:40px; height:40px;"> -->
                <h1>Welcome <?php echo($_SESSION["name_of_user"])?></h1>
                
            </div>
        </div>
    </div>
    </section>

    <section>
    <div class="container-fluid dark">

        <div class="row rounded d-flex justify-content-center mb-4 height-75 ">
            <div class="col-sm-7 col-md-7 col-lg-7 light-flatui border border-dark rounded text-center-align neg-margin-top ">
                <h2>My Applications</h2>
                <p align="center">Your current and previous applications.</p>
            </div>
        </div>
        <?php 
            for ($i=0; $i < count($rowApplicantJobAppDetails); $i++) { 
        ?>

              <div class="row rounded d-flex justify-content-center mb-4  height-applicationDiv dark">
                  <div class="col-sm-3 col-md-3 col-lg-3 light-flatui border border-dark rounded pt-5 mr-3 text-center">
                      <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png" class="img-fluid"  alt="icon.png" style="width:40px; height:40px;">
                  </div>
                  <div class="col-sm-5 col-md-5 col-lg-5 light-flatui border border-dark rounded pt-5 mr-3 text-center">
                      <h3><?php echo($arrayJobNames[$i]) ?></h3>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3 light-flatui border border-dark rounded pt-5 text-center">
                      <form action="page-5.php" method="post">
                          <input type="hidden" name="jobAppId" value="<?php echo($rowApplicantJobAppDetails[$i]["jobAppId"])?>">
                          <input class="btn-lg btn-primary" type="submit" name="View" value="View">
                      </form>
                  </div>
              </div>

        <?php 
            }
        ?>            

    </div>
    </section>

    <!--Clinton's footer-->
    <footer class="ftco-footer ftco-footer-2 ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Kenyan Career</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md col-sm-6">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Upload CV</a></li>
                            <li><a href="#" class="py-2 d-block">About Us</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            <li><a href="#" class="py-2 d-block">FAQS</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md col-sm-6">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Categories</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Hospitality</a></li>
                            <li><a href="#" class="py-2 d-block">Finance</a></li>
                            <li><a href="#" class="py-2 d-block">Engineering</a></li>
                            <li><a href="#" class="py-2 d-block">Service</a></li>
                            <li><a href="#" class="py-2 d-block">Architecture</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Nairobi, Kenya</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+254 712345678</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@kenyanCareers.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
  <!--MDB  -->
  <!-- jQuery -->
  <script type="text/javascript" src="/Assets/mdb/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/Assets/mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/Assets/mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/Assets/mdb/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  <!--Clinton's-->
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/jquery.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/popper.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/bootstrap.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/jquery.easing.1.3.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/jquery.waypoints.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/jquery.stellar.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/owl.carousel.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/jquery.magnific-popup.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/aos.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/jquery.animateNumber.min.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/google-map.js"></script>
  <script src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/js/main.js"></script>

</body>
</html>