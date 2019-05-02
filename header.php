<?php 
session_start();
require_once("config.php");
?>





<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	  <div id="wrapper">
	  <div id="header">
	  <h1>WELCOME</h1>
	  <div class="link">
	  
       <a style=text-decoration:none; href="home.php">HOME |</a>
	   
	   <?php 
	   if(isset($_COOKIE["newUser"])){
		   echo "<a style=text-decoration:none; href='profile.php'> PROFILE |</a>";
		   }
		   
	   ?>
	   
	   <?php 
	   if(!isset($_COOKIE["newUser"])){
		   echo "<a style=text-decoration:none; href='login.php'> LOGIN |</a>"; 
	   }
	   else{
		   echo "<a style=text-decoration:none; href='logout_core.php'> LOGOUT </a>";
	   }
	   ?>
	  
	  
	  <?php 
	  if(!isset($_COOKIE["newUser"])){
		  echo "<a style=text-decoration:none; href='reg.php'> REGISTRATION</a>";
	  }
	  
	  ?>
	  
	  
	  </div>
	  </div>
	  
	  