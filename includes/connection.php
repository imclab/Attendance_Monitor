<?php include("constant.php");?>
<?php
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$con){
	die("Database connection failed" .mysql_error());
}
$db_select = mysql_select_db(DB_NAME,$con);
if(!$db_select){
 die("Database selection failed.".mysql_error());
}
?>