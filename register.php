<html>
<head>
<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<center>
<h2>Let's Get Your Account</h2>
<div class="form-register">
    <form method = "post">
	<br>
	  <label for = "lname">Name	</label><br>
      <input name= "name" type="text" placeholder="Input Your Name"><br>
	  <label for = "lemail">Email	</label><br>
      <input name= "email" type="email" placeholder="Input Your Email"><br>
	  <label for = "uname">Username	</label><br>
      <input name= "uname" type="text" placeholder="Input Your Username"><br>
	  <label for = "pass">Password	</label><br>
      <input name= "pass" type="password" placeholder="Input Your password"><br><br>
	  <input type= "submit" name = "submit" value = "Create Account" class="btn btn=small btn-primary">
    </form>
  </div>
  </center>
</body>
<?php 
	include ('connection.php');
	if (isset ($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$uname = $_POST['uname'];
			$pass = md5 ($_POST['pass']);
			
			$insert = "insert into register (nama, email, username, password) values ('$name','$email','$uname','$pass')";
			$querry = mysqli_query ($conn,$insert);
			
			echo "<script>
					alert('Account Anda Sudah Terkonfirmasi');
					window.location.href='login.php';
				</script>";
						
	}			
?>
</html>