<?php
	


	$desc = $_POST['desc'];
	$cust = $_POST['cust'];
	$date = date('Y-m-d H:i:S');
	$berat = $_POST['berat'];
	$paket = $_POST['paket'];

	$x = new baju($db);
	$x -> tambah($desc,$cust,$date,$berat,$paket);
