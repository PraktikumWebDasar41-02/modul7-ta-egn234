<?php
	include('conn.php');
	$del = $_GET['nim'];
	mysqli_query($db, "DELETE FROM t_jurnal7 WHERE nim = '$del';");
	header('Location: datamhs.php');
?>