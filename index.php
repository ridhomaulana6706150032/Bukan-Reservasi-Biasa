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
<link rel='stylesheet' type='text/css' href='css/tes.css'>
</head>
<body>

<ul>
  <li><a href="#home"></a></li>
  <li><a href="#"> </a></li>
  <li><a href="#"> </a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Settings</a>
    <div class="dropdown-content">
    
      <a href="#">Profile</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
<hr>
<div class="sidebar">
    <h3 align ="center" color= "white";>Dashboard</h3>
	<ul>
      <li><a href="index.php">Pemesanan Tempat</a></li>
      <li><a href="#">View Data</a></li>
      <li><a href="#">Update Data</a></li>
    </ul>
  </div>
</body>
</html>