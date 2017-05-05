<!DOCTYPE html>
<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php"); 
	} else {
?>
<html>
<head>
<title>DASHBOARD</title>
<link rel='stylesheet' type='text/css' href='css/navbar-style.css'>
<link rel='stylesheet' type='text/css' href='css/tes.css'>
<link rel='stylesheet' type='text/css' href='css/sidebar.css'>
<link rel='stylesheet' type='text/css' href='css/form.css'>
<link rel='stylesheet' type='text/css' href='css/navbar-logo.css'>
<script type='text/javascript' src='ajax/ajax.js'></script>
</head>
<body>

<nav>
	<ul>
		<a class = "logo" href = "index.php"> 
			<img src = "img/logoapp.png" width = "150" height = "150">
		</a>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropnya"><?php 
													  include ("connection.php"); 
													  $sql =("SELECT * FROM register");            
													  if ($_SESSION['username']){
													   $user_login = $_SESSION['username']; 
													  }
													  $sql_user = mysqli_query($conn,"SELECT nama FROM register WHERE username = '$user_login'");
													  $data_user = mysqli_fetch_array($sql_user);
													  echo ucwords($data_user['nama']);
													  ?></a>
    <div class="dropdown-content">
      <a href="#">Profile</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
</nav>

<hr>
<div class="sidebar">
    <h3 align ="center" color= "white">Dashboard</h3>
	<ul>
      <li><a href="index.php">Reservation</a></li>
      <li><a href="viewdata.php">View Data</a></li>
    </ul>
  </div>
  <div class="reservasi">
				<form method = "get" action = "insert_data.php">
						<label for = "cname"> Name Customer	</label><br>
							<input type = "text" name = "namacust" placeholder= "Input Customer Name"><br>
							<label for = "restoran"> Restaurant </label><br>
								<select name = "nrestaurant" id="restaurant" onChange="showMeja(this.value)">
								<option>-- Choose Restaurant--</option><br>
								<?php
									include 'connection.php';
									$sql = mysqli_query($conn, "SELECT * FROM restoran");
									while($data = mysqli_fetch_array($sql)){
										echo "<option value='".$data['id_restoran']."'>(".$data['id_restoran'].")".$data['nama_restoran']."</option>";
									}
								?>
</select><br>
<div id = "meja">
</div>
  		<input type = "submit" name = "reservasi" value = "Reserve" class="btn btn=small btn-primary">
	</form>		
	</div>
</body>
</html>
<?php
}
?>