<?php 
	include ('connection.php');
		$username = $_POST['username'];
		$password = md5 ($_POST['password']);
		$select = "select * from register WHERE username = '$username' AND password = '$password'";
		$querry = mysqli_query ($conn, $select);
		$row = mysqli_fetch_array($querry);
		
		if ($row['username'] == $username && $row['password'] == $password) {
			session_start();
			$_SESSION['username'] = $username;
			echo "<script>
					window.alert('Selamat Datang $username');
					window.location.href='index.php';
				  </script>";
		} else {
			echo "<script>
					window.alert('Anda Gagal Login!');
					window.location.href='login.php';
				  </script>";
		}		
?>