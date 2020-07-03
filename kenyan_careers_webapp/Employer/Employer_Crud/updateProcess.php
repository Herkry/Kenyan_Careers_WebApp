<?php
require 'database.php';
session_start();

// keep track post values
        
$Jobname = $_POST['Jobname'];
$JobDescription = $_POST['JobDescription'];
$Salary = $_POST['Salary'];
$Requirement = $_POST['Requirement'];
 $jobLocation = $_POST['jobLocation'];
  $jobCategory = $_POST['jobCategory'];
   $jobClosingDate = $_POST['jobClosingDate'];
   $jobId = $_POST['jobId'];

   echo("<pre>");
   print_r($_POST);
   echo("</pre>");

   $empId = $_SESSION['myid'];
             $pdo = Database::connect();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
             $sql = "UPDATE jobs SET jobName=?, jodDescr=?, jobSalary=? , Requirements=?, jobLocation=?, jobCategory=?, jobClosingDate=? WHERE jobId=?";	
             $q = $pdo->prepare($sql);
             $q->execute(array($Jobname, $JobDescription, $Salary, $Requirement, $jobLocation, $jobCategory, $jobClosingDate, $jobId));
             Database::disconnect();
             header("Location: index.php");

?>