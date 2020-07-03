<?php
session_start();
  include_once('emp_dbconnect.php');

  if(!isset($_SESSION['myid']))
  {
      header('location: employer_loginpage.php');
  }

?>


<html>
<title></title>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
</head>
<body>

<div class="container">
<a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/Employer_Crud/create.php">
  <div class="card">
    <h3 class="title">Add Vacancy</h3>
    <div class="bar">
      <!-- <div class="emptybar"></div>
      <div class="filledbar"></div> -->
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
  </a>
  <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/Employer_Crud/index.php">
  <div class="card">
    <h3 class="title">Edit Vacancy</h3>
    <div class="bar">
      <!-- <div class="emptybar"></div>
      <div class="filledbar"></div> -->
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
  </a>
  <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/Employer_Crud/ViewApp.php">
  <div class="card">
    <h3 class="title">Inbox</h3>
    <div class="bar">
      <!-- <div class="emptybar"></div>
      <div class="filledbar"></div> -->
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
  </a>
  <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_homepage.php">
  <div class="card">
    <h3 class="title">Home</h3>
    <div class="bar">
      <!-- <div class="emptybar"></div>
      <div class="filledbar"></div> -->
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
</div>
</a>
</body>

<style>
body {
  background-color: white;
  font-family: 'Open Sans', sans-serif;
}

.container {
  position: absolute;
  height: 300px;
  width: 600px;
  top: 60px;
  left: calc(50% - 300px);
  display: flex;
}

.card {
  display: flex;
  height: 280px;
  width: 200px;
  background-color: #17141d;
  border-radius: 10px;
  box-shadow: -1rem 0 3rem #000;
/*   margin-left: -50px; */
  transition: 0.4s ease-out;
  position: relative;
  left: 0px;
}

.card:not(:first-child) {
    margin-left: -50px;
}

.card:hover {
  transform: translateY(-20px);
  transition: 0.4s ease-out;
}

.card:hover ~ .card {
  position: relative;
  left: 50px;
  transition: 0.4s ease-out;
}

.title {
  color: white;
  font-weight: 300;
  position: absolute;
  left: 20px;
  top: 15px;
}

.bar {
  position: absolute;
  top: 100px;
  left: 20px;
  height: 5px;
  width: 150px;
}

.emptybar {
  background-color: #2e3033;
  width: 100%;
  height: 100%;
}

.filledbar {
  position: absolute;
  top: 0px;
  z-index: 3;
  width: 0px;
  height: 100%;
  background: rgb(0,154,217);
  background: linear-gradient(90deg, rgba(0,154,217,1) 0%, rgba(217,147,0,1) 65%, rgba(255,186,0,1) 100%);
  transition: 0.6s ease-out;
}

.card:hover .filledbar {
  width: 120px;
  transition: 0.4s ease-out;
}

.circle {
  position: absolute;
  top: 150px;
  left: calc(50% - 60px);
}

.stroke {
  stroke: white;
  stroke-dasharray: 360;
  stroke-dashoffset: 360;
  transition: 0.6s ease-out;
}

svg {
  fill: #17141d;
  stroke-width: 2px;
}

.card:hover .stroke {
  stroke-dashoffset: 100;
  transition: 0.6s ease-out;
}
</style>
</html>