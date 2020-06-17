<?php
//Require sqlFunctions
require("sqlFunctions.php");

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

    $insertAppQuals = "INSERT INTO applicantqualifications (appQualName, appQualInstitution, appQualInstTime, jobAppId)
                      VALUES('$certification', '$university', '$noOfYrs', ) " ;
    setData($insertAppQuals);
} 
//unset session variable with qualifications
unset($_SESSION["qualifications"]); 

//redirect now to viewMyApplications.php
header("Location: viewMyApplications.php");

?>