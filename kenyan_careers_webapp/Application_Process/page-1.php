

<?php
// Initialize the session
// session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//   header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
//   exit;
// }

?>

<?php

require_once "sqlFunctions.php";
$link = connect();
//$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>

  
  
<meta charset="utf-8">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

  <style>
    #status {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #status td, #status th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #status tr:nth-child(even){background-color: #f2f2f2;}

    #status tr:hover {background-color: #ddd;}

    #status th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #2E86C1;
      color: white;
    }
   .jumbotron {
  
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); 
    /* padding-top: 33%; 
    padding-bottom: 10%; */
    /* background-size: cover; */
    padding-top: 5%;
    padding-bottom: 1%;
   }
 
   @media screen and (max-width: 991px) {
    .jumbotron {
      padding-top: 35%;
      padding-bottom: 3%;

      }
    }
    </style>
  
</head>
<body>

<!-- <div class="jumbotron"> -->

<!-- <nav class="navbar navbar-fixed-top navbar-inverse">
<div id="constant" style="background: white; height: 40px; position: relative;">

</div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/logo.jpg" alt="logo" style="width:85px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">APPLY</a></li>
        <li><a href="#">LINK A</a></li>
        <li><a href="#">LINK B</a></li>
        <li ><a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_logout.php" style=""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav> -->

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
                            <li class="nav-item"><a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_logout.php" class="nav-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>




                        </ul>
                    </div>
                </div>
            </nav>


<div class="jumbotron text-center">
  <h1 style="border-radius: 25px; color: black; text-transform: uppercase;">Job Description</h1> 
</div>


<!-- Container (News Section) -->
<div id="news" class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-6">
            <div class="thumbnail bg-grey">
                <img src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/social.jpg" class="img-responsive" alt="Picture" width="400" height="300" style="max-height: 500px; object-fit: cover;">

         
            </div>

        </div>
        
        <div class="col-sm-6">
            <?php
                  $jobId = $_POST["jobId"];
                  $query1 = "SELECT * FROM `jobs` WHERE jobId = '$jobId'";
                  $result = $link->query($query1);

                  while ($row = $result->fetch_assoc()){

                    
                    
                    
                  echo "

                  <h2 style='color:#2E86C1;'>Job Title</h2>
                  <hr style='border-top: 1px solid grey;'>
                  <h2>".$row['jobName']."</h2><br>
                  <h3>Description</h3>
                  <hr style='border-top: 1px solid grey;'>
                
                  <h4>".$row['jodDescr']."</h4>
                
                  <form method='post'>
                  <input type = 'hidden' name = 'jobId' value = '".$row['jobId']."'/>
                
                  </form>	

                  ";
                  }
            
            ?>

        </div>  
             
    </div>
    <hr style="border-top: 1px solid grey;">
    
    <div class="row">
        <h2><strong>Job Requirements</strong></h2>
        <br>
        <table id="status">
          <tr>
            <th>What skills and certifications are required?</th>

            <?php
                  $jobId = $_POST["jobId"];
                  $query2 = "SELECT * FROM `jobrequirements` WHERE jobId = '$jobId'";
                  $result = $link->query($query2);

                  while ($row = $result->fetch_assoc()){

                    
                  echo "

                  <tr>
                    <td>".$row['jobReqDescr']."</td>
                  </tr>
                  
              
                  <form method='post'>
                  <input type = 'hidden' name = 'jobId' value = '".$row['jobId']."'/>
                
                  </form>	
                  ";
                }

                echo "



          </tr>
         
        </table>
    </div>
    <div class='row'>
    <br>
    <div class='col-sm-8'>
    
    <form method='post' action='/Kenyan_Careers_WebApp/kenyan_careers_webapp/Application_Process/applicationDetails.php'>
        <input type = 'hidden' name = 'jobId' value = '".$jobId."'/>
        <input type='submit' class='btn btn-success' value='Apply Now'>

    </form>
    

    </div>
    <div class='col-sm-4'>
    <a href='#'><button type='button' class='btn btn-warning'>Skype Job</button></a>
    "

?>
    </div>
    </div>
</div>


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
            <!--End of Footer-->



            <!-- loader -->
            <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


            <script src="Assets/js/jquery.min.js"></script>
            <script src="Assets/js/jquery-migrate-3.0.1.min.js"></script>
            <script src="Assets/js/popper.min.js"></script>
            <script src="Assets/js/bootstrap.min.js"></script>
            <script src="Assets/js/jquery.easing.1.3.js"></script>
            <script src="Assets/js/jquery.waypoints.min.js"></script>
            <script src="Assets/js/jquery.stellar.min.js"></script>
            <script src="Assets/js/owl.carousel.min.js"></script>
            <script src="Assets/js/jquery.magnific-popup.min.js"></script>
            <script src="Assets/js/aos.js"></script>
            <script src="Assets/js/jquery.animateNumber.min.js"></script>
            <script src="Assets/js/scrollax.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
            <script src="Assets/js/google-map.js"></script>
            <script src="Assets/js/main.js"></script>


</body>
</html>
