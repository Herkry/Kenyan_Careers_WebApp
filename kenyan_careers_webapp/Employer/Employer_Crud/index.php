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
            <div class="row">
                <h3>Employer Updates</h3>
            </div>
            <div class="row">
         
                   
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                    
                    
                    
                 	
                      <th> Job Name</th>
                      <th> Job Category</th>
                      <th>Job Description</th>
                      
                      <th>Job Salary in Ksh </th>
                      <th> Job Requirements </th>
                      <th> Job closing Date </th>
                      <th> Job Location </th>
                      
                     
                                            <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                  
                   $emp_id = $_SESSION['myid'];
                   $pdo = Database::connect();
                   $sql = "SELECT * FROM jobs WHERE empId = '$emp_id' ORDER BY jobId DESC";
                   
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['jobName'] . '</td>';
                              echo '<td>'. $row['jobCategory'] . '</td>';
                            echo '<td>'. $row['jodDescr'] . '</td>';
                          
                            echo '<td>'. $row['jobSalary'] . '</td>';
                             echo '<td>'. $row['Requirements'] . '</td>';
                           
                              echo '<td>'. $row['jobClosingDate'] . '</td>';
                               echo '<td>'. $row['jobLocation'] . '</td>';
                             
                                                   
                            echo '<td width=250>';
                                echo '<a class="btn" href="read.php?id='.$row['jobId'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row['jobId'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id='.$row['jobId'].'">Delete</a>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  <a class="btn" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_vacancy_home.php">Back</a>
                  </tbody>
            </table>
            
        </div>

    </div> <!-- /container -->
  </body>

</html><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
 include 'footer.php';
  ?>
