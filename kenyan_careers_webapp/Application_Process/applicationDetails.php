<?php
//Require--Check for errors
require("sqlFunctions.php");
//start sessions
session_start();

//Checking whether user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
    exit;
  }
//getting user's name
//Get SESSION data from ISRAEL
$appId = 1;
$appId = $_SESSION["id"];


//Query
$selectApplicantName = "SELECT * FROM applicants WHERE appId = '$appId'";
$rowSelectApplicantName = getData($selectApplicantName);

//create session for user name logged
$_SESSION["name_of_user"] = $rowSelectApplicantName[0]["appLname"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  
  <!-- MDB -->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/Assets/mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/Assets/mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->

  <title>Application Details</title>
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
      .btn-next-bcg{
        background-color:#00a8ff;
      }
      .blue-flatui{
        background-color:#00a8ff;
      }
      .light-flatui{
        background-color:#f5f6fa;
      }
      .height-75{
          height:75px;
      }
      .height-140{
          height:140px;
      }
      .height-170{
          height:170px;
      }
      .text-center-align{
          text-align:center;
      }
      .height-80{
        height:150px;
      }
      .width-80{
        height:80px;
      }
      .neg-margin-top{
          margin-top:-40px;
      }
      .purple-border textarea {
         border: 1px solid #ba68c8;
      }
      .purple-border .form-control:focus {
         border: 1px solid #ba68c8;
         box-shadow: 0 0 0 0.2rem rgba(186, 104, 200, .25);
      }
      .green-border-focus .form-control:focus {
         border: 1px solid #8bc34a;
         box-shadow: 0 0 0 0.2rem rgba(139, 195, 74, .25);
      }

  </style>
</head>

<body class="blue-flatui">

    <nav class="navbar navbar-expand-lg navbar-dark blue-flatui">
        <a class="navbar-brand" href="#">
            <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png"  class="img-fluid" alt="" style="width:40px; height:40px;">
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
    </nav>

    <div class="row mx-0 my-0 border-bottom border-dark height-140 light-flatui">
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <div class="text-center-align ">
                <!-- <img src="C:\xampp\htdocs\Kenyan_Careers_WebApp\kenyan_careers_webapp\Assets\Images\code1.jpg" class="img-fluid height-200"  alt=""> -->
                <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png" class="img-fluid"  alt="icon.png" style="width:40px; height:40px;">
                <h1>Welcome <?php echo($_SESSION["name_of_user"])?></h1>
                
            </div>
        </div>
    </div>

    <div class="container-fluid vh-100">

        <form action="applicationDetailsProcess.php" method="post" id="appDits" enctype="multipart/form-data">
            <div class="row rounded d-flex justify-content-center mb-4 height-75 ">
                <div class="col-sm-7 col-md-17 col-lg-7 light-flatui border border-dark rounded text-center-align neg-margin-top ">
                    <h2>Personal Details</h2>
                    <p align="left">Please enter your personal information below. 
                    This will be used to evaluate your application.</p>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4  height-170">
                <div class="col-sm-7 col-md-17 col-lg-7 light-flatui border border-dark rounded pt-4">
                    <h2>Upload Curriculum Vitae</h2>
                    <input  type="file" id="myFile" name="fileToUpload"><br>
                    <a onclick="dataLossWarning()" class="btn btn-primary mt-3" href="#" role="button">Use CV Builder</a>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4  height-170">
                <div class="col-sm-7 col-md-17 col-lg-7 light-flatui border border-dark rounded pt-4 ">
                    <h2>How did you know of this opportunity</h2>
                    <div class="md-form mb-4 pink-textarea active-pink-textarea">
                        <textarea name="knowOpportunity" form="appDits" id="form18" class="md-textarea form-control" rows="3" placeholder="Your Answer..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4  height-170">
                <div class="col-sm-7 col-md-17 col-lg-7 light-flatui border border-dark rounded pt-4">
                    <h2>What are your expectations</h2>
                    <div class="form-group shadow-textarea">
                        <textarea name="expectations" form="appDits" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Your Answer..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4  height-170">
                <div class="col-sm-7 col-md-17 col-lg-7 light-flatui border border-dark rounded pt-4">
                    <h2>What are your strengths</h2>
                    <div class="form-group shadow-textarea">
                        <textarea name="strengths" form="appDits" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Your Answer..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4  height-170">
                <div class="col-sm-7 col-md-17 col-lg-7 light-flatui border border-dark rounded pt-4">
                    <h2>What are your weaknesses</h2>
                    <div class="form-group shadow-textarea">
                        <textarea name="weaknesses" form="appDits" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Your Answer..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4 ">
                <div class="col-sm-7 col-md-17 col-lg-7 pt-4 pb-4 text-center light-flatui border border-dark rounded">
                    <input class="btn-lg btn-primary" type="submit" name="Next" value="Next">
                </div>
            </div>
        </form>

    </div>
    
  <!-- Warning of data loss when onClick CV Builder button-->
  <script>
      function dataLossWarning(){
          if(confirm("Any data you previously entered might be lost. Do you want to continue")){
              //do nothing
        }
          else{
              //add code to lead to cv builder page.
          }
      }
  </script>
    
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

</body>
</html>