<?php include 'includes/config.php'?>
<?php include 'includes/functions.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'sub/head.php' ?>
</head>
  
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<nav class="navbar navbar-default navbar-fixed-top" style="background:#000000;">
	<?php include 'sub/menu.php' ?> 
</nav>


<div class="jumbotron text-center">
	<?php include 'sub/menubelow.php' ?> 
</div>

<div id="home" class="container-fluid" >
<div>
<marquee><span class="glyphicon glyphicon-time"></span>
<?php
date_default_timezone_set('Asia/Karachi');
 date_default_timezone_get() . "<br>";
echo   date("dS-M-Y",time())."&nbsp;&nbsp;&nbsp;&nbsp;";
echo  date("h : i :s A",time())."<br>";
?>
</marquee>
</div>
   <?php include 'sub/co.php'; ?>
      </div>

<footer class="container-fluid text-center" >
  	<?php include 'sub/footer.php' ?>
</footer>
</body>
</html>