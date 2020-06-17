<?php
    require 'database.php';
    
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Vacancies where id = ?";
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
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Category</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Category'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Duration</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Duration'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Position</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Position'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Responsibility</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Responsibilities'];?>
                            </label>
                        </div>
                      </div><div class="control-group">
                        <label class="control-label">Qualification</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Qualifications'];?>
                            </label>
                        </div>
                      </div><div class="control-group">
                        <label class="control-label">Salary</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Salary'];?>
                            </label>
                        </div>
                      </div><div class="control-group">
                        <label class="control-label">Application_Criteria</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Application_Criteria'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="index.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
