<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "f17";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    echo "";
} else
{
    die("Connecyion Faild because ".mysqli_connect_error());
}
?>