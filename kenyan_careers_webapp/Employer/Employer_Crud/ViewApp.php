<?php
 session_start();
 include 'header.php';
 include 'sqlFunctions.php';
 
 if(!isset($_SESSION['myid']))
 {
     header('location:/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_loginpage.php');
 }

 //select from db where job ids are equal to our job ids
 //get session id
 $empId = $_SESSION['myid'];

 $selectEmployerJobIds = "SELECT jobId FROM jobs WHERE empId = '$empId'";
 $rowSelectEmployerJobIds = getData($selectEmployerJobIds);

 //then select all the data from the jobApplications table where the data is related to our job ids
 //declare array to hold the required data
 $specificEmployerJobApplicationData = array();
 $count = 0;

 for ($i=0; $i < count($rowSelectEmployerJobIds); $i++) {
    $applicantJobId = $rowSelectEmployerJobIds[$i]['jobId']; 

    //select details of applicants whi have aplied to our jobs
    $selectApplicantsJobAppDetails = "SELECT * FROM jobapplications WHERE jobId = '$applicantJobId'";
    $rowSelectApplicantsJobAppDetails = getData($selectApplicantsJobAppDetails);

    for ($j=0; $j < count($rowSelectApplicantsJobAppDetails); $j++) { 
        $specificEmployerJobApplicationData[$count] = $rowSelectApplicantsJobAppDetails[$j];
        $count++;
    }

 }


?>  
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
    <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_vacancy_home.php"><button type="submit">My Dashboard</button></a>
    <a href="viewAccepted.php"><button type="submit">View Accepted Applications</button></a>
            <div class="row">
                <h3>New Applications</h3>
            </div>
            <div class="row">
         
                   
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>                 	
                      <th> Application ID</th>
                      <th> Application Status  </th>
                      <th> Application CV Path  </th>
                      <th>   </th>
                      <th> Expectations  </th>
                      <th> Strengths  </th>
                      <th> Weaknesses  </th>
                      <th> Decide  </th>
                      
                    </tr>
                  </thead>  
                  <tbody>
                  <?php
                   include 'database.php';
                  
                  
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM JobApplications ORDER BY jobAppId DESC';
                   
                   for ($k = 0; $k < count($specificEmployerJobApplicationData); $k++) {
                          $target=$specificEmployerJobApplicationData[$k]['jobAppId'];
                          $GLOBALS['targetguy']=$target;
                            echo '<tr>';
                            
                             echo '<td>'. $specificEmployerJobApplicationData[$k]['jobAppId'] . '</td>';
                             echo '<td>'. $specificEmployerJobApplicationData[$k]['jobAppStatus'] . '</td>';
                             echo '<td>'. $specificEmployerJobApplicationData[$k]['jobAppCV'] . '</td>';
                             echo '<td> <a href="'. $specificEmployerJobApplicationData[$k]['jobAppCV'] .'"><img src="./assets/images/downloadicon.png" alt="CE" height="50" width="50"></a></td>';
                             echo '<td>'. $specificEmployerJobApplicationData[$k]['jobAppExpectations'] . '</td>';
                             echo '<td>'. $specificEmployerJobApplicationData[$k]['jobAppStrengths'] . '</td>';
                             echo '<td>'. $specificEmployerJobApplicationData[$k]['jobAppStrengths'] . '</td>';
                               
                            
                             
                                                   
                            echo '<td width=250>';
                           
                                echo ' ';
                            
                                //echo '<a class="btn btn-success" href="viewAccepted.php?id='.$row['jobAppId'].'">Approve</a>';
                                echo ' 
                                <form action="ViewAppProcess.php" method="post">
                                    <input type="hidden" name="jobAppId" value="' .$specificEmployerJobApplicationData[$k]['jobAppId'] .'">
                                    <button class="btn btn-success" name = "submit" type="submit">Approve</button> 

                                 </form>
                                 ';
                                echo '<br> ';
                                //echo '<a class="btn btn-danger" href="Reject.php?id='.$row['jobAppId'].'">Reject</a>';
                                echo'
                                <form action="ViewAppProcess.php" method="post">
                                <input type="hidden" name="jobAppId" value="' .$specificEmployerJobApplicationData[$k]['jobAppId'] .'">
                                    <button class="btn btn-danger" name="reject" type="submit">Reject</button> 
                                </form>
                                ';
                            echo '</tr>';

                            
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
            
        </div>

    </div> <!-- /container -->
  </body>

</html><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
 
?>