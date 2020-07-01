<?php

// session_start();
 

// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//   header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
//   exit;
// }

?>

    <?php
include_once "sqlFunctions.php";

function display(){

    if (isset($_POST['job-search'])){
        $search = $_POST['job-search-value'];
        $query = "SELECT * FROM jobs WHERE jobName LIKE '%$search%' OR jobCategory LIKE '%$search%' ";
        return getData($query);
    } elseif (isset($_POST['category'])){
        //Filter the data to get the category selected by the user
        echo "<h4 class='col-12'>Category: ".$_POST['submit']."</h4>";
        $category = $_POST['submit'];
        $query = "SELECT * FROM jobs WHERE jobCategory LIKE '%$category%'";
        return getData($query);
    } elseif (isset($_POST['location'])){
        //Filter the data to get the location selected by the user
        echo "<h4 class='col-12'>Location: ".$_POST['submit']."</h4>";
        $location = $_POST['submit'];
        $query = "SELECT * FROM jobs WHERE jobLocation LIKE '%$location%'";
        return getData($query);
    } else {
        $query = "SELECT * FROM jobs";
        return getData($query);
    }
}
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Kenyan Career</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
            <script src="https://kit.fontawesome.com/13946cb9d3.js" crossorigin="anonymous"></script>

            <link rel="stylesheet" href="Assets/CSS/open-iconic-bootstrap.min.css">
            <link rel="stylesheet" href="Assets/mdb/css/bootstrap.min.css">
            <link rel="stylesheet" href="Assets/CSS/animate.css">

            <link rel="stylesheet" href="Assets/CSS/owl.carousel.min.css">
            <link rel="stylesheet" href="Assets/CSS/owl.theme.default.min.css">
            <link rel="stylesheet" href="Assets/CSS/magnific-popup.css">

            <link rel="stylesheet" href="Assets/CSS/aos.css">

            <link rel="stylesheet" href="Assets/CSS/ionicons.min.css">

            <link rel="stylesheet" href="Assets/CSS/flaticon.css">
            <link rel="stylesheet" href="Assets/CSS/icomoon.css">
            <link rel="stylesheet" href="Assets/CSS/style.css">
        </head>

        <body>
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
            <!-- END nav -->

            <!--sliding gallery -->
            <section>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Assets/Images/plan.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Assets/Images/plan.jpg" alt="Second slide">
                        </div>
                    </div>
                </div>
            </section>
            <!--End sliding gallery -->


            <!--Employer or Seeker-->
            <section style="padding: 20px;" class="col-12">
                <h2 style="text-align: center;">Are you an Employer or a Seeker?</h2>
                <div class="container" style="border: 0.5px solid black;">
                    <div class="row">

                        <div class="card col-xl-6 col-md-6 col-sm-12 border-0">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <div class="profile mb-4 mt-3" style="text-align: center;">
                                        <img src="Assets/Images/callcon.png" style="width: 50px; height: 50px">
                                        <p> Find out how we help you <br> get you the best candidates </p>
                                        <br>
                                        <a href="#"><button class="btn btn-primary"type="button" name="button">Get Started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card col-xl-6 col-md-6 col-sm-12 border-0">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <div class="profile mb-4 mt-3" style="text-align: center;">
                                        <img src="Assets/Images/conn.png" style="width: 50px; height: 50px">
                                        <p> Sign Up as a job seeker, it's<br> quick and easy!</p>
                                        <br>
                                        <p>Build your CV and improve your <br>visibility to employers </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--dropdown buttons-->

            <!--Job Availbale -->
            <section style=" background: #000000FF; opacity: 0.9; padding: 10px 0px 30px 0px; ">
                <h3 style="text-align: center; color: white;">Top Jobs</h3>
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: -webkit-fill-available;">All Industries</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                        <input type="hidden" name="category" value="submit">
                                        <?php
                                //List the categories saved in the database
                                    $sql = "SELECT jobCategory FROM jobs GROUP BY jobCategory ASC";
                                    $category = getData($sql);
                                    if (count($category)>0):
                                        for ($i = 0; $i < count($category); $i++):
                                ?>
                                            <input class="dropdown-item" type="submit" name="submit" value="<?php echo $category[$i]['jobCategory'];?>">
                                            <?php
                                        endfor;
                                    endif;        
                                ?>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: -webkit-fill-available;">Location</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                        <input type="hidden" name="location" value="submit">
                                        <?php
                                //List the locations saved in the database
		                            $sql = "SELECT jobLocation FROM jobs GROUP BY jobLocation ASC";
                                    $location = getData($sql);
                                    if (count($location)>0):
                                        for ($i = 0; $i < count($location); $i++):
                                ?>
                                            <input class="dropdown-item" type="submit" name="submit" value="<?php echo $location[$i]['jobLocation'];?>">
                                            <?php
                                        endfor;
                                    endif;        
                                ?>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="job-search-value" placeholder="Search this blog">
                                    <div class="input-group-append">
                                        <button class="btn btn-light" name="job-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <?php
                //Display all the jobs listed in the database
                    $job=display();
                    if (count($job) > 0):
                        for ($i = 0; $i < count($job); $i++):
                ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $job[$i]['jobName']; ?>
                                        </h5>
                                        <p class="card-text">Category:
                                            <?php echo $job[$i]['jobCategory']; ?>
                                        </p>
                                        <p class="card-text">Location:
                                            <?php echo $job[$i]['jobLocation']; ?>
                                        </p>
                                        <p class="card-text">Closing date:
                                            <?php echo $job[$i]['jobClosingDate']; ?>
                                        </p>
                                        <form action="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Application_Process/page-1.php" method="post">
                                            <!--<a href="#" class="btn btn-primary">Read More</a>-->
                                            <input type="submit" class="btn btn-primary" value="Read More">
                                            <?php echo "<input type = 'hidden' name = 'jobId' value = '".$job[$i]['jobId']."'/>"?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endfor;
                    else:
                ?>
                                <h3 style="text-align: center; color: white; width: 100%;">No Jobs Available</h3>
                                <?php
                    endif;
                ?>
                                    <a href="#" class="btn btn-primary" style="margin-left: 70vw;">View More Jobs</a>
                    </div>
                </div>
            </section>
            <!--End of Jobs Available-->


            <!--Why choose kenyan career-->
            <section>
                <div class="container-fluid mx-auto mt-5 mb-5 col-12" style="text-align: center">
                    <div class="hd">
                        <h3>Stand Out</h3>
                    </div>
                    <p><small>How Kenyan Career Helps You.</small>
                    </p>
                    <div class="row" style="justify-content: center">

                        <div class="card col-md-3 col-12">
                            <div class="card-content">
                                <div class="card-body"> <img class="img" src="https://i.imgur.com/S7FJza5.png" />
                                    <div class="shadow"></div>
                                    <div class="card-title"> We're Free </div>
                                    <div class="card-subtitle">
                                        <p> <small class="text-muted">We provide a platform where any person can get a job in any company by clicking a button</small> </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-3 col-12 ml-2">
                            <div class="card-content">
                                <div class="card-body"> <img class="img" src="https://i.imgur.com/xUWJuHB.png" />
                                    <div class="card-title"> We're Unbiased </div>
                                    <div class="card-subtitle">
                                        <p> <small class="text-muted"> We give everyone an opportunity according to the skill set they offer</small> </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-3 col-12 ml-2">
                            <div class="card-content">
                                <div class="card-body"> <img class="img rck" src="https://i.imgur.com/rG3CGn3.png" />
                                    <div class="card-title"> We Guide you </div>
                                    <div class="card-subtitle">
                                        <p> <small class="text-muted">We help you land your job by getting you a job that suits you and your skill set </small> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End of Kenyan Career-->


            <!--customer Testimonials-->
            <section style="padding: 20px 0px 60px 0px; background: black; opacity: 0.9;">
                <h3 style="color: white; text-align: center; padding-top: 20px;">Customer Testimonials</h3>
                <div class="container mx-auto mt-5 col-md-10 col-11">
                    <div class="row" style="justify-content: center">
                        <div class="card col-md-3 col-11">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                    <div class="card-subtitle">
                                        <p> <small class="text-muted"> <i class="fas fa-quote-left"></i> I applied for a job with kenyan Career and i got it and its the best job ever.<i class="fas fa-quote-left fa-flip-horizontal"></i> </small> </p>
                                    </div>
                                    <div class="card-body company"> <i class="fab fa-ebay fa-2x"></i> <small class="intro text-muted">Sam Diego, Marketer</small> </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-3 col-11 second">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583319/AAA/3.jpg"> </div>
                                    <div class="card-subtitle">
                                        <p> <small class="text-muted"> <i class="fas fa-quote-left "></i> I was able to build my cv with kenyan Career and it helped me land a Job. <i class="fas fa-quote-left fa-flip-horizontal"></i> </small> </p>
                                    </div>
                                    <div class="card-body company"> <i class="fab fa-amazon fa-2x"></i><small class="intro text-muted">Monty Jones, Software Developer</small> </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-3 col-11 third">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg"> </div>
                                    <div class="card-subtitle">
                                        <p> <small class="text-muted"> <i class="fas fa-quote-left"></i> I love kenyan career as they gave me the opportunity to get a job. <i class="fas fa-quote-left fa-flip-horizontal"></i> </small> </p>
                                    </div>
                                    <div class="card-body company"> <i class="fab fa-yelp fa-2x"></i><small class="intro text-muted">John Tim, Tech Support</small> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End of customer Testimonials -->


            <!--Footer-->
            <section class="ftco-subscribe ftco-section bg-light">
                <div class="overlay">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-wrap text-center heading-section ftco-animate">
                                <h2 class="mb-4"><span>Subcribe to our Newsletter</span></h2>
                                <p>Be the first to know when new job opportunities are available.</p>
                                <div class="row d-flex justify-content-center mt-4 mb-4">
                                    <div class="col-md-8">
                                        <form action="#" class="subscribe-form">
                                            <div class="form-group d-flex">
                                                <input type="text" class="form-control" placeholder="Enter email address">
                                                <input type="submit" value="Subscribe" class="submit px-3">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


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