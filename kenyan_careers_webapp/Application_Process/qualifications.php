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

<body class="blue-flatui">

    <nav class="navbar navbar-expand-lg navbar-dark blue-flatui">
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
    

    <div class="row mx-0 my-0 border-bottom border-dark height-140 light-flatui">
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <div class="text-center-align ">
                <!-- <img src="C:\xampp\htdocs\Kenyan_Careers_WebApp\kenyan_careers_webapp\Assets\Images\code1.jpg" class="img-fluid height-200"  alt=""> -->
                <img src="http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png"  class="img-fluid" alt="" style="width:40px; height:40px;">                
                <h1>Welcome <?php echo($_SESSION["name_of_user"])?></h1>
            </div>
        </div>
    </div>

    <div class="container-fluid blui-flatui">
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
                <div class="row rounded d-flex justify-content-center mb-4 blue-flatui height-120">
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
                         
            <div class="row rounded d-flex justify-content-center mb-4 blue-flatui height-120">
                <div class="col-sm-7 col-md-7 col-lg-7 pd-top-addQualButton border border-dark text-center light-flatui">
                    <button type="button" class="btn-lg btn-primary" data-toggle="modal" data-target="#qual">Add Qualification</button>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4 blue-flatui height-120">
                <div class="col-sm-7 col-md-7 col-lg-7 border border-dark text-center pd-top-addQualButton light-flatui">
                    <form action="qualificationsProcess.php" method="post">
                        <input class="btn-lg btn-primary" type="submit" name="Next" value="Next">
                    </form>
                </div>
            </div>
    </div> 
    
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

</body>
</html>