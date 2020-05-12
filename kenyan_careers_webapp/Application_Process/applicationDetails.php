<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
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
      .height-140{
          height:140px;
      }
      .height-150{
          height:150px;
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
          margin-top:-10px;
      }
    
  </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#">
            <img src="C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png" width="30" height="30" class="d-inline-block align-top" alt="">
                   YCS Bush
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

    <div class="row mx-0 my-0 yellow height-140">
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <div class="text-center-align">
                <!-- <img src="C:\xampp\htdocs\Kenyan_Careers_WebApp\kenyan_careers_webapp\Assets\Images\code1.jpg" class="img-fluid height-200"  alt=""> -->
                <img src="C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png" class="img-fluid height-80 width-80 "  alt="icon.png">
                <h1>Welcome Harry</h1>
                
            </div>
        </div>
    </div>

    <div class="container-fluid green">

        <form action="" method="post">
            <div class="row rounded d-flex justify-content-center mb-4 orange height-150 ">
                <div class="col-sm-7 col-md-17 col-lg-7 rounded blue text-center-align neg-margin-top">
                    <h2>Personal Details</h2>
                    <p align="left">Please enter your personal information below. 
                    This will be used to evaluate your application.</p>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4 orange height-150">
                <div class="col-sm-7 col-md-17 col-lg-7 blue pt-4">
                    <h2>How did you know of this opportunity</h2><br>
                    <input type="text" name="know" id="know">
                </div>
            </div>
        </form>
    </div>    

</body>
</html>