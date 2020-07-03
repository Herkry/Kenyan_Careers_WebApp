<?php
// Include config file
require_once "config.php";

 
// Define variables and initialize with empty values
$fName = $lName = $username = $appDOB	 = $appPhone = $address = $password = $confirm_password = "";
$fName_err = $lName_err = $username_err = $appDOB_err = $appPhone_err = $address_err = $password_err = $confirm_password_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	  
	  
	      if(empty(trim($_POST["fName"]))){
        $fName_err = "Please enter a first name.";
        }
		else{
			        // Prepare a select statement
        $sql = "SELECT appId FROM applicants WHERE appFname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fName);
            
            // Set parameters
            $param_fName = trim($_POST["fName"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                
                    $fName= trim($_POST["fName"]);
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
			
			
		}
		
		if(empty(trim($_POST["lName"]))){
        $lName_err = "Please enter a last name.";
        }
		else{
			
			        // Prepare a select statement
        $sql = "SELECT appId FROM applicants WHERE appLname	 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_lName);
            
            // Set parameters
            $param_lName = trim($_POST["lName"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                 
                    $lName = trim($_POST["lName"]);
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
			
		}
	
	    if(empty(trim($_POST["bday"]))){
        $appDOB_err = "Please enter a date of birth.";
        }
		else{
						        // Prepare a select statement
        $sql = "SELECT appId FROM applicants WHERE appDOB	 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_appDOB	);
            
            // Set parameters
            $param_appDOB	 = trim($_POST["bday"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                
                    $appDOB	= trim($_POST["bday"]);
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
			
        }

        if(empty(trim($_POST["appPhone"]))){
            $appPhone_err = "Please enter a Phone Number.";
            }
            else{
                                    // Prepare a select statement
            $sql = "SELECT appId FROM applicants WHERE appPhone = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_appPhone);
                
                // Set parameters
                $param_appPhone = trim($_POST["appPhone"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                    
                        $appPhone= trim($_POST["appPhone"]);
                    
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
             
            // Close statement
            mysqli_stmt_close($stmt);
                
            }
        

        if(empty(trim($_POST["address"]))){
            $address_err = "Please enter an address.";
            }
            else{
                
                        // Prepare a select statement
            $sql = "SELECT appId FROM applicants WHERE appAddress	 = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_address);
                
                // Set parameters
                $param_address = trim($_POST["address"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                     
                        $address = trim($_POST["address"]);
                    
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
             
            // Close statement
            mysqli_stmt_close($stmt);
                
            }


	
	
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT appId FROM applicants WHERE appEmail = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This email already exist.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if( empty($fName_err) && empty($lName_err) && empty($username_err) &&   empty($appDOB_err)  &&  empty($appPhone_err)  && empty($address_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO applicants (appFname, appLname	, appDOB	, appPhone, appEmail, appAddress	, appPassword	) VALUES (?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_fName, $param_lName, $param_appDOB	, $param_appPhone ,$param_username,  $param_address, $param_password);
            
            // Set parameters
			$param_fName = $fName;
			$param_lName = $lName;
            $param_username = $username;
            $param_appDOB	= $appDOB	;
            $param_appPhone= $appPhone;
            $param_address = $address;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  
  <meta charset="utf-8">
  
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <title>Sign up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  

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

  <style>
   .jumbotron {
  
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); 
    /* padding-top: 33%; 
    padding-bottom: 10%; */
    /* background-size: cover; */
    padding-top: 5%;
    padding-bottom: 1%;
   }
 
   @media screen and (max-width: 991px) {
    .jumbotron {
      padding-top: 35%;
      padding-bottom: 3%;

      }
    }
    </style>
  
</head>
<body>

<!-- <div class="jumbotron"> -->

<!-- <nav class="navbar navbar-fixed-top navbar-inverse">
<div id="constant" style="background: white; height: 40px; position: relative;"></div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/logo.jpg" alt="logo" style="width:85px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">APPLY</a></li>
        <li><a href="#">LINK A</a></li>
        <li><a href="#">LINK B</a></li>
      </ul>
    </div>
  </div>
</nav> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Kenyan Career<span>.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="jobs.php" class="nav-link">Jobs</a></li>
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


<div class="jumbotron text-center">
  <h1 style="border-radius: 25px; color: black; text-transform: uppercase;">Sign-up to apply</h1> 
</div>


<!-- Container (News Section) -->
<div id="" class="container-fluid bg-grey">
    <div class="row">
        
        <!-- <div class="col-sm-6"> -->

            <div class="wrapper" style="margin: auto; max-width:50%;">
    
                <h2>Sign Up</h2>
                <p>Please fill this form to create an account.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($fName_err)) ? 'has-error' : ''; ?>">
                        <label>First Name</label>
                        <input type="text" name="fName" class="form-control" value="<?php echo $fName; ?>">
                        <span class="help-block"><?php echo $fName_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($lName_err)) ? 'has-error' : ''; ?>">
                    <label>Last Name</label>
                    <input type="text" name="lName" class="form-control" value="<?php echo $lName; ?>">
                    <span class="help-block"><?php echo $lName_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Email</label>
                        <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    
                    <div class="form-group <?php echo (!empty($appDOB_err)) ? 'has-error' : ''; ?>">
                        <label>Date Of Birth</label>
                        <input type="date" name="bday" class="form-control" value="<?php echo $appDOB	; ?>">
                        <span class="help-block"><?php echo $appDOB_err; ?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($appPhone_err)) ? 'has-error' : ''; ?>">
                        <label>Telephone Number</label>
                    
                        <input type="tel" name="appPhone" placeholder="123-23-456" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" value="<?php echo $appPhone; ?>">
                        <span class="help-block"><?php echo $appPhone_err; ?></span>
                    </div>
                    
                    <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                        <span class="help-block"><?php echo $address_err; ?></span>
                    </div>
                            
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                    <p>Already have an account? <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php">Login here</a>.</p>
                </form>

            </div> 

        <!-- </div>       -->
    </div>
</div>


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
