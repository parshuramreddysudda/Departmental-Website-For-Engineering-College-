<!--
This website is Developed by Parshuram Reddy (parshuram.sudda@gmail.com && VishnuVardhanReddy(vishnurapuru10@gmail.com)
This can be edited for free 
For More details and decsription contact Authors
This is Useful for Engineering Colleges Respectivly 
-->
<?php

  
  session_start(); 
ini_set('display_errors', 'off');
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
//Checking is seesion is hod or not 

  if(!isset($_SESSION['username'])||$_SESSION['username']!='Hod') 
  {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: HodLogin.php');
  }
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);
?> 