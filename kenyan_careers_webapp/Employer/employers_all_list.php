 <?php
 session_start();
    include_once('emp_dbconnect.php');
    require_once('footer.php');

    $footr = new Footer();
    $footr->display_plain_footer();

    if(!isset($_SESSION['myid']))
    {
        header('location: employer_loginpage.php');
    }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_signup.css">
   </head>
   <body>

    <?php
    $sql = "SELECT * FROM employer_details ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    ?>
    <div class="container">
      <div id="header">
          <h2 style = "color: blue;font-weight:bold;font-style:italic;">Registered Employers</h2>
      </div>
    <?php

    if ($resultCheck>0)
    {
      while ($row = mysqli_fetch_assoc($result))
      {
        ?>
            <p>
                <div style="background:lightgreen; margin-left:255px;margin-right:255px;" class="row">
                      <div class="col-md-4">
                        <?php echo $row['emp_name'] ?> <br>
                      </div>
                      <div class="col-md-4">
                        <?php echo $row['emp_location'];?>
                      </div>
                      <div class="col-md-4">
                      <a href=" <?php echo $row['emp_url'];?> "><button name="submit" type="submit" class="btn btn-outline-primary">Visit <?php echo $row['emp_name'];?></button></a>
                      </div>
                </div>
            </p>


          </div>

        <?php
      }
    }
      ?>

   </body>
 </html>
