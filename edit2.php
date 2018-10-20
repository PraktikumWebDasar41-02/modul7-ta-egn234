<?php
	include('conn.php');
	session_start();
	$edit = $_SESSION['edit'];

	$sql = mysqli_query($db, "SELECT * FROM t_jurnal7 WHERE nim = '$edit';");
	$row = mysqli_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$jk = $_POST['jk'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$motto = $_POST['motto'];
		
		if (empty($nim)) {
			$nim = $edit;
		}
		if (!empty($nama)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET nama = '$nama' WHERE nim = '$edit';");
		}
		if (!empty($tgl_lahir)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET tgl_lahir = '$tgl_lahir' WHERE nim = '$edit';");
		}
		if (!empty($jk)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET jk = '$jk' WHERE nim = '$edit';");
		}
		if (!empty($prodi)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET prodi = '$prodi' WHERE nim = '$edit';");
		}
		if (!empty($fakultas)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET fakultas = '$fakultas' WHERE nim = '$edit';");
		}
		if (!empty($asal)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET asal = '$asal' WHERE nim = '$edit';");
		}
		if (!empty($motto)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET motto = '$motto' WHERE nim = '$edit';");
		}
		if (!empty($nim)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET nim = '$nim' WHERE nama = '".$row['nama']."';");
		}
		header("Location: edit.php?nim2=".$nim);
	}
?>
