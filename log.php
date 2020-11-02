<?php
session_start();
include("ff1.php");
error_reporting("");

?>
<!DOCTYPE html>
<html>
<head>
	     <title>Room Update</title>
      <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="shortcut icon" type="image/png" href="k.jpg">
	 
	 
	 

</head>
<style>

body {
	 background-image: url('bac.jpg');
}
/* 
.hi {
	font-size: 21px;
    box-shadow: -5px -4px 17px 1px #00000061;
    border: 5px;
    border-radius: 100px / 50px;
	height: 50px;
	background-color: red;
    width: 300px;
	margin: -48px -93px 18px 14px;
}
.hj {
	font-size: 21px;
    box-shadow: -5px -4px 17px 1px #00000061;
    border: 5px;
    border-radius: 100px / 50px;
	height: 30px;
    width: 107px;
	margin: 15px -5px -5px 141px;
} */
.ff {
    background-color: #ffffff; 
    border: 2px solid green; 
    border-radius: 10px;
    text-align: center;
    height: 400px;
    width: 298px;
    margin: 26px 156px 7px 470px;
    box-shadow: 1px 1px 20px 11px #377566;
}

input[type=text] {
  width: 200px;
  
  -webkit-transition: width .35s ease-in-out;
  transition: width .35s ease-in-out;
}
input[type=text]:focus {
  width: 250px;
  height: 30px;
}
input[type=password] {
  width: 200px;
  
  -webkit-transition: width .35s ease-in-out;
  transition: width .35s ease-in-out;
}
input[type=password]:focus {
  width: 250px;
  height: 30px;
}
.f1 {
    font-style: italic;
    font-family: emoji;
    color: green;
	margin: 	-18px 2px -29px 1px;
	
}




.s1{
	text-align: center;
	margin: 11px;
	box-sizing: border-box;
	font-family: 'Josefin Sans', sans-serif;
	padding: 12px 30px;
	border-radius: 4px;
	outline: none;
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 500;
	text-decoration: none;
	letter-spacing: 1px;
	background: #00b894;
	color: #000;
	margin-right: 15px;
    width: 180px;
    height: 42px;
	
	
}
.p1 {
	margin: 12px 21px 20px 30px;
}
.ki {
	font-size: 30px;
    margin-bottom: -1px;
}
section a{
	padding: 12px 30px;
	border-radius: 4px;
	outline: none;
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 500;
	text-decoration: none;
	letter-spacing: 1px;
}
section .btone {
	background: #00b894;
	color: #000;
	margin-right: 15px;
}

section .btntwo {
	background: #fff;
	color: #000;
	margin-right: 15px;
}
.fit {
    background-color: #73707052;
    height: 34px;
    width: 282px;
    margin: 24px 3px -19px 5px;
    border-radius: 5px;
	 
}
	
</style>
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="need.php">Room Update</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="rewive.php">Revwive <span class="sr-only">(current)</span></a>
      </li>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="need.php">Need <span class="sr-only">(current)</span></a>
      </li>

    </ul>
 <!--   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    </form>
  </div>
</nav>



<form class="ff" action="" method="post">
<section class="fit">
 		<a href="reg.php" class="btone">Sign Up</a>
 		<a href="log.php" class="btntwo" >Login</a>
</section>
 
  <p>Email</p>
 <input type="text" name="username" class="f1">
  <p>Password</p>	
 <input type="text" name="password" class="f1">
 <input type="submit" name="submit" class="s1" value="Login">


</form>
 <?php 
 
if(isset($_POST['submit']))

{


$us = $_POST['username'];
$pa = $_POST['password'];

$sl = "SELECT * FROM reg WHERE em='$us' and  pass='$pa'";

$data = mysqli_query($conn, $sl);

$total = mysqli_num_rows($data);

if($total ==1)
{
   $_SESSION['userinfo'] = $us;
	header('Location:userinfo.php') ;

}
  else
{
  
  	echo "Login Failed";

  }
}


?>



</body>
</html>
