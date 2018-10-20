<?php
	include('conn.php');
	session_start();

		$cari = $_SESSION['cr'];
		$hasilcari = mysqli_query($db, "SELECT * FROM t_jurnal7 WHERE nim LIKE '%$cari%'");
		echo "HASIL PENCARIAN";

	session_unset($_SESSION['cr']);
		
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<?php
			foreach ($hasilcari as $key) {
			echo "<tr><td>".$key['nama']."</td>";
			echo "<td>".$key['nim'].'</td>';
			echo "<td>".$key['prodi'].'</td>';
			echo "<td><a href='delete.php?nim=".$key['nim']."'>HAPUS</a></td>";
			echo "<td><a href='edit.php?nim2=".$key['nim']."'>EDIT</a></td><tr>";
		}
		?>
	</table>
	<a href="datamhs.php">BACK</a>
</body>
</html>