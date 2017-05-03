<!DOCTYPE html>
<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php"); 
	}
?>
<html>
<head>
<title>DASHBOARD</title>
<link rel='stylesheet' type='text/css' href='css/navbar-style.css'>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#home">View Restaurants</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Settings</a>
    <div class="dropdown-content">
    
      <a href="#">Profile</a>
      <a href="#"><?php
					session_start(); 
					session_destroy(); 
					echo "<script>
							window.alert('Terima Kasih :)');
							window.location.href='login.php';
						  </script>";
					?>Logout</a>
    </div>
  </li>
</ul>
<hr>
<h3>Dropdown Menu inside a Navigation Bar</h3>
<p>Hover over the "Dropdown" link to see the dropdown menu.</p>

</body>
</html>