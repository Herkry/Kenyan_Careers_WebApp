<?php
//Require--Check for errors
require("sqlFunctions.php");
//start session
session_start();
//Checking whether user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
    exit;
  }

//Selecting details of applicant from database

//1. Selecting profile details
//Get SESSION data from ISRAEL
$appId = 1;

//Query
$selectApplicantDetails = "SELECT * FROM applicants WHERE appId = '$appId'";
$rowApplicantDetails = getData($selectApplicantDetails);

//2. Selecting jobApplicationDetails
//Get session jobAppId
$applicantJobAppId = $_SESSION["applicantJobAppId"];


//Queries
$selectApplicantJobAppDetails = "SELECT * FROM jobapplications WHERE jobAppId = '$applicantJobAppId'";
$rowApplicantJobAppDetails = getData($selectApplicantJobAppDetails);

// Not needed here
// $selectApplicantJobAppQualifications = "SELECT * FROM applicantqualifications WHERE jobAppId = '$applicantJobAppId'";
// $rowApplicantJobAppQualifications = getData($selectApplicantJobAppQualifications);

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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/Assets/mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/Assets/mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->

  <title>Confirm Application Details</title>
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
      .height-75{
          height:75px;
      }
      .height-140{
          height:140px;
      }
      .height-120{
          height:120px;
      }
      .height-150{
          height:150px;
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
      .margin-left{
        margin-left:100px;    
      }
      .margin-right{
        margin-right:100px;
      }
      .padding-left{
        padding-left:300px;    
      }
      .padding-right{
        padding-right:300px;
      }
      .vertical-center-text{
          vertical-align: middle;
      }
      .pd-top-confirmButton{
        padding-top:20px
      }

  </style>
</head>

<body>

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
                <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png"  class="img-fluid " alt="" style="width:40px; height:40px;">
                <h1>Welcome <?php echo($_SESSION["name_of_user"])?></h1>
            </div>
        </div>
    </div>

    <div class="container-fluid blue-flatui padding-left padding-right pt-3">
        <div class="container-fluid border border-dark light-flatui px-5 pt-3 mb-3">
            <h2>Profile</h2><br>
            <div class="row rounded mb-3 -center orange height-80 ">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-80">
                    <h5>Name</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-80 ">
                    <p><?php echo($rowApplicantDetails[0]["appFname"]." ".$rowApplicantDetails[0]["appLname"]);?></p>
                </div>
            </div>
            <div class="row rounded mb-3 orange height-80">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-80">
                    <h5>Email Address</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-80 ">
                    <p><?php echo($rowApplicantDetails[0]["appEmail"]);?></p>
                </div>
            </div>
            <div class="row rounded mb-3 orange height-80">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-80">
                    <h5>Phone Contacts</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-80 ">
                    <p><?php echo($rowApplicantDetails[0]["appPhone"]);?></p>
                </div>
            </div>
            <div class="row rounded mb-3 orange height-80">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-80">
                    <h5>Date of Birth</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-80 ">
                    <p><?php echo($rowApplicantDetails[0]["appDOB"]);?></p>
                </div>
            </div>
            <div class="row rounded mb-3 orange height-80">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-80">
                    <h5>Location Address</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-80 ">
                    <p><?php echo($rowApplicantDetails[0]["appAddress"]);?></p>
                </div>
            </div><br>
        </div>
        <div class="container-fluid border border-dark light-flatui px-5 pt-3 ">
            <h2>Application Details</h2><br>
            <div class="row rounded mb-3 orange height-150 ">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-150">
                    <h5>Expectations</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-150 ">
                    <p><?php echo ($rowApplicantJobAppDetails[0]["jobAppExpectations"]); ?></p>
                </div>
            </div>
            <div class="row rounded mb-3 orange height-150 ">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-150">
                    <h5>Strengths</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-150 ">
                    <p><?php echo ($rowApplicantJobAppDetails[0]["jobAppStrengths"]); ?></p>
                </div>
            </div>
            <div class="row rounded mb-3 orange height-150 ">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded d-flex align-items-center border-top border-left border-bottom  border-dark light-flatui height-150">
                    <h5>Weaknesses</h5>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 rounded d-flex align-items-center border-top border-left border-right border-bottom border-dark light-flatui height-150 ">
                    <p><?php echo ($rowApplicantJobAppDetails[0]["jobAppWeaknesses"]); ?></p>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-3 border border-dark light-flatui height-200">
                    <h3>Qualifications</h3>
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

            <div class="row rounded mb-3 d-flex justify-content-center light-flatui height-80">
                <div class="col-sm-7 col-md-7 col-lg-7  rounded text-center pd-top-confirmButton light-flatui">
                    <form action="confirmAppDetailsProcess.php" method="post">
                        <input class="btn-lg btn-primary" type="submit" name="Confirm" value="Confirm">
                    </form>
                </div>
            </div><br>            
            
        </div>
        
        

    </div>  
    
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



