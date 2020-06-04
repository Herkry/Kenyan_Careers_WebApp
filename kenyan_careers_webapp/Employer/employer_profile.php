<?php
  //Requiring the header from the header.php file
  require_once('header.php');
  require_once('footer.php');

  $headr = new Header();
  $headr->isLoggedin();

  $footr = new Footer();
  $footr->display_plain_footer();
?>

<html>
    <title>Employer_Profile_Page</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_signup.css">
    </head>
    <body>

    <div class="container">
        <div id="header">
            <h2 style = "color: blue;">My Profile</h2>
        </div>
        <!--Form definition for user input-->
        <form action="employer_signup_database.php" method="post">
         <div class="row">

                <div class="col-md-2">
                     <a href="#change"><img id="logo" width = "200px"  src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/employee_careers.png" alt="yourlogo" /></a>
                     <input id="change" type='file' name="logo" onchange="readURL(this);" />
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
                       <select name="category" required>

                        <option value="Conglomerate">Conglomerate</option>}
                        <option value="Mining">Mining</option>
                        <option value="Transport and Communication">Transport and Communication</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Construction">Construction</option>
                        <option value="Education">Education</option>
                        <option value="Health">Health</option>
                        <option value="Hospitality">Hospitality</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Media">Media</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Music">Music</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Pharmaceutical">Pharmaceutical</option>
                        <option value="Other">Other</option>

                        </select>
                 </div>

                <!-- </div> -->
                 <div class="col-md-6">
                    <div class="form-group">

                      <input type="text" name="name" id="nameoforg" required class="form-control" placeholder="Input Name" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> --><br>
                      <input type="email" name="email" id="emailaddress" required class="form-control" placeholder="Input Email Address" aria-describedby="helpId"><br>
                      <input type="number" name="phone" id="phonenumber" required class="form-control" placeholder="Input Phone Number" aria-describedby="helpId"><br>
                      <input type="text" name="location" id="location" required class="form-control" placeholder="Input Location" aria-describedby="helpId"><br>
                      <input type="text" name="address" id="address" required class="form-control" placeholder="Input Address" aria-describedby="helpId"><br>
                      <input type="url" name="url" id="url" required class="form-control" placeholder="Input Company url" aria-describedby="helpId"><br>

                      <input type="password" name="password" id="password" required class="form-control" placeholder="Input Password" aria-describedby="helpId"><br>
                      <input type="password" name="cpassword" id="cpassword" required class="form-control" placeholder="Confirm Password" aria-describedby="helpId"><br>

                      <!--Buttons definition-->
                      <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-outline-primary">Login</button>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                            <button name="submit" type="submit" class="btn btn-outline-primary">Submit Details</button>
                            </div>
                      </div>
                </div>
            </div>
        </form>
    </div>
 </body>

</html>
