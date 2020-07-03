<?php
session_start();
  include_once('emp_dbconnect.php');

  if(!isset($_SESSION['myid']))
  {
      header('location: employer_loginpage.php');
  }

?>


<html>
    <title>Employer_Profile_Page</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_signup.css">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_profiledisplay.css">
    </head>
    <body>

        <h3 style="text-align:center; margin-top:20px;">
           <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_homepage.php"><img src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/back_button.png" height="50px" alt=""></a>
            <b style="color:green;">Back to My Dashboard</b> </h3>

        <?php
        $employerid = $_SESSION['myid'];
        $sql = "SELECT * FROM employer_details WHERE emp_id = $employerid";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck>0)
        {
          while ($row = mysqli_fetch_assoc($result))
          {
         ?>

         <div class="container">
             <div id="header">
                 <h2 style = "color: blue; font-weight: bold">Profile</h2>
             </div>

        <!--Form definition for user input-->
        <form action="employer_updateprofile_database.php" method="post">
         <div class="row">

                <div class="col-md-2">
                     <!-- <a href="#change"><img id="logo" width = "200px" value="<?php echo (base64_encode($row['emp_logo'])); ?>" alt="yourlogo" /></a>

                   <input id="change" type='file' name="logo" onchange="readURL(this);" /> -->
                    <script>
                        function readURL(input)
                        {
                            if (input.files && input.files[0])
                            {
                            var reader = new FileReader();
                            reader.onload = function (e)
                            {
                                $('#logo')
                                    .attr('src', e.target.result)
                                    .width(200);
                            };
                            reader.readAsDataURL(input.files[0]);
                            }
                        }
                   </script>
                                          <br><br><br>
                                   <!--drop down menu for industry category-->

                 </div>

                <!-- </div> -->
                 <div class="col-md-6">
                    <div class="form-group">

                      <input type="text" name="name" value="<?php echo $row['emp_name']; ?>" id="nameoforg" required class="form-control" placeholder="Input Name" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> --><br>
                      <input type="email" name="email" value="<?php echo $row['emp_email']; ?>" id="emailaddress" required class="form-control" placeholder="Input Email Address" aria-describedby="helpId"><br>
                      <input type="number" name="phone" value="<?php echo $row['emp_phone']; ?>" id="phonenumber" required class="form-control" placeholder="Input Phone Number" aria-describedby="helpId"><br>
                      <input type="text" name="location" value="<?php echo $row['emp_location']; ?>" id="location" required class="form-control" placeholder="Input Location" aria-describedby="helpId"><br>
                      <input type="text" name="address" value="<?php echo $row['emp_address']; ?>" id="address" required class="form-control" placeholder="Input Address" aria-describedby="helpId"><br>
                      <input type="url" name="url" value="<?php echo $row['emp_url']; ?>" id="url" required class="form-control" placeholder="Input Company url" aria-describedby="helpId"><br>
                      <?php
                          }
                        }
                       ?>
                      <!--Buttons definition-->
                      <div class="row">
                            <div class="col-md-4">
                                <a href="employer_homepage.php"><button type="button" class="btn btn-outline-primary">Cancel</button></a>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                            <button name="submit" type="submit" class="btn btn-outline-primary">Update Details</button>
                            </div>
                      </div>
                </div>
            </div>
        </form>
    </div>
 </body>

</html>
