<?php
require_once("config.php");

$fname = htmlspecialchars($_REQUEST["fname"]);
$lname = htmlspecialchars($_REQUEST["lname"]);
$user_email = htmlspecialchars($_REQUEST["user_email"]);
$user_pass = htmlspecialchars($_REQUEST["user_pass"]);

$avatar_name = $_FILES["avatar"]["name"];
$avatar_tmpName = $_FILES["avatar"]["tmp_name"];
$location = "avatar/";
$nameForImg = uniqid();

$encryptPwd = md5(sha1($user_pass));
$userAuth = md5(sha1($user_pass.$user_email));

move_uploaded_file($avatar_tmpName,$location."$nameForImg.jpg");

$insertData = "INSERT INTO my_php (fname,lname,email_addr,user_pwd,auth,avatar) VALUES 
('$fname','$lname','$user_email','$encryptPwd','$userAuth','$nameForImg.jpg')";

$runDataQuery = mysqli_query($connect,$insertData);

if($runDataQuery == true){
	
	header("location:reg.php?reg_ok");
}


















?>