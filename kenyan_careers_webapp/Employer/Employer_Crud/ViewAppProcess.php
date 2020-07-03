<?php
session_start();
include 'sqlFunctions.php';


if(isset($_POST['submit']))
{
  $jobAppId = $_POST['jobAppId'];

  $sql1 = "UPDATE jobApplications SET jobAppStatus = 'Accepted' WHERE jobAppId = '$jobAppId'";
  setData($sql1);

  header("Location: ViewApp.php");

}
if(isset($_POST['reject']))
{
  $jobAppId = $_POST['jobAppId'];
  $sql2 = "UPDATE jobApplications SET jobAppStatus = 'Rejected' WHERE jobAppId = '$jobAppId'";
  setData($sql2);

  header("Location: ViewApp.php");

} 
?>