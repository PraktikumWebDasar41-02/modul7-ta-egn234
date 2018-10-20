<?php
	include('conn.php');
	$result = mysqli_query($db, 'SELECT * FROM t_jurnal7 ORDER BY nim ASC');
	$row = mysqli_fetch_assoc($result);

	if (isset($_POST['cari'])) {
		session_start();
		$_SESSION['cr'] = $_POST['cari2'];
		header('Location: cari.php');	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>DATA MAHASISWA</h1>
	<a href="input.php">INPUT MAHASISWA</a><br><br>
	<form method="POST" action="datamhs.php">
	<table border="1">
		<tr align="center">
			<td>Nama</td>
			<td>NIM</td>
			<td>Program Studi</td>
			<td colspan="2">Aksi</td>
		</tr>
		<?php
			foreach ($result as $key) {
				echo "<tr><td>".$key['nama']."</td>";
				echo "<td>".$key['nim'].'</td>';
				echo "<td>".$key['prodi'].'</td>';
				echo "<td><a href='delete.php?nim=".$key['nim']."'>HAPUS</a></td>";
				echo "<td><a href='edit.php?nim2=".$key['nim']."'>EDIT</a></td><tr>";
			}
		?>
	</table>
	<br>
	<input type="text" name="cari2" placeholder="NIM"><button type="submit" name="cari">CARI NIM</button>
	</form>
</body>
</html>