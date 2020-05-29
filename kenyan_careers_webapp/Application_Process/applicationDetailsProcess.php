<?php
    //CODE FOR INSERTING APPLICATION DATA TO DB AND DIRECTING TO QUALIFICATIONS PAGE
    //Require--Check for errors
    require("sqlFunctions.php");

    //Getting the data/DB details
    $knowOpportunity = $_POST["knowOpportunity"];    
    $expectations = $_POST["expectations"];    
    $strengths = $_POST["strengths"];    
    $weaknesses = $_POST["weaknesses"];

    //TEST
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //Further DB details
    $jobAppStatus = "appDitsSubmitted1";
    //Getting CV file
    $target_dir = "C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/CV_Uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;//To be used possibly in the future
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//To be used possibly in the future

    //Moving file
    

    //Get SESSION data from ISRAEL
    $jobId = 1;
    //Get SESSION data from ISRAEL
    $appId = 1;
    
    //Inserting application details to database
    $insertAppDits = "INSERT INTO jobapplications (jobAppStatus, jobAppCV, appId, jobId, jobAppExpectations, jobAppStrengths, jobAppWeaknesses)
                      VALUES('$jobAppStatus','$target_dir','$appId', '$jobId', '$expectations', '$strengths', '$weaknesses') " ;


    //Create Session for qualifications
    session_start();
    $_SESSION["qualifications"] = array();

    setData($insertAppDits);
    header("Location: qualifications.php");

    
?>