<?php
require_once("config.php");


$userMail = htmlspecialchars($_REQUEST["usr_mail"]);
$userPass = htmlspecialchars($_REQUEST["usr_passwd"]);

$createAuth = md5(sha1($userPass.$userMail));

$matchQuery = "SELECT * FROM my_php WHERE auth='$createAuth'";

$runQuery = mysqli_query($connect,$matchQuery);
$chkCount = mysqli_num_rows($runQuery);

if($matchQuery == true){
	if($chkCount === 1){
		
		setcookie("newUser",$createAuth,time()+(86400*7));
		header("location:profile.php");
	}
else{
	
	header("location:login.php?wrong_info");
}

}

?>

