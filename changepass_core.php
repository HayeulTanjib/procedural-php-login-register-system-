<?php 
require_once("config.php");

$oldpwd = $_REQUEST["oldpwd"];
$newpwd = $_REQUEST["newpwd"];
$cfmpwd = $_REQUEST["cfmpwd"];



$getCurrentUser = $_COOKIE["newUser"];



$chkDbAuth = "SELECT * FROM my_php WHERE auth='$getCurrentUser'";
$runDbAuth = mysqli_query($connect,$chkDbAuth);
if($runDbAuth == true){
	if(mysqli_num_rows($runDbAuth) === 1){
		
		while($getCurrentData = mysqli_fetch_array($runDbAuth)){
			$userEmail = $getCurrentData["email_addr"];
		}
	}
}


$genarateAuth = md5(sha1($oldpwd.$userEmail));
if($genarateAuth == $getCurrentUser && $newpwd == $cfmpwd ){
	
	$hashPwd = md5(sha1($cfmpwd));
	$newAuth =  md5(sha1($cfmpwd.$userEmail));
	
	$updatePwd = "UPDATE my_php SET user_pwd='$hashPwd',auth='$newAuth'";
	$runUpdateQuery = mysqli_query($connect,$updatePwd);
	if($runUpdateQuery == true){
	setcookie("newUser","",time()-(86400*7));
	
	setcookie("newUser",$newAuth,time()+(86400*7));
	
	header("location:changepass.php?change_ok");
	
	}
}else{
	header("location:changepass.php?change_notok");
}









?>