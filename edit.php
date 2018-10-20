<?php
	include('conn.php');
	
	$edit = $_GET['nim2'];
	session_start();
	$_SESSION['edit'] = $edit;
	
	$hasil = mysqli_query($db, "SELECT * FROM t_jurnal7 WHERE nim = '$edit';");
	// $row = mysqli_fetch_array($hasil);

	echo "<h2>DETIL DATA</h2>";
	foreach ($hasil as $key) {
		echo "Nama: ".$key['nama']."<br>";
		echo "Nim: ".$key['nim']."<br>";
		echo "Tanggal Lahir: ".$key['tgl_lahir']."<br>";
		echo "Jenis Kelamin: ".$key['jk']."<br>";
		echo "Program Studi: ".$key['prodi']."<br>";
		echo "Fakultas: ".$key['fakultas']."<br>";
		echo "Asal: ".$key['asal']."<br>";
		echo "Motto Hidup: ".$key['motto']."<br>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>EDIT DATA</h2>
	<form action="edit2.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="Date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<select name="jk">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					<select name="prodi">
						<option value="D3MI">D3MI</option>
						<option value="D3TK">D3TK</option>
						<option value="S1SK">S1SK</option>
						<option value="S1TK">S1TK</option>
						<option value="D3IF">D3IF</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<input type="radio" name="fakultas" value="Fakultas Ilmu Terapan" checked>Fakultas Ilmu Terapan<br>
					<input type="radio" name="fakultas" value="Fakultas Informatika">Fakultas Informatika<br>
					<input type="radio" name="fakultas" value="Fakultas Teknik Elektro">Fakultas Teknik Elektro<br>
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td>:</td>
				<td><textarea name="motto"></textarea></td>
			</tr>
			<tr>
				<td><button type="submit" name="ubah">SELESAI UBAH</button></td>
			</tr>
		</table>
	</form>
	<a href="datamhs.php">BACK</a>
</body>
</html>