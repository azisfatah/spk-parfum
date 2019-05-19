<?php
	@session_start();
	$_SESSION['judul'] = 'SPK WP Parfum';
	$_SESSION['welcome'] = 'SISTEM PENGAMBIL KEPUTUSAN BERBASIS WEB DENGAN METODE WEIGHT PRODUCT';
	$_SESSION['by'] = 'Azis abdul fatah 2015141928';
$mysqli = new mysqli ('localhost','root','','spk');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
	}
?>