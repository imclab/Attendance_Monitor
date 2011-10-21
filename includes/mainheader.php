<html>
<head>
<title>Welcome to J.P Morgan Attendance system.</title>
<link href = "stylesheets/design.css" media = "all" rel="stylesheet" type = "text/css" />
<link rel="stylesheet" href="fx.slide.css" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/mootools-1.2-core-yc.js"></script>
<!--Toggle effect (show/hide login form) -->
<script type="text/javascript" src="javascripts/mootools-1.2-more.js"></script>
<script type="text/javascript" src="javascripts/fx.slide.js"></script>
</head>
<body>
<div id="login">
		<div class="loginContent">
			<form action="chkadmin.php" method="post">
				<label for="log"><b>Username: </b></label>
				<input class="field" type="text" name="username" id="username" value="" size="23" />
				<label for="pwd"><b>Password:</b></label>
				<input class="field" type="password" name="password" id="password" size="23" />
				<input type="submit" name="submit" value="" class="button_login" />
				<input type="hidden" name="redirect_to" value=""/>
			</form>			
		</div>
		<div class="loginClose"><a href="#" id="closeLogin">Close Panel</a></div>
	</div> <!-- /login -->

    <div id="container">
		<div id="top">
		<!-- login -->
			<ul class="login">
		    	<li class="left">&nbsp;</li>
		        <li>Hello Admin!</li>
				<li>|</li>
				<li><a id="toggleLogin" href="#">Log In</a></li>
			</ul> <!-- / login -->
		</div> <!-- / top -->        
		<div id="content"></div><!-- / content -->        
	</div><!-- / container -->