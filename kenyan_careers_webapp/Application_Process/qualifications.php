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

  </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark blue-flatui">
        <a class="navbar-brand" href="#">
            <img src="C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png"  alt="">
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

    <div class="row mx-0 my-0 yellow height-140 yellow">
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <div class="text-center-align ">
                <!-- <img src="C:\xampp\htdocs\Kenyan_Careers_WebApp\kenyan_careers_webapp\Assets\Images\code1.jpg" class="img-fluid height-200"  alt=""> -->
                <img src="C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/football.png" class="img-fluid height-80 width-80 "  alt="icon.png">
                <h1>Welcome Harry</h1>
                
            </div>
        </div>
    </div>

    <div class="container-fluid green">

        <form action="" method="post">
            <div class="row rounded d-flex justify-content-center mb-4 orange height-75 ">
                <div class="col-sm-7 col-md-17 col-lg-7 rounded blue text-center-align neg-margin-top">
                    <h2>Qualifications</h2>
                    <p align="left">You will be required to enter details of any formal certifcaitons you might have undertaken. This information will be used to evaluate your application.</p>
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4 orange height-120">
                <div class="col-sm-7 col-md-17 col-lg-7 text-center pt-4 blue ">
                    <h3>You currently have not added any qualifications</h3>
                </div>
            </div>

            <div class="row rounded d-flex justify-content-center mb-4 orange height-120">
                <div class="col-sm-7 col-md-17 col-lg-7 text-center pt-4 blue">
                    <i class="fas fa-plus"></i>
                    <input class="btn-lg btn-primary" type="submit" value="Add Qualification">
                </div>
            </div>
            <div class="row rounded d-flex justify-content-center mb-4 orange height-200">
                <div class="card-deck">
                  <div class="card width-18rem">
                    <div class="card-header">
                        Qualification
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">University of Nairobi</li>
                        <li class="list-group-item">Bsc in Computer Science</li>
                        <li class="list-group-item">4 years</li>
                    </ul>
                  </div>
                  <div class="card width-18rem">
                    <div class="card-header">
                        Qualification
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">University of Nairobi</li>
                        <li class="list-group-item">Bsc in Computer Science</li>
                        <li class="list-group-item">4 years</li>
                    </ul>
                  </div>
                  <div class="card width-18rem">
                    <div class="card-header">
                        Qualification
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">University of Nairobi</li>
                        <li class="list-group-item">Bsc in Computer Science</li>
                        <li class="list-group-item">4 years</li>
                    </ul>
                  </div>
                </div>
            </div>
        </form>
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