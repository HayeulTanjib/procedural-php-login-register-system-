<?php require_once("header.php"); ?>

<?php
if(isset($_COOKIE["newUser"]))
{
	header("location:profile.php");
}
?>




<div id="login">
<form action="login_core.php" method="POST">
<input type="email" name="usr_mail" placeholder="Enter your Email" /><br /><br />
<input type="password" name="usr_passwd" placeholder="Enter your Password" /><br /><br />
<input type="submit" name="btn" value="LogIn" /><br /><br />
</form>
</div>



<?php
if(isset($_REQUEST["wrong_info"])){
	
	echo "<b style=color:red>User Email or Password Invalid</b>";
}
?>






<?php require_once("footer.php"); ?>