
<?php
session_start();
include 'header.php';

if(!isset($_SESSION['myid']))
{
    header('location:/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_loginpage.php');
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
    <a href="ViewApp.php"><button type="submit">View Applications</button></a>
            <div class="row">
                <h3>New Applications</h3>
            </div>
            <div class="row">
         
                   
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                    
                    
                    
                 	
                      <th>   Status</th>
                      <th> Applicant  </th>
                      <th> CV  </th>
                    
                      
                     
                                            <th>Action</th>
                    </tr>
                  </thead>  
                  <tbody>
                  <?php
                   include 'database.php';
                  
                  
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM JobApplications WHERE jobAppStatus = "Accepted" ORDER BY jobAppId ASC';
                   
                   foreach ($pdo->query($sql) as $row) {
                          $target=$row['jobAppId'];
                          $GLOBALS['targetguy']=$target;
                            echo '<tr>';
                            
                             echo '<td>'. $row['jobAppStatus'] . '</td>';
                              echo '<td>'. $row['jobAppCV'] . '</td>';
                              echo '<td> <a href="#"><img src="./assets/images/downloadicon.png" alt="CE" height="50" width="50"></a></td>';
                               
                            
                             
                                                   
                            echo '<td width=250>';
                           
                                echo ' ';
                            
                                //echo '<a class="btn btn-success" href="viewAccepted.php?id='.$row['jobAppId'].'">Approve</a>';
                                echo ' 
                                <form action="ViewApp.php" method="post">
                                 <button class="btn btn-success" name = "submit" type="submit">Approve</button> 
                                 </form>
                                 ';
                                echo '<br> ';
                                //echo '<a class="btn btn-danger" href="Reject.php?id='.$row['jobAppId'].'">Reject</a>';
                                echo'
                                <form action="ViewApp.php" method="post">
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