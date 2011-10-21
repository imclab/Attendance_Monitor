<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php include("includes/mainheader.php") ?>
<form action="validate.php" method ="post">
SID<input type="text" name="sid" value="" id='sid'/>
<br>Password<input type="password" name="pass" value="" id='pass'/>
<br><input type = "submit" value="Submit"/>
</form>

<?php 
if(isset($_GET['err']))
	$errmsg = "Invalid Sid/password";
else
	$errmsg = "";
echo $errmsg;
?>
<?php
if(isset($_GET['error']))
	$errormsg = "Invalid username/password";
else
	$errormsg = "";
echo $errormsg;
?>
<?php include("includes/footer.php") ?>