<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: /Kenyan_Careers_WebApp/kenyan_careers_webapp/applicant_login.php");
exit;
?>