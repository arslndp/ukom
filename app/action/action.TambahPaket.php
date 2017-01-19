<?php
	$nama = $_POST['paket'];
	$desc = $_POST['desc'];
	$harga = $_POST['harga'];

	$x = new paket($db);
	$x -> tambah($nama,$desc,$harga);

	if($x == 'ok'){

		//echo "<script>window.location='index.php'</script>";

	}else{

		//echo "<script>window.location='index.php?page=data/pelanggan/tambah/'</script";

	}