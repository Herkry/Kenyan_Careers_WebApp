<?php
session_start();
include 'header.php';
require 'database.php';
if(!isset($_SESSION['myid']))
{
    header('location:/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_loginpage.php');
}
    
    
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM jobs where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Read a Job</h3>
                    </div>
                     
                    
                      <div class="control-group">
                        <label class="control-label" style="background-color:powderblue;">JOB NAME</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['jobName'];?>
                            </label>
                        </div>
                      </div><div class="control-group">
                        <label class="control-label" style="background-color:powderblue;">JOB DESCRIPTION</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['jodDescr'];?>
                            </label>
                        </div>
                      </div><div class="control-group">
                        <label class="control-label" style="background-color:powderblue;">SALARY IN Ksh</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['jobSalary'];?>
                            </label>
                        </div>
                      </div><div class="control-group">
                        <label class="control-label" style="background-color:powderblue;">JOB REQUIREMENTS</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Requirements'];?>
                            </label>
                        </div>
                        
                      </div><div class="control-group">
                        <label class="control-label" style="background-color:powderblue;">JOB CATEGORY</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['jobCategory'];?>
                            </label>
                        </div><div class="control-group">
                        <label class="control-label" style="background-color:powderblue;">JOB CLOSING DATE</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['jobClosingDate'];?>
                            </label>
                        </div><div class="control-group">
                        <label class="control-label" style="background-color:powderblue;">JOB LOCATION</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['jobLocation'];?>
                            </label>
                        </div>
                        
                        <div class="form-actions">
                          <a class="btn" href="index.php">Back</a>
                       </div>
                     
                      </div>
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html><br><br>
<?php
include "footer.php";
?>
