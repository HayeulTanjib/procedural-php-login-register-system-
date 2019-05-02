<?php require_once("header.php"); ?>

<?php
if(!isset($_COOKIE["newUser"])){
	header("location:home.php");
}
?>

<div id="profile">
<h1>This is PROFILE</h1>
</div>
<h2>
<?php 
if(isset($_COOKIE["newUser"])){
	$targetUser = $_COOKIE["newUser"];
	
	$nameQuery = "SELECT * FROM my_php WHERE auth='$targetUser' ";
	
	$runNameQuery = mysqli_query($connect,$nameQuery);
	
	if($runNameQuery == true){
		
		while($getRow = mysqli_fetch_array($runNameQuery)){
			echo $getRow["fname"]." ".$getRow["lname"];
			echo "</h2>";
			?>
			
			
			<a style=text-decoration:none;float:right; href="changepass.php">CHANGE PASSWORD</a>
			<div id="img"><img src="avatar/<?php echo $getRow['avatar']; ?>" alt="" /> </div>
			
<?php }}}?>













<?php require_once("footer.php"); ?>