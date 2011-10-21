<?php

function confirm_query($result_set){
	if(!$result_set){
		die("Database query failed".mysql_error());
	}
}
function getUser(){
	global $con;
	$query = "SELECT * from user";
	$result = mysql_query($query,$con);
	confirm_query($result);
	return $result;
}
function Validate($sid,$pass){
	global $con;
	$query = "SELECT sid,pass FROM user WHERE sid ='".$sid."'"."AND pass ='".$pass."'";
	$result = mysql_query($query,$con);
	
	confirm_query($result);
	return $result;
}
function ChkAdmin($user,$pass){
	global $con;
	$query = "SELECT username,password FROM admin WHERE username ='".$user."'"."AND password ='".$pass."'";
	$result = mysql_query($query,$con);
	
	confirm_query($result);
	return $result;
}
function redirect_to($location = NULL){
	if($location != NULL){
		header("Location: {$location}");
		exit();
	}
}
?>
