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
<link rel='stylesheet' type='text/css' href='css/sidebar.css'>
<link rel='stylesheet' type='text/css' href='css/form.css'>
<link rel='stylesheet' type='text/css' href='css/table.css'>
<script type='text/javascript' src='ajax/ajax.js'></script>
</head>
<body>

<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><?php 
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
<hr>
<div class="sidebar">
    <h3 align ="center" color= "white";>Dashboard</h3>
	<ul>
      <li><a href="index.php">Reservation</a></li>
      <li><a href="viewdata.php">View Data</a></li>
    </ul>
  </div>
		<table>
			<tr>
					<th align = "center"> No. </th>
					<th align = "center"> Nama </th>
					<th align = "center"> Restoran </th>
					<th align = "center"> No. Meja </th>
			</tr>	
			<?php
				include ("connection.php");
				$sql = mysqli_query($conn, "select * from reservasi cross join restoran using (id_restoran);");			
				$no = 1;
				while ($data =  mysqli_fetch_array($sql)){
					echo "<tr>
								<td>".$no++."</td>
								<td>".$data["nama_cust"]."</td>
								<td>".$data["nama_restoran"]."</td>
								<td>".$data["id_meja"]."</td>
						  </tr>
					";
				}
			?>
		</table>
</body>
</html>