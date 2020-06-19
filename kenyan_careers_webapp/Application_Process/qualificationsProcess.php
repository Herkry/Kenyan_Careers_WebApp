<?php
//Require--Check for errors
require("sqlFunctions.php");
//configuring sessions
session_start();
    
//getting POST data if modal #Add Qual# button is clicked
if(isset($_POST["Add"])){
    $university = $_POST["university"];
    $certification = $_POST["certification"];
    $noOfYrs = $_POST["noOfYrs"];

    if (count($_SESSION["qualifications"]) == 0){
        $_SESSION["qualifications"][0] = array(
                                                "university"=>$university,
                                                "certification"=>$certification,
                                                "noOfYrs"=>$noOfYrs
                                                );
    }
    else{
        $count = 0;
        for($i = 0; $i < count($_SESSION["qualifications"]); $i++){
            $count = $i;
        }
        $_SESSION["qualifications"][$count+1] = array(
                                                "university"=>$university,
                                                "certification"=>$certification,
                                                "noOfYrs"=>$noOfYrs
                                                );

    }
    header("Location: qualifications.php");
}

//getting post data once all qualifications have been added
if(isset($_POST["Next"])){

    //redirect to confirmDetails.php page where applicant will confirm their details before submitting submission
    header("Location: confirmAppDetails.php");
}

?>