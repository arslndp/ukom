<?php
	/*
		Saya Menggunakan PDO untuk koneksi database saya
	*/


	$u_mysql = 'root';
	$p_mysql = 'toor';

	try {
		$db = new PDO('mysql:host=localhost;dbname=ukom',$u_mysql,$p_mysql);
	} catch (PDOException $e) {
		echo "<script>window.location='index.php?error='database'</script>";
	}