<?php
include("ff1.php");


?>


<!DOCTYPE html>
<html>
<head>
	<title>The Truth</title>
	<meta charset=utf-8>
	<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">	
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="shortcut icon" type="image/png" href="bd.png">
</head>
<style>

</style>
<body>

<header>
<nav>
    <div class="log">
	  <h1 class="animated infinite heartBeat ">The Truth</h1> </div>
		 <div class="menu">
		 <a href="index.html" target="_blank">Home</a>
		 <a href="#">Gallery</a>
		 <a href="#">Contact</a>
		 <a href="#">About</a> <!-- div is  closed -->
	</div>
</nav>
</header>


<form class="ff" action="" method="POST">
<p class="ki">Please give your Opinian</p>
<p>Name</p>
	<input type="text" name="name" class="f1">
<p>State</p>
	<input type="text" name="state" class="f1">
<p>Email</p>
	<input type="text" name="email" class="f1">
<p>Write Your Comment</p>
	<textarea type="text" name="texter" class="comm"></textarea><br>
	
	<input type="submit" name="submit" class="btn">
</form>

<?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$state = $_POST['state'];
	$email = $_POST['email'];
	$text = $_POST['texter'];
	
	$ins	= "INSERT INTO truth VALUES (name='$name', name='$state', name='$email', name='$text')";
 	$fl = mysqli_query($conn, $ins);
	
 if ($fl) {
    echo "Data Submit";
 	} 
 else {
 	echo "Data Don't Inserted";
	}
	} else 
	{
	echo "Dont submit";
	}
?>


<div class=" centerdiv">
<footer class="foot">
   <p>All right reseverdto<font class="copy">© </font> The Truth</p> 
   <p class="flo">Floow us<a href="https://www.facebook.com/mdfaizan.ilahi/" target="_blank"><img class="img" src="fl.png">
   </a><a href="https://twitter.com/home" target="_blank"><img class="img" src="il.png"></a>
   <a href="https://www.instagram.com/sayedilahi/" target="_blank"><img class="img" src="tl.png"></a></p>
</footer>
</div>

</body>
</html>