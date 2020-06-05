<?php
session_start();
$error='';
if(isset($_SESSION['myid']))
{
    header('location: employer_homepage.php');
}
if (isset($_POST['submit']))
{
    if (empty($_POST['email']) || empty($_POST['password']))
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $db = mysqli_connect("localhost", "root", "", "kenyan_careers_webapp_db");

        $email = stripslashes($email);
        $password = stripslashes($password);
        $emailaddress = mysqli_real_escape_string($db,$email);
        $pass = mysqli_real_escape_string($db,$password);

        $sql ="select * from employer_details where emp_email = '$emailaddress' and emp_status  = 1";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $rows = mysqli_num_rows($result);

        if(password_verify($pass, $row['emp_password']))
        {
            $_SESSION['myid'] = $row['emp_id'];
            header('location: employer_homepage.php');
        }
         else
         {
            echo "
            <script>
                {
                  alert(\"Your email or password is invalid!\");
                  window.location='employer_loginpage.php';
                }
            </script>";

            // $error = "Username or Password is invalid";
            // print($error);
        }
        mysqli_close($db);
    }
}
?>
