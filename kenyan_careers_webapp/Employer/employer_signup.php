<?php

//Requiring the header from the header.php file
 require_once('header.php');
 require_once('footer.php');

 $headr = new Header();
 $headr->plain_header_display();

  $footr = new Footer();
  $footr->display_social_footer();

?>

 <html>
 <title>Employer_SignUp_Page</title>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_signup.css">

 </head>
    <body>
    <div class="container">
        <div id="header">
            <h1>Create Company Profile</h1>
        </div>
        <form action="" method="post"> 

         <div class="row">

                <div class="col-sm-4">
                    <div class="imageupload">
                    <!-- <img src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/logo-placeholder-png.png" class="rounded float-left" height="160" width="160" alt="Image_input"> -->
                    <form action="#" method="post">
                    <!-- <input type="file" id="myfile" name="myfile"><br><br> -->
                   
                     <a href="#change"><img id="logo" width = "200px" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/logo-placeholder-png.png" alt="yourlogo" /></a>
                     <input id="change" type='file' onchange="readURL(this);" />
                    
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

                    </form>

                    <br><br><br>
                    
                    <!--drop down menu for industry category-->
                       <select>  
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

                </div>

                    <div class="form-group">
                        
                      <input type="text" name="" id="nameoforg" class="form-control" placeholder="Input Name" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> --><br>
                      <input type="email" name="" id="emailaddress" class="form-control" placeholder="Input Email Address" aria-describedby="helpId"><br>
                      <input type="number" name="" id="phonenumber" class="form-control" placeholder="Input Phone Number" aria-describedby="helpId"><br>
                      <input type="text" name="" id="location" class="form-control" placeholder="Input Location" aria-describedby="helpId"><br>
                      <input type="text" name="" id="address" class="form-control" placeholder="Input Address" aria-describedby="helpId"><br>
                      <input type="url" name="" placeholder = "Company Website" id="">
                    
                </div>

            </div>

        </form>
    </div>

               
 </body>

 </html>