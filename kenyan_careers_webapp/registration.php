<?php
include 'sqlFunctions.php';

if(isset($_POST['applicant'])){
    //Harry and Israel php functions
    //Implement the appropriate PHP code for registering a user a job seeker
    $first_name = $_POST['firstName'];
    $sql = "INSERT INTO applicant(first_name) VALUES ('$first_name')";
    $res = setData($sql);
    if ($res){
        header ("Location: index.php");
    } else {
        echo "Something went wrong";
    }
} else if (isset($_POST['employer'])){
    //Daniel and Eric php functions
    //Implement the appropriate PHP code for registering a user an employer
    $name = $_POST['name'];
    $sql = "INSERT INTO employer_details(emp_name) VALUES ('$name')";
    $res = setData($sql);
    if ($res){
        header ("Location: Employer/employer_homepage.php");
    } else {
        echo "Something went wrong";
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
    <title>Title</title>
    <style>
        .buttonContainer{
            display: flex;
        }
        .buttonContainer a{
            padding: 30px;
            font-size: 30px;
            background: black;
            color: white !important;
        }
        .buttonContainer a:hover{
            background: gray;
            cursor: pointer;
        }
        .tabPanel{
            box-shadow: 0 2px 3px 2px rgba(0,0,0,0.1);
        }#logo
{
    border-radius: 50%;
}
    </style>
</head>

<body>

    <div class="container">
        <div class="buttonContainer mt-4">
            <a class="text-center col-xl-6 " onclick="showPanel(0)">Job Seeker</a>
            <a class="text-center col-xl-6 " onclick="showPanel(1)">Employer</a>
        </div>
        <div class="tabPanel p-3">
            <!--Harry and Israel to put your code
                Implement the appropriate HTML code for the registration layout for a job seeker-->
            <div>
                <h1 align="center">Job Seeker Sign Up</h1>
            </div>
            <form class="col-12" action="registration.php" method="post">
                <div style="display: flex;">
                    <div class="form-group col-6">
                        <label for="name">First Name</label><br>
                        <input type="text" name="firstName" class="form-control" placeholder="First name...">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Last Name</label><br>
                        <input type="text" name="firstName" class="form-control" placeholder="Last name...">
                    </div>

                </div>
                <div class="form-group ">
                    <label for="name">Date of Birth</label><br>
                    <input type="date" name="firstName" class="form-control" placeholder="Date of Birth...">
                </div>
                <div class="form-group ">
                    <label for="name">Email</label><br>
                    <input type="email" name="firstName" class="form-control" placeholder="Email...">
                </div>
                <div class="form-group ">
                    <label for="name">Phone</label><br>
                    <input type="number" name="firstName" class="form-control" placeholder="Phone number...">
                </div>
                <div class="form-group ">
                    <label for="name">Address</label><br>
                    <input type="text" name="firstName" class="form-control" placeholder="Address...">
                </div>
                <div style="display: flex;">
                    <div class="form-group col-6">
                        <label for="name">Password</label><br>
                        <input type="password" name="firstName" class="form-control" placeholder="Password...">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Confirm Password</label><br>
                        <input type="password" name="firstName" class="form-control" placeholder="Confirm password...">
                    </div>
                </div>
                <div style="display: flex;">
                    <div class="form-group col-sm-6 col-md-6">
                        <input type="submit" name="applicant" value="Sign Up" class="btn btn-primary">
                    </div>
                    <div class="form-group col-sm-6 col-md-6">
                        <a href="login.php" class="btn btn-primary">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="tabPanel p-3">
            <div>
                <h1 align="center">Employer Sign Up</h1>
            </div>
            <form class="col-12" action="registration.php" method="post">
                <!--Daniel and Eric to put your code
                Implement the appropriate HTML code for the registration layout for an employer-->
            <div class="form-group ">
                <div class="form-group ">
                    <a href="#change"><img id="logo" width = "200px"  src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/employee_careers.png" alt="yourlogo" /></a><br>
                    <input type="file" type=".jpg" name="logo">
                </div>
                <div class="form-group ">
                    <label for="name">Category</label><br>
                    <input type="text" name="firstName" class="form-control" placeholder="Category...">
                </div>
                    <label for="name">Name</label><br>
                    <input type="text" name="name" class="form-control" placeholder="Company name...">
                </div>
                <div>
                    <h6>Contacts</h6>
                </div><hr>
                <div style="display: flex;">
                    <div class="form-group col-6">
                        <label for="name">Email</label><br>
                        <input type="email" name="email" class="form-control" placeholder="Email...">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Phone Number</label><br>
                        <input type="number" name="phone" class="form-control" placeholder="Phone number...">
                    </div>

                </div>
                <div class="form-group ">
                    <label for="name">Location</label><br>
                    <input type="text" name="location" class="form-control" placeholder="Location...">
                </div>
                <div class="form-group ">
                    <label for="name">Address</label><br>
                    <input type="text" name="address" class="form-control" placeholder="Address...">
                </div>
                <div class="form-group ">
                    <label for="name">Url</label><br>
                    <input type="text" name="url" class="form-control" placeholder="Company website link...">
                </div>
                <div style="display: flex;">
                    <div class="form-group col-6">
                        <label for="name">Password</label><br>
                        <input type="password" name="firstName" class="form-control" placeholder="Password...">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Confirm Password</label><br>
                        <input type="password" name="firstName" class="form-control" placeholder="Confirm password...">
                    </div>
                </div>
                <div style="display: flex;">
                    <div class="form-group col-sm-6 col-md-6">
                        <input type="submit" name="employer" value="Sign Up" class="btn btn-primary">
                    </div>
                    <div class="form-group col-sm-6 col-md-6">
                        <a href="login.php" class="btn btn-primary">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        //This code implements the tabbed layout of the above page
        var tabButtons = document.querySelectorAll(".container .buttonContainer a");
        var tabPanels = document.querySelectorAll(".container .tabPanel");

        function showPanel(panelIndex) {
            tabButtons.forEach(function(node) {
                node.style.backgroundColor = "";
                node.style.color = "";
            });
            tabPanels.forEach(function(node) {
                node.style.display = "none";
            });
            tabPanels[panelIndex].style.display = "block";
        }
        showPanel(0);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>