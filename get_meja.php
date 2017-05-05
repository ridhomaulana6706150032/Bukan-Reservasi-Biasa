<?php
	include 'connection.php';
	$kodemeja = $_GET['meja'];

	$sql = mysqli_query($conn, "SELECT * FROM meja WHERE id_restoran = '$kodemeja'");

	if(mysqli_num_rows($sql) > 0){
		echo "<select name='nmeja' id='meja)'><option>--Choose Table--</option>";
		while($data = mysqli_fetch_array($sql)){
			echo "<option value='".$data[id_meja]."'>".$data[id_meja]."</option>";
		}
		echo "</select>";
	}
	mysqli_close($conn);
?>
