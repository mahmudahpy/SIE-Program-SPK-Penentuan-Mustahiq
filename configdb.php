<?php
	@session_start();
	$_SESSION['judul'] = 'SPK WP ZAKAT';
	$_SESSION['welcome'] = 'SISTEM PENGAMBIL KEPUTUSAN BERBASIS WEB DENGAN METODE WEIGHT PRODUCT';
	$_SESSION['by'] = 'KELOMPOK 3 SIE';
	$mysqli = new mysqli('localhost','root','','spkwpsie');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>
