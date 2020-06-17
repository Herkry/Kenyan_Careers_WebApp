<?php

class Header
{
    //This is a header for a logged in user

    function headerdisplay()
    {
        ?>
        <html lang ="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_header_footer.css">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/Israel_custom.css">
        </head>

        <body>
            <!--Using flex for the header design
            Check file: header.css
            -->
        <header class="site-header">
        <a href="#"><img height="90" width="260" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/kenyancareer_logo_transparent.png" alt="kenyan_career_logo"></a>
       </header>
       <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId">
            <li class="nav-item">
                <a href="#tab1Id" class="nav-link">My Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vacancy Manager</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#tab2Id">Add New</a>
                    <a class="dropdown-item" href="#tab3Id">View Previous</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#tab4Id">Inbox</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#tab5Id" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Help</a>
            </li>
        </ul>

       <!-- Tab panes -->
       <div class="tab-content">
           <div class="tab-pane fade" id="tab1Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
       </div>

       <script>
           $('#navId a').click(e => {
               e.preventDefault();
               $(this).tab('show');
           });
       </script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        </body>
        </html>
        <?php

    }
    function plain_header_display()
    {
        ?>
        <html lang ="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_header_footer.css">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/Israel_custom.css">
        </head>

        <body>
            <!--Using flex for the header design
            Check file: employer_header_footer.css
            -->
        <header class="site-header">
        <a href="#"><img height="90" width="260" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/kenyancareer_logo_transparent.png" alt="kenyan_career_logo"></a>
       </header>
       <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId">
            <li class="nav-item">
                <a href="#tab1Id" class="nav-link">Explore</a>
            </li>
            <li class="nav-item">
                <a href="#tab5Id" class="nav-link">Look for a job</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Career News</a>
            </li>
            <li class="nav-item">
                <a href="employers_all_list.php" class="nav-link">View Employers</a>
            </li>
            <li class="nav-item">
                <a href="employer_loginpage.php" class="nav-link">Already have an account?</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Help</a>
            </li>

        </ul>

       <!-- Tab panes -->
       <div class="tab-content">
           <div class="tab-pane fade" id="tab1Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
       </div>

       <script>
           $('#navId a').click(e => {
               e.preventDefault();
               $(this).tab('show');
           });
       </script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        </body>
        </html>
        <?php
    }

    function plain_header_display2()
    {
        ?>
        <html lang ="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_header_footer.css">
        <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/Israel_custom.css">
        </head>

        <body>
            <!--Using flex for the header design
            Check file: employer_header_footer.css
            -->
        <header class="site-header">
        <a href="#"><img height="90" width="260" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/kenyancareer_logo_transparent.png" alt="kenyan_career_logo"></a>
       </header>
       <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId">
            <li class="nav-item">
                <a href="#tab1Id" class="nav-link">Explore</a>
            </li>
            <li class="nav-item">
                <a href="#tab5Id" class="nav-link">Look for a job</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Career News</a>
            </li>
            <li class="nav-item">
                <a href="employers_all_list.php" class="nav-link">View Employers</a>
            </li>
            <li class="nav-item">
                <a href="employer_signup.php" class="nav-link">No account?</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Help</a>
            </li>

        </ul>

       <!-- Tab panes -->
       <div class="tab-content">
           <div class="tab-pane fade" id="tab1Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
           <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
       </div>

       <script>
           $('#navId a').click(e => {
               e.preventDefault();
               $(this).tab('show');
           });
       </script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        </body>
        </html>
        <?php
    }

    function isLoggedin()
    {
      ?>
      <html lang ="en">
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/employer_header_footer.css">
      <link rel="stylesheet" href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/CSS/Israel_custom.css">
      </head>

      <body>
          <!--Using flex for the header design
          Check file: header.css
          -->
      <header class="site-header">
      <a href="#"><img height="90" width="260" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/kenyancareer_logo_transparent.png" alt="kenyan_career_logo"></a>
     </header>
     <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="navId">
          <li class="nav-item">
              <a href="employer_profile.php" class="nav-link">My Profile</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vacancy Manager</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#tab2Id">Add New</a>
                  <a class="dropdown-item" href="#tab3Id">View Previous</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#tab4Id">Inbox</a>
              </div>
          </li>
          <li class="nav-item">
              <a href="employer_logout.php" class="nav-link">Logout</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Help</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account Settings</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="employers_all_list.php">Other Employers</a>
                  <div class="dropdown-divider"></div>
                  <a style="color:red;" class="dropdown-item" href="employer_delete_profile.php">Delete Account</a>
              </div>
          </li>
      </ul>

     <!-- Tab panes -->
     <div class="tab-content">
         <div class="tab-pane fade" id="tab1Id" role="tabpanel"></div>
         <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
         <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
         <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
         <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
     </div>

     <script>
         $('#navId a').click(e => {
             e.preventDefault();
             $(this).tab('show');
         });
     </script>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

      </body>
      </html>


      <?php
    }

}
?>