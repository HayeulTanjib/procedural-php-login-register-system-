<?php require_once("header.php"); ?>

<?php
if(isset($_COOKIE["newUser"]))
{
	header("location:profile.php");
}
?>


<div id="regform">
<form action="reg_core.php" method="POST" enctype="multipart/form-data">
<input type="text" name="fname" placeholder="FirstName" />
<input type="text" name="lname" placeholder="LastName" />
<input type="email" name="user_email" placeholder="Email" />
<input type="password" name="user_pass" placeholder="Password" />
<input type="file" name="avatar" />
<input type="submit" name="sub_btn" value="Registration" />
</form>
</div>






<?php
if(isset($_REQUEST["reg_ok"])){
	echo "<b style=color:green text-align:center;>Registration Successful</b>";
}

?>


















<?php require_once("footer.php"); ?>