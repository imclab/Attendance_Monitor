<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php include("includes/header.php") ?>
<?php
if (isset($_POST['sid']) && isset($_POST['pass'])) {
	$Sid = $_POST['sid'];
	$Pass = $_POST['pass'];
	if(mysql_num_rows(Validate($Sid,$Pass)) == 1)
		redirect_to("home.php");	
	else	
		redirect_to("index.php?err=1");	
}
else
	redirect_to("index.php?err=1");
?>