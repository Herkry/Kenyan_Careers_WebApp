<?php
    //header display function
    class HeaderandFooter
    {
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
                            <img src="http://placehold.it/150x50?text=Logo" alt="">
                            </a>
                        </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <form class="form-inline">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                            aria-label="Search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        </form>
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
                        background-color:black;
                        color: white;
                        text-align: center;
                    }
                    </style>
                    </head>
                    <body>
                    <div class="footer">
                    <p>
                        <img src="#" class="img-responsive" alt="kenyacareer_large_logo">

                        <!-- <div class="list-group">
                            <div class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"> <a href="">KenyaCareer</a></h5>
                                    <small>small</small>
                                </div>
                                <p class="mb-1">Services</p>
                                <small>paragraph footer</small>
                            </div>
                        </div> -->
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
