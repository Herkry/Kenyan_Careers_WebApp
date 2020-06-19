<?php
include 'sqlFunctions.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];

    //The SQL below is for checking if there is such a user in the 'applicant' table
    $sql1 = "SELECT * FROM applicant WHERE email LIKE $email";

    //The SQL below is for checking if there is such an employer in the 'employer_details' table
    $sql2 = "SELECT * FROM employerDetails WHERE email LIKE $email";

    $result1 = signin($sql1);
    $result2 = signIn($sql2);

    if(count($result1)>0){
        //Implement the appropriate PHP code for signing in a job seeker
        //Pass the user data to the homepage
        header("Location: index.php");
    } else if (count($result2)>0){
        //Implement the appropriate PHP code for signing in an employer
        //Pass the user data to the employer homepage
        header("Location: Employer/employer_homepage.php");
    } else {
        echo "Credentials do not match!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Sign In</h1>
            </div>
            <form class="col-12" action="login.php" method="post">
                <div class="form-group">
                    <label for="name">Email</label><br>
                    <input type="text" name="email" class="form-control" placeholder="Enter email...">
                </div>
                <div class="form-group">
                    <label for="name">Password</label><br>
                    <input type="password" name="password" class="form-control" placeholder="Enter password...">
                </div>
                <div style="display: flex;">
                    <div class="form-group col-sm-6 col-md-6">
                        <input type="submit" name="login" value="Sign In" class="btn btn-primary">
                    </div>
                    <div class="form-group col-sm-6 col-md-6">
                        <a href="registration.php" value="Sign Up" class="btn btn-primary">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>