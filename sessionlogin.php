if (empty ($username) || empty ($password)){
			echo "<script>
					window.alert('Silahkan Membuat Account Terlebih Dahulu');
					window.location.href='register.php';
				  </script>";
		}
		else if ($row['username'] == $username && $row['password'] == $password) {
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
