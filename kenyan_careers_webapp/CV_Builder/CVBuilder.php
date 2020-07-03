<?php
//start session
session_start();
//Checking whether user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/13946cb9d3.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../Assets/CSS/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="../Assets/mdb/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Assets/CSS/animate.css">

  <link rel="stylesheet" href="../Assets/CSS/owl.carousel.min.css">
  <link rel="stylesheet" href="../Assets/CSS/owl.theme.default.min.css">
  <link rel="stylesheet" href="../Assets/CSS/magnific-popup.css">

  <link rel="stylesheet" href="../Assets/CSS/aos.css">

  <link rel="stylesheet" href="../Assets/CSS/ionicons.min.css">

  <link rel="stylesheet" href="../Assets/CSS/flaticon.css">
  <link rel="stylesheet" href="../Assets/CSS/icomoon.css">
  <link rel="stylesheet" href="../Assets/CSS/style.css">
  <link rel="stylesheet" href="Layout.css">
</head>

<body>

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
                  <li class="nav-item"><a href="login.php" class="nav-link" style="color: orange;">Log In</a></li>
                  <li class="nav-item"><a href="registration.php" class="nav-link" style="color: orange;">Sign In</a></li>

              </ul>
          </div>
      </div>
  </nav>

  <form class="box" action="Builder.php" method="post">
    <section>
      <h1>Personal Details</h1>
      <p>
        <h3>
          Here, you will input all your personal detais. The First Name is mandatory.
        </h3>
      </p>
      <input type="text" name="FirstName" value="" placeholder="First Name">
      <input type="text" name="Surname" value="" placeholder="Surname">
      <input type="text" name="LastName" value="" placeholder="Last Name">
      <input type="text" name="Country" value="" placeholder="Country of Birth">
      <input type="text" name="City" value="" placeholder="City You Currently Live In">
      <input type="text" name="PostalAddress" value="" placeholder="Postal Address">
      <h6 style="font-weight: bold; text-align: left">*Kindly input your primary email address</h6>
      <input type="text" name="EmailAddress" value="" placeholder="Email Address">
      <input type="text" name="PhoneNumber" value="" placeholder="Phone Number">

    </section>

    <section>
      <h1>Education Acquired</h1>
      <p>
        <h3>
          Here, you will input your Alma Mater details. For convinience purposes, kindly input the details of your most recent Alma Mater
        </h3>
      </p>
      <input type="text" name="AlmaMater" value="" placeholder="Alma Mater">
      <input type="text" name="Degree" value="" placeholder="Degree">
      <input type="text" name="EductaionCountry" value="" placeholder="Country">
      <input type="text" name="EductaionCity" value="" placeholder="City">
      <h5 style="font-weight: bold; text-align: left">Enrollment Date</h5>
      <input type="date" name="EnrollmentDate" value="" placeholder="Enrollment Date">
      <h5 style="font-weight: bold; text-align: left">Graduation Date</h5>
      <input type="date" name="GraduationDate" value="" placeholder="Graduation Date">
    </section>

    <section>
      <h1>Work Experience</h1>
      <p>
        <h3>
          Here, you will input your most recent Job Position.
        </h3>
      </p>
      <input type="text" name="PreviousEmployer" value="" placeholder="Previous Employer">
      <input type="text" name="JobTitle" value="" placeholder="Job Title">
      <input type="text" name="JobCountry" value="" placeholder="Country">
      <input type="text" name="JobCity" value="" placeholder="City">
      <input type="date" name="StartDate" value="" placeholder="Start Date">
      <input type="date" name="EndDate" value="" placeholder="End Date">
      <input type="text" name="JobDescription" value="" placeholder="Job Description">
    </section>

    <section>
      <h1>Internship Experience</h1>
      <p>
        <h3>
          Here, you will input your most recent Job Position.
        </h3>
      </p>
      <input type="text" name="PreviousInternshipEmployer" value="" placeholder="Previous Internship Employer">
      <input type="text" name="IntershipCountry" value="" placeholder="Country">
      <input type="text" name="InternshipCity" value="" placeholder="City">
      <h5 style="font-weight: bold; text-align: left">Initiial Internship Start Period</h5>
      <input type="date" name="InternshipStartDate" value="" placeholder="Start Date">
      <h5 style="font-weight: bold; text-align: left">End of Internship</h5>
      <input type="date" name="InternshipEndDate" value="" placeholder="End Date">
      <input type="text" name="InternshipDescription" value="" placeholder="Description of Work Done">
      <input type="text" name="InternshipReference" value="" placeholder="Reference">
      <input type="text" name="ReferenceEmailAddress" value="" placeholder="Reference's Email Address">
      <input type="text" name="ReferencePhoneNumber" value="" placeholder="References Phone Number">
    </section>

    <input type="submit" value="SUBMIT">

  </form>

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
