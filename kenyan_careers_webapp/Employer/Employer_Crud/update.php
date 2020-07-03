<?php
     include 'header.php';
     require 'database.php';
     
     $id = null;
  if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    }
  
     if ( !empty($_POST)) {
         // keep track validation errors
        
        $JobnameError = null;
         $JobDescriptionError = null;
         $SalaryError = null;
         $RequirementError = null;
         $jobLocationError = null;
         $jobCategoryError = null;
         $jobClosingDateError = null;
         
         // keep track post values
        
         $Jobname = $_POST['Jobname'];
         $JobDescription = $_POST['JobDescription'];
         $Salary = $_POST['Salary'];
         $Requirement = $_POST['Requirement'];
          $jobLocation = $_POST['jobLocation'];
           $jobCategory = $_POST['jobCategory'];
            $jobClosingDate = $_POST['jobClosingDate'];
         
          
         // validate input
         $valid = true;
                   
         if (empty($Jobname)) {
             $JobnameError = 'Please enter Responsibility';
             $valid = false;
         }
         if (empty($JobDescription)) {
            $JobDescriptionError = 'Please enter Qualifications';
            $valid = false;
        }
        if (empty($Salary)) {
            $SalaryError = 'Please enter Salary';
            $valid = false;
        }
               
               if (empty($Requirement)) {
            $RequirementError = 'Please enter Requirements';
            $valid = false;
        }
        if (empty($jobLocation)) {
            $jobLocationError = 'Please enter Location';
            $valid = false;
        }
        if (empty($jobCategory)) {
            $jobCategoryError = 'Please enter jobCategory';
            $valid = false;
        }
        if (empty($jobClosingDate)) {
            $jobClosingDateError = 'Please enter job Closing Date';
            $valid = false;
        }
         // insert data
         if ($valid) {
             $empId = $_SESSION['myid'];
             $pdo = Database::connect();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
             $sql = "UPDATE jobs SET jobName=?, jodDescr=?, jobSalary=? , Requirements=?, jobLocation=?, jobCategory=?, jobClosingDate=? WHERE id=?";	
             $q = $pdo->prepare($sql);
             $q->execute(array($Jobname, $JobDescription, $Salary, $Requirement, $jobLocation, $jobCategory, $jobClosingDate, $empId));
             Database::disconnect();
             header("Location: index.php");
         }
              }
              else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM jobs where jobId = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $name = $data['jobName'];
        $email = $data['jodDescr'];
        $mobile = $data['jobSalary'];
        $mobile = $data['Requirements'];
        $mobile = $data['jobLocation'];
        $mobile = $data['jobCategory'];
        $mobile = $data['jobClosingDate'];
        Database::disconnect();
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
                        <h3>Update Job</h3>
        
                    </div>
             
                    <form class="form-horizontal" action="updateProcess.php" method="post">
                      <div class="control-group <?php echo !empty($CategoryError)?'error':'';?>">
                        
                      <div class="control-group <?php echo !empty($JobnameError)?'error':'';?>">
                        <label class="control-label"> Job Name </label>
                        <div class="controls">
                            <input name="Jobname" type="text" class="form-control" placeholder="Job Name" value="<?php echo !empty($Jobname)?$Jobname:'';?>">
                            <?php if (!empty($JobnameError)): ?>
                                <span class="help-inline"><?php echo $JobnameError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($JobDescriptionError)?'error':'';?>">
                        <label class="control-label"> Job Description </label>
                        <div class="controls">
                     
                       <textarea name="JobDescription" type="text" class="form-control" rows="4" cols="50" placeholder="Describe the job " value="<?php echo !empty($JobDescription )?$JobDescription :'';?>"></textarea>
                            <?php if (!empty($JobDescriptionError)): ?>
                                <span class="help-inline"><?php echo $JobDescriptionError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($SalaryError)?'error':'';?>">
                        <label class="control-label">Salary </label>
                        <div class="controls">
                            <input name="Salary" type="number"  class="form-control" placeholder="Salary " value="<?php echo !empty($Salary)?$Salary  :'';?>">
                            <?php if (!empty($SalaryError)): ?>
                                <span class="help-inline"><?php echo $SalaryError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      
                      <div class="control-group <?php echo !empty($RequirementError)?'error':'';?>">
                        <label class="control-label"> Job Requirements </label>
                        <div class="controls">
                     
                       <textarea name="Requirement" type="text" class="form-control" rows="4" cols="50" placeholder=" job Requirement " value="<?php echo !empty($JobDescription )?$JobDescription :'';?>"></textarea>
                            <?php if (!empty($RequirementError)): ?>
                                <span class="help-inline"><?php echo $RequirementError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                     
                      
                      <div class="control-group <?php echo !empty($jobLocationError)?'error':'';?>">
                        <label class="control-label"> job Location </label>
                        <div class="controls">
                            <input name="jobLocation" type="text" class="form-control" placeholder="job Location" value="<?php echo !empty($jobLocation)?$jobLocation:'';?>">
                            <?php if (!empty($jobLocationError)): ?>
                                <span class="help-inline"><?php echo $jobLocationError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($jobCategoryError)?'error':'';?>">
                        <label class="control-label"> job Category </label>
                        <div class="controls">
                            <input name="jobCategory" type="text" class="form-control" placeholder="job Category" value="<?php echo !empty($jobCategory)?$jobCategory:'';?>">
                            <?php if (!empty($jobCategoryError)): ?>
                                <span class="help-inline"><?php echo $jobCategoryError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($jobClosingDateError)?'error':'';?>">
                        <label class="control-label"> job Closing Date</label>
                        <div class="controls">
                            <input name="jobClosingDate" type="date" class="form-control" placeholder="job Closing Date" value="<?php echo !empty($jobClosingDate)?$jobClosingDate:'';?>">
                            <?php if (!empty($jobClosingDateError)): ?>
                                <span class="help-inline"><?php echo $jobClosingDateError;?></span>
                            <?php endif;?>

                            <input name="jobId" type="hidden"  value="<?php echo ($id);?>">

                        </div>
                      </div>
                      
                      
                      </div><br>
                                     
                            <div class="form-actions">
                      <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                                 
    </div> <!-- /container -->
  </body>
</html><br><br><br><br><br><br><br><br><br>
<?php
 include 'footer.php';
  ?>

