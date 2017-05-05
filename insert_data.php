<?php 
	include ("connection.php");
	
		$namecust = $_GET['namacust'];
		$restaurant = $_GET['nrestaurant'];
		$meja = $_GET['nmeja'];
		
		$querry = mysqli_query($conn, "insert into reservasi (nama_cust, id_restoran, id_meja) values ('$namecust', '$restaurant', '$meja')");
		
		if($querry){
			echo "
			<script>
				alert('Input Data Berhasil');
				window.location.href='index.php';
			</script>";
		}else{
			echo "
			<script>
				alert('Input Data Gagal!');
				window.location.href='index.php';
			</script>";
		}
?>