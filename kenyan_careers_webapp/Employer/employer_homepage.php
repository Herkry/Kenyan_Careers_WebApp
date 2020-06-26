<?php
session_start();
// require_once('header.php');
// require_once('footer.php');
// $headr = new Header();
// $headr->isLoggedin();
// $footr = new Footer();
// $footr->isLoggedin();

if(!isset($_SESSION['myid']))
{
    header('location: employer_loginpage.php');
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employer Homepage</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="logo" class="container">

  <h2 style="text-align:center;font-size:30px;"><b> <a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/index.php">KENYAN CAREERS</a></b> </h2>

</div>

<div id="menu-wrapper">
	<div id="menu" class="container">
		<ul>
			<li><a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/index.php">Homepage</a></li>
			<li><a href="employer_profile.php">Profile</a></li>
      <li><a href="employer_vacancy_home.php">Vacancy</a></li>
			<li><a href="#">Blog Articles</a></li>
			<li><a href="employers_all_list.php">View Other Employers</a></li>
			<li><a href="employer_logout.php">Logout</a></li>
		</ul>
	</div>
</div>

<div id="page" class="container">
	<div id="box1">
		<h2 class="title"><a href="#">Welcome to KenyanCareer</a></h2>
		<div style="clear: both;">&nbsp;</div>
		<div class="entry">
			<p>As <strong>KenyanCareer </strong>, we believe you deserve the best, and that is why we are here.</p>
			<p>Solving your greatest worry pertaining the whole enchilada of job hiring and propelling your business forward is our mission. Incase of any enquiries: call us on +254712345678</p>
		</div>
	</div>
	<div id="box2">
		<h2>Growth</h2>
		<ul class="style1">
			<li class="first"><a href="https://www.americasjobexchange.com/employer/employer-articles/company-branding-and-diversity-recruiting">Be a better Boss</a></li>
			<li><a href="https://www.americasjobexchange.com/employer/employer-articles/guide-small-businesses-with-federal-contracts">Guide for small businesses</a></li>
			<li><a href="https://www.americasjobexchange.com/employer/employer-articles/what-makes-a-good-team">What makes a great Team?</a></li>
			<li><a href="https://www.americasjobexchange.com/employer/employer-articles/employee-appreciation">Appreciating Employees</a></li>
      <li><a href="/Kenyan_Careers_WebApp/kenyan_careers_webapp/Employer/employer_deactivate_account.php">Deactivate Account</a></li>
  	</ul>
	</div>
	<div id="box3">
		<h2>Improve Business</h2>
		<ul class="style1">
			<li class="first"><a href="https://www.americasjobexchange.com/employer/employer-articles/keys-to-improve-small-business-recruitment-strategies">Recruiting</a></li>
			<li><a href="https://www.americasjobexchange.com/employer/employer-articles/diversity-recruiting">Diversity Recruiting</a></li>
			<li><a href="https://www.americasjobexchange.com/employer/employer-articles/veteran-hiring-a-networked-approach">Veteran Hiring</a></li>
			<li><a href="https://www.americasjobexchange.com/employer/employer-articles/productivity-at-work">Staying Connected</a></li>
			<li><a href="https://www.americasjobexchange.com/employer/employer-articles/social-media-policies-in-the-workplace">Manage Social Media</a></li>

		</ul>
	</div>
</div>
<div id="footer" class="container">
	<p>&copy; Kenyan Careers. All rights reserved. 2020</p>
</div>
</body>
</html>
