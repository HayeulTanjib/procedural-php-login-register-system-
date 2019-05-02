<?php require_once("header.php"); ?>



<?php
if(!isset($_COOKIE["newUser"]))
{
	header("location:home.php");
}
?>




<div id="changepwd">
<form action="changepass_core.php" method="POST">
<input type="text" name="oldpwd" placeholder="Old Password" />
<input type="text" name="newpwd" placeholder="New Password" />
<input type="text" name="cfmpwd" placeholder="Confirm Password" />
<input type="submit" name="sbtn" value="Update Password" />
</form>
</div>



<?php
if(isset($_REQUEST["change_ok"])){
	
	echo "<b style=color:green>Password Updated</b>";
}elseif(isset($_REQUEST["change_notok"])){
	
	echo "<b style=color:red>Password Not Updated</b>";
}
?>






<?php require_once("footer.php"); ?>