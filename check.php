<html>
<head>
<title>Welcome to J.P Morgan Attendance system.</title>
<link href = "stylesheets/design.css" media = "all" rel="stylesheet" type = "text/css" />
<STYLE type = "text/css">
#loginForm  {
    display: none;
    background: #ccc;
    height: 100px;
    width: 300px;
    margin: 25px 0 0 0;
    padding: 25px;
}
</STYLE>
</head>
<body>
<SCRIPT LANGUAGE="JAVASCRIPT">
	function showForm(){
		document.getElementById('loginForm').style.display = "block";
	}
	function hideForm(){
		document.getElementById('loginForm').style.display = "none";
	}
</SCRIPT>

<form>
	<p onmouseover="showForm();" onmouseout="hideForm();"> 
    Login Here
    <span id="loginForm">
        Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="name" /><br />
        <br />
        Password:&nbsp;&nbsp;&nbsp;<input type="password" /><br />
        <br />
        <span style="margin:0 0 0 95px;"><input type="submit" value="submit" /></span>
    </span>
	</p>
</form>
hello
<?php include("includes/footer.php") ?>