<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php include("includes/header.php") ?>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
	$User = $_POST['username'];
	$Password = $_POST['password'];
	if(mysql_num_rows(ChkAdmin($User,$Password)) == 1)
		redirect_to("admin.php");
	else	
		redirect_to("index.php?error=1");	
}
else
	redirect_to("index.php?error=1");
?>