<?php
//Require sqlFunctions
require("sqlFunctions.php");
session_start();
//Update jobAppDetails table to change status of application
//Stuff to update with
$jobAppStatusPrev = "appDitsSubmitted";
$jobAppStatusNew = "appDitsConfirmed";
//Query
$updateApplicantJobAppDetails = "UPDATE jobapplications SET jobAppStatus='$jobAppStatusNew' WHERE jobAppStatus='$jobAppStatusPrev'";
setData($updateApplicantJobAppDetails);

for($i = 0; $i < count($_SESSION["qualifications"]); $i++){
    //Inserting qualifications details to database
    $university = $_SESSION["qualifications"][$i]["university"];
    $certification = $_SESSION["qualifications"][$i]["certification"];
    $noOfYrs = $_SESSION["qualifications"][$i]["noOfYrs"];
    $applicantJobAppId = $_SESSION["applicantJobAppId"];
    
    // Test
    // echo($university);echo($certification);echo($noOfYrs);echo($applicantJobAppId);
    // echo("<pre>");
    // print_r($_SESSION["qualifications"][$i]);
    // echo("</pre><br>");

    $insertAppQuals = "INSERT INTO applicantqualifications (appQualName, appQualInstitution, appQualInstTime, jobAppId)
                      VALUES('$certification', '$university', '$noOfYrs', '$applicantJobAppId') " ;
    setData($insertAppQuals);
} 
//unset session variable with qualifications
unset($_SESSION["qualifications"]); 

//redirect now to viewMyApplications.php
header("Location: viewMyApplications.php");

?>