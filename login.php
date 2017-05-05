<html>
<head>
<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
		<center> <!-- testing -->
		  <h1>Welcome</h1>
			<div class="form-login">
				<form method = "post" action = "sessionlogin.php"><br>
					<label for = "uname">Username	</label><br>
					<input class="w3-input w3-border w3-round-large" name="username" type="text" placeholder="Input Your Username"><br/><br>
					<label for = "pass">Password	</label><br>
					<input class="w3-input w3-border w3-round-large" name="password" type="password" placeholder="Input Your password"><br/></br>
					<input type = "submit" name = "login" value = "Log In" class="btn btn=small btn-primary">
					<input type = "submit" formaction = "register.php" name = "register" value = "Register" class="btn btn=small btn-primary"> 
				</form>
			</div>
		</center>
</body>
</html>