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
                header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/Application_Process/page-1.php");
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <title>Sign up</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/Israel_custom.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   .jumbotron {
  
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); 
    /* padding-top: 33%; 
    padding-bottom: 10%; */
    /* background-size: cover; */
    padding-top: 10%;
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

<nav class="navbar navbar-fixed-top navbar-inverse">
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

<!-- Footer -->
<footer class="pt-5 pb-4" id="contact">

</footer>
		<!-- Copyright -->
<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2020 HCI. All Rights Reserved. Developed By <a href="#" title="Contact Developer" style="color:white;">Young Israel Izere</a>
						</div>
					</div>
				</div>
			</div>
</section>
<!-- font awesome footer -->

</body>
</html>
