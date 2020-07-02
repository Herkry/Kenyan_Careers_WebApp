<?php
    //CODE FOR INSERTING APPLICATION DATA TO DB AND DIRECTING TO QUALIFICATIONS PAGE
    //Require--Check for errors
    require("sqlFunctions.php");
    session_start();

    if(isset($_POST["Next"])){
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
        $jobAppStatus = "appDitsSubmitted";
        //Getting CV file
        $target_dir = "C:/xampp/htdocs/Kenyan_Careers_WebApp/kenyan_careers_webapp/CV_Uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;//To be used possibly in the future
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//To be used possibly in the future

    
        //Get SESSION data from ISRAEL(HE'LL GET THIS FROM NEWTON'S GROUP)
        $jobId = 1;
        //When Israel solves error, will uncomment code below
        $jobId = $_SESSION["jobId"];

        //Get SESSION data from ISRAEL
        $appId = 1;
        $appId = $_SESSION["id"];
    
        //Inserting application details to database
        $insertAppDits = "INSERT INTO jobapplications (jobAppStatus, jobAppCV, appId, jobId, jobAppExpectations, jobAppStrengths, jobAppWeaknesses)
                          VALUES('$jobAppStatus','$target_dir','$appId', '$jobId', '$expectations', '$strengths', '$weaknesses') " ;
        setData($insertAppDits);
        //Get jobapplications id from DB for future use
        $selectApplicantJobAppId = "SELECT jobAppId FROM jobapplications WHERE appId = '$appId' AND jobId = '$jobId' AND jobAppStatus = '$jobAppStatus'";
        $rowApplicantJobAppId = getData($selectApplicantJobAppId);
        
        //Test
        echo(count($rowApplicantJobAppId));
        print_r($rowApplicantJobAppId);


        //(1)test and see whether there are multiple applications for a single job
        $selectApplicantJobAppIdErrorTest = "SELECT jobAppId FROM jobapplications WHERE appId = '$appId' AND jobId = '$jobId'";
        $rowApplicantJobAppIdErrorTest = getData($selectApplicantJobAppIdErrorTest);
        if(count($rowApplicantJobAppIdErrorTest) > 1){
             //delete latest inserted data
             $deleteDuplicateAppDits = "DELETE FROM jobapplications WHERE appId = '$appId' AND jobId = '$jobId' ORDER BY jobAppId DESC LIMIT 1" ;
             setData($deleteDuplicateAppDits);

             //change window location using javascript(in script tag below)
?>
             <script>
                alert("You have already applied for this job");
                location.replace("http://localhost/Kenyan_Careers_WebApp/kenyan_careers_webapp/index.php");
             </script>
<?php
        }
        else{
            //Moving file
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //Do some action to notify users of successful upload 
  
            } 
            else {
            //Do some action to notify users of upload failure
  
            }
            //(2)store jobapplication id in a session for future use
            $applicantJobAppId = 0;
            for($i = 0; $i < count($rowApplicantJobAppId); $i++){
                $applicantJobAppId = $rowApplicantJobAppId[$i]["jobAppId"];
            } 

            //Create session for applicantJobAppId
            $_SESSION["applicantJobAppId"] = $applicantJobAppId;
            
            //TEST
            echo("<br>");
            echo($_SESSION["id"]);
            echo("<br>");
            echo($_SESSION["jobId"]);
            echo("<br>");
            echo($_SESSION["applicantJobAppId"]);
            
            //Create Session for qualifications
            $_SESSION["qualifications"] = array();
            header("Location: qualifications.php");
        }

    }
    
?>