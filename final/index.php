<?php
// Aram Aldarraji
// INEW 2334 001
// 04/20/2019
// Final Project
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Computer Information Systems certificate</title>
<link rel="stylesheet" href="stylesheet/style.css">
 <meta name="description" content="Main Page.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="wrapper">
<header>
<div id="logo">
<img src="images/logo.jpg" height="100" width="200" alt="AC."></div>
<h1>Computer System Support Certificate</h1>
</header>
<nav class="topnav">
<ul>
<li><a href="index.php"> Home </a> </li>
<li><a href="whenwilligraduate.php"> When will i graduate </a> </li>
<li><a href="howmuchwillitcost.php"> How much will it cost </a> </li>
<li><a href="itjobs.php"> IT jobs in Texas </a> </li>
<li><a href="help.php"> Helpfull Prpgrams </a> </li>
<li><a href="other.php"> Other dgrees and certificates </a> </li>
<li><a href="contact.php"> Contact </a>
</ul>
</nav>
<hr>
<main>
<h2>Prepares students for computer support tasks such as replacing computer parts, installing and maintaining small networks, maintaining security of computer systems, and creating and maintaining files using Microsoft Office. Students are prepared to take the following industry certification exams: Microsoft Office Specialist (MOS), CompTIA A+, Security +, Network + exams.</h2>
<img src="images/hero1.JPG" width="1000" height="700" alt="">
<br>
<h1>Program Requirements </h1>
<?php
$arr = array('<li>BCIS 1305 - Business Computer Applications</li>', '
<li>CPMT 1351 - IT Essentials: PC Hardware and Software</li>', '
<li>ITSC 2335 - Application Software Problem Solving</li>', '
<li>ITSE 2309 - Database Programming</li>', '
<li>ITSY 1342 - Information Technology Security</li>');
print implode(" ",$arr);
?>

</main>
<footer>
Copyright &copy; 2019 <a href="mailto:a0525056@amarillocollege.com">Aram Aldarraji</a><br> 
<p><script language="javascript"> 
	document.write("<i>Last updated "+document.lastModified+"<I>"); 
	</script></p>
</footer>
</div>
</body>
</html>
