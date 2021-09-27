<?php
$server = "localhost"; 	  	 
$dbuser = "root";       
$dbpassword = "12345678"; 	 
$dbname = "member";

$connection = mysqli_connect($server, $dbuser, $dbpassword, $dbname);
if(!$connection){
    die("can't connect".mysqli_error());
}
?>