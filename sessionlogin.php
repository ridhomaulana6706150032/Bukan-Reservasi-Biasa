<?php 
	include ('connection.php');
		$usern = $_POST['usern'];
		$password = md5 ($_POST['password']);
		$select = "select * from register WHERE username = '$usern' AND password = '$password'";
		$querry = mysqli_query ($conn, $select);
		$row = mysqli_fetch_array($querry);
		
		if (empty ($usern) || empty ($password)){
			echo "<script>
					window.alert('Silahkan Membuat Account Terlebih Dahulu');
					window.location.href='register.php';
				  </script>";
		}
		else if ($row['username'] == $usern && $row['password'] == $password) {
			session_start();
			$_SESSION['username'] = $usern;
			echo "<script>
					window.alert('Selamat Datang ".strtoupper($usern)."');
					window.location.href='index.php';
				  </script>";
		} else {
			echo "<script>
					window.alert('Anda Gagal Login!');
					window.location.href='login.php';
				  </script>";
		}		
?>