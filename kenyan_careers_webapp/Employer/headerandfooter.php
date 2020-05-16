<?php
    
    class HeaderandFooter
    {
        //header display function
        function headerdisplay()
        {
                ?>
                <!doctype html>
                <html lang="en">
                <head>
                    <title>KenyaCareer_Employer_Module</title>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                </head>
                <body>
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">

                    <div class="container">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <img height="115" width="110" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/kenyacareer_logo_header.png" alt="kenyacareer_logo">
                            </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
                </body>
                </html>
        <?php
        }
        //This is a function for the footer
        function footerdisplay()
        {
            ?>
               <html>
                    <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                        <style>
                        /**Definition of the html class footer */
                        .footer 
                        {
                            position: fixed;
                            left: 0;
                            bottom: 0;
                            width: 100%;
                            background-color:#212529;
                            color: yellow;
                            text-align: center;
                        }
                        </style>
                    </head>

                    <body>

                        <div class="footer">
                        <p>
                        <img height="90" width="90" class="img-responsive" src="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Assets/Images/kenyacareer_logo_custom.png" alt="kenyacareer_logo">
                        </p>
                        <!--Display of the social media icons-->
                        <p>
                            
                        </p>
                        <!--Display of services-->
                        <p>

                        </p>

                        </div>
                    </body>

                </html> 
                        <?php
        }
     }
                $header = new HeaderandFooter();
                $footer = new HeaderandFooter();
                $header->headerdisplay();
                $footer->footerdisplay();
            ?>
