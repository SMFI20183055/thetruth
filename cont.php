<?php
include("ff1.php");


?>


<!DOCTYPE html>
<html>
<head>
	<title>The Truth</title>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">	
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="shortcut icon" type="image/png" href="bd.png">
</head>
<style>
@media only screen and (min-width: 600px){
body {
	width: 100%;
	height: 100%;
  }
 }

@media only screen and (max-width: 300px){
body {
    width: 100%;
    height: 100%;
    margin: 0px 9px 9px -450px;
    background-size: 103% 105%;
  }
  header{
    height: 1%;
    width: 129%;
    margin: 0px 13px 24px -27px;
  }
  nav {
     margin: 7px 11px 20px 520px;
    height: 31%;
    width: 53%;
    font-size: 10px;
  }
  nav .menu a {
  	color:  red;
	margin: -1px 20px -43px 3px;
  }
  .foot {
  	height: 46%;
    width: 50%;
    margin: 51px 2px -6px 498px;
  }
  .log {
  	height: 30%;
	width: 100%;
	margin: 11px 10px 8px 8px; 
  }
  .menu {
  	    margin: 32px 30px 30px 30px;
  }
  .ff {
	margin: 51px -8px -18px 508px;
    height: 474px;
    width: 65%;
  }
  input {
  	height: 38px;
    width: 261px !important;
  }
  .f1 {
  	height: 35px;
    width: 185px !important;
  }
  .comm {
  	    width: 183px;
  }
  .btn {
  	    width: 188px !important;
  }
}
</style>
<body>

<header>
<nav>
    <div class="log">
	  <h1 class="animated infinite heartBeat ">The Truth</h1> </div>
		 <div class="menu">
		 <ul>
		<li><a href="index.html" target="_blank">Home</a></li> 
		 <li> <a href="#">Gallery</a></li> 
		<li> </li>  <a href="#">Contact</a></li> 
		<li>  <a href="#">About</a></li>  <!-- div is  closed -->
	</ul>
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