<?php
session_start();

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
<h1>Graduation Year Calculator</h1>
<br>
<div id="  ">
            <form action="cal2.php" method="post">
                How many classes a semester? <input type="text" id="numberOne" name="numberOne" class="inputBox">
                <input type="submit" value="Submit" id="equal">
            </form>
        </div>
<br>
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
