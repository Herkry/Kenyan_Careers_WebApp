<?php
session_start();
session_destroy();

    echo "<script>
    alert(\"You have been logged out!\");
    window.location='employer_loginpage.php';
    </script>";

// header('location: employer_signup.php');
 ?>
