<?php
//start session
session_start();
//Checking whether user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
    exit;
  }
//Test
// $_SESSION["qualifications"][0] = array(
//     "university"=>"UON",
//     "certification"=>"Bsc Computer Science",
//     "noOfYrs"=>"4 years"
//     );


// ?>

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

  <title>Qualifications</title>
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

<body class="">

    <!-- <nav class="navbar navbar-expand-lg navbar-dark blue-flatui">
        <a class="navbar-brand" href="#">
            <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png"  class="img-fluid" alt="" style="width:40px; height:40px;">                     Kenya Careers
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
                            <a href="#" class="nav-link" style="color: black">Job Seeker</a>
                            <a href="#" class="nav-link" style="color: black">Employer</a>
                        </div>
                    </div>
                    <div class="navbar">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="signin-dropdown" class="nav-link" style="color: orange;">Sign In</a>
                        <div class="dropdown-menu nav-item" aria-labelledby="signin-dropdown">
                            <a href="#" class="nav-link" style="color: black">Job Seeker</a>
                            <a href="#" class="nav-link" style="color: black">Employer</a>
                        </div>
                    </div>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal #Add Qualification# Form  -->
    <div class="modal fade" tabindex="-1" role="dialog" id="qual">
        <form action="qualificationsProcess.php" method="post">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Qualification</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <input class="form-control" type="text" name="university" placeholder="University" required><br>
                    <input class="form-control" type="text" name="certification" placeholder="Certification" required><br>
                    <input class="form-control" type="text" name="noOfYrs" placeholder="Number of Years" required><br>
                </div>
                <div class="modal-footer">
                    <input class="btn-lg btn-primary" type="submit" name="Add" value="Add">
                </div>
              </div>
            </div>
        </form>
    </div>
    
    <section>
    <div class="row mx-0 my-0 border-bottom border-dark height-140 light-flatui">
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <div class="text-center-align pt-4">
                <!-- <img src="C:\xampp\htdocs\Kenyan_Careers_WebApp\kenyan_careers_webapp\Assets\Images\code1.jpg" class="img-fluid height-200"  alt=""> -->
                <!-- <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png"  class="img-fluid" alt="" style="width:40px; height:40px;">                 -->
                <h1>Welcome <?php echo($_SESSION["name_of_user"])?></h1>
            </div>
        </div>
    </div>
    </section>

    <section>
    <div class="container-fluid dark">
            <div class="row rounded d-flex justify-content-center  mb-4 height-75 ">
                <div class="col-sm-7 col-md-17 col-lg-7 rounded border border-dark light-flatui text-center-align neg-margin-top">
                    <h2>Qualifications</h2>
                    <p align="left">You will be required to enter details of any formal certifcaitons you might have undertaken. This information will be used to evaluate your application.</p>
                </div>
            </div>
            <!-- If $_SESSION("qualifications") is empty display NoQuals div else display the Quals div-->
            <?php
            // $qualificationsNumber = 
            if (count($_SESSION["qualifications"]) == 0){
            ?>
                <div class="row rounded d-flex justify-content-center mb-4 dark height-120">
                    <div class="col-sm-7 col-md-17 col-lg-7 border border-dark text-center pt-4 light-flatui ">
                        <h3>You currently have not added any qualifications</h3>
                    </div>
                </div>
            <?php
            }
            else{
            ?>
                <div class="row rounded d-flex justify-content-center mb-4 light-flatui height-200">
                    <div class="card-deck">
            <?php
                //Continue from here
                for($i = 0; $i < count($_SESSION["qualifications"]); $i++){
            ?>
                    <div class="card width-18rem">
                        <div class="card-header">
                            Qualification
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <?php echo($_SESSION["qualifications"][$i]["university"])?> </li>
                            <li class="list-group-item"> <?php echo($_SESSION["qualifications"][$i]["certification"])?> </li>
                            <li class="list-group-item"> <?php echo($_SESSION["qualifications"][$i]["noOfYrs"])?> </li>
                        </ul>
                    </div>
            <?php        
                }
            ?>
                </div>
            </div>  
            <?php
            }
            ?>
                         
            <div class="row rounded d-flex justify-content-center mb-4 dark height-120">
                <div class="col-sm-7 col-md-7 col-lg-7 pd-top-addQualButton border border-dark text-center light-flatui">
                    <button type="button" class="btn-lg btn-primary" data-toggle="modal" data-target="#qual">Add Qualification</button>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center dark height-120">
                <div class="col-sm-7 col-md-7 col-lg-7 border border-dark text-center pd-top-addQualButton light-flatui">
                    <form action="qualificationsProcess.php" method="post">
                        <input class="btn-lg btn-primary" type="submit" name="Next" value="Next">
                    </form>
                </div>
            </div>
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

    
  <!--Mine-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    
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