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

        <!--start nav-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">Kenyan Career<span>.</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="#" class="nav-link">Jobs</a></li>
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

        <!--jobs display-->
        <section>
            <div class="container bg-dark p-2">
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
                                    </a>
                                    <h5 class="card-title">Title:
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
                                    <p class="card-text">Salary: Ksh.
                                        <?php echo $job[$i]['jobSalary']; ?>
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
                            <?php
            endif;
        ?>
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