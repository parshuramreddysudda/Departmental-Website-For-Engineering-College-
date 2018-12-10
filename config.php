<?php

  
  session_start(); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
//Checking is seesion is hod or not 

  if(!isset($_SESSION['username'])||$_SESSION['username']!='Hod') 
  {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: HodLogin.php');
  }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);
    
?> 