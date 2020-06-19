
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
            <div class="row">
                <h3>COmpleted Applications</h3>
            </div>
            <div class="row">
         
                   <p> <a href="index.php" class="btn btn-success">Back</a> </p>
             
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Duration</th>
                      <th>Position</th>
                      <th>Responsability</th>
                      <th>Qualifiquation</th>
                      <th>Salary</th>
                      <th>Application Criteria</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                  
                  
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM Vacancies ORDER BY id DESC';
                   
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['Category'] . '</td>';
                            echo '<td>'. $row['Duration'] . '</td>';
                            echo '<td>'. $row['Position'] . '</td>';
                            echo '<td>'. $row['Responsibilities'] . '</td>';
                            echo '<td>'. $row['Qualifications'] . '</td>';
                            echo '<td>'. $row['Salary'] . '</td>';
                            echo '<td>'. $row['Application_Criteria'] . '</td>';
                            echo '<td width=250>';
                                echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
            
        </div>

    </div> <!-- /container -->
  </body>

</html>
