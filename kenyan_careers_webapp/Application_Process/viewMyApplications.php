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

    <nav class="navbar navbar-expand-lg navbar-dark blue-flatui">
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

        <div class="row rounded d-flex justify-content-center mb-4 height-75 ">
            <div class="col-sm-7 col-md-7 col-lg-7 light-flatui border border-dark rounded text-center-align neg-margin-top ">
                <h2>My Applications</h2>
                <p align="center">Your current and previous applications.</p>
            </div>
        </div>
        <?php 
            for ($i=0; $i < count($rowApplicantJobAppDetails); $i++) { 
        ?>

              <div class="row rounded d-flex justify-content-center mb-4  height-applicationDiv blue">
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