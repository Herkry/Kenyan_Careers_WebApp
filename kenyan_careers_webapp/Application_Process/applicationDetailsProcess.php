<?php
    //CODE FOR INSERTING APPLICATION DATA TO DB AND DIRECTING TO QUALIFICATIONS PAGE
    //Require--Check for errors
    require("sqlFunctions.php");

    //Getting the data/DB details
    $knowOpportunity = $_POST["knowOpportunity"];    
    $expectations = $_POST["expectations"];    
    $strengths = $_POST["strengths"];    
    $weaknesses = $_POST["weaknesses"];

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //Further DB details
    //Prev jobAppStatus
    $prevJobAppStatus = "newApplication";
    $jobAppStatus = "appDitsSubmitted";
    //Getting CV file
    $target_dir = "C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/CV_Uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;//To be used possibly in the future
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//To be used possibly in the future
    //ISRAEL DID THIS so no need to ->Get SESSION data from ISRAEL
    $jobId = 1;
    //ISRAEL DID THIS so no need to ->Get SESSION data from ISRAEL
    $appId = 1;
    
    //Inserting application details to database
    $insertAppDits = "UPDATE jobapplications SET jobAppStatus='$jobAppStatus', jobAppCV='$target_dir', jobAppExpectations='$expectations', jobAppStrengths='$strengths', jobAppWeaknesses='$weaknesses' WHERE jobAppStatus='$prevJobAppStatus'AND appId='$appId' AND jobId='$jobId'";
    setData($insertAppDits);
    header("Location: qualifications.php");

    
    

?>