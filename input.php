<?php
	include('conn.php');

	if (isset($_POST['inputan'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$jk = $_POST['jk'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$motto = $_POST['motto'];
		$cek = true;

		if (empty($nim)) {
			echo "<br>NIM tidak boleh kosong";
			$cek = false;
		}

		if (strlen($nim) < 10 || strlen($nim) > 10) {
			echo "<br>NIM harus 10 digit";
			$cek = false;
		}

		if ($cek) {
			$inp = mysqli_query($db, "INSERT INTO t_jurnal7 VALUES('$nama', '$nim', '$tgl_lahir', '$jk', '$prodi', '$fakultas', '$asal', '$motto');");
			header('Location: datamhs.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="input.php" method="POST">
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
				<td><button type="submit" name="inputan">SUBMIT</button></td>
			</tr>
		</table>
	</form>
</body>
</html>