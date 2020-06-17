
<?php
     
     require 'database.php';
  
  
     if ( !empty($_POST)) {
         // keep track validation errors
         $categoryError = null;
         $DurationError = null;
         $PositionError = null;
         $ResponsibilitiesError = null;
         $QualificationsError = null;
         $SalaryError = null;
         $Application_CriteriaError = null;
          
         // keep track post values
         $Category = $_POST['Category'];
         $Duration = $_POST['Duration'];
         $Position = $_POST['Position'];
         $Responsibility = $_POST['Responsibilities'];
         $Qualification = $_POST['Qualifications'];
         $Salary = $_POST['Salary'];
         $Application_Criteria = $_POST['Application_Criteria'];
          
         // validate input
         $valid = true;
         if (empty($Category)) {
             $CategoryError = 'Please enter Category';
             $valid = false;
         }
          
         if (empty($Duration)) {
             $DurationError = 'Please enter Duration';
             $valid = false;
         
         }
         if (empty($Position)) {
            $PositionError = 'Please enter Position';
            $valid = false;
        
        }
          
         if (empty($Responsibility)) {
             $ResponsibilitiesError = 'Please enter Responsibility';
             $valid = false;
         }
         if (empty($Qualification)) {
            $QualificationsError = 'Please enter Qualifications';
            $valid = false;
        }
        if (empty($Salary)) {
            $SalaryError = 'Please enter Salary';
            $valid = false;
        }
        if (empty($Application_Criteria)) {
            $Application_CriteriaError = 'Please enter Position';
            $valid = false;
        }
                
         // insert data
         if ($valid) {
             $pdo = Database::connect();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "INSERT INTO Vacancies (Category, Duration,	Position, Responsibilities, Qualifications, Salary, Application_Criteria 	)  values(?, ?, ?, ?, ?, ?, ?)";
             $q = $pdo->prepare($sql);
             $q->execute(array($Category, $Duration,  $Position, $Responsibility, $Qualification, $Salary, $Application_Criteria));
             Database::disconnect();
             header("Location: index.php");
         }
     }
 ?>
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
                        <h3>Create Job</h3>
        
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($CategoryError)?'error':'';?>">
                        <label class="control-label">Category</label>
                        <div class="controls">
                            <input name="Category" type="text"  placeholder="Validation" value="<?php echo !empty($Category)?$Category:'';?>">
                            <?php if (!empty($CategoryError)): ?>
                                <span class="help-inline"><?php echo $CategoryError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($DurationError)?'error':'';?>">
                        <label class="control-label">Duration</label>
                        <div class="controls">
                            <input name="Duration" type="text" placeholder="Duration" value="<?php echo !empty($Duration)?$Duration:'';?>">
                            <?php if (!empty($DurationError)): ?>
                                <span class="help-inline"><?php echo $DurationError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($PositionError)?'error':'';?>">
                        <label class="control-label">Position </label>
                        <div class="controls">
                            <input name="Position" type="text"  placeholder="Position " value="<?php echo !empty($Position )?$Position :'';?>">
                            <?php if (!empty($PositionError)): ?>
                                <span class="help-inline"><?php echo $PositionError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($ResponsibilitiesError)?'error':'';?>">
                        <label class="control-label">Responsibilities </label>
                        <div class="controls">
                            <input name="Responsibilities" type="text"  placeholder="Responsibilities " value="<?php echo !empty($Responsibilities)?$Responsibilities:'';?>">
                            <?php if (!empty($ResponsibilitiesError)): ?>
                                <span class="help-inline"><?php echo $ResponsibilitiesError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($QualificationsError)?'error':'';?>">
                        <label class="control-label">Qualifications </label>
                        <div class="controls">
                     
                       <textarea name="Qualifications" type="text" cols="40" rows="5" placeholder="Qualification " value="<?php echo !empty($Qualifications )?$Qualifications :'';?>"></textarea>
                            <?php if (!empty($QualificationsError)): ?>
                                <span class="help-inline"><?php echo $QualificationsError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($SalaryError)?'error':'';?>">
                        <label class="control-label">Salary </label>
                        <div class="controls">
                            <input name="Salary" type="number"  placeholder="Salary " value="<?php echo !empty($Salary)?$Salary  :'';?>">
                            <?php if (!empty($SalaryError)): ?>
                                <span class="help-inline"><?php echo $SalaryError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($Application_CriteriaError)?'error':'';?>">
                        <label class="control-label">Application Criteria </label>
                        <div class="controls">
                            <input name="Application_Criteria" type="text"  placeholder="Position " value="<?php echo !empty($Application_Criteria )?$Application_Criteria :'';?>">
                            <?php if (!empty($Application_CriteriaError)): ?>
                                <span class="help-inline"><?php echo $Application_CriteriaError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>