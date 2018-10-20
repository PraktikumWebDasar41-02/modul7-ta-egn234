<?php
	$db = mysqli_connect('localhost', 'root', '', 'd_modul7');

	if (!$db) {
		echo mysql_error($db);
	}
?>