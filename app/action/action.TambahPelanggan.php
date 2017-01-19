<?php
	
	$nama 		=	$_POST['nama'];
	$desc 		=	$_POST['desc'];
	$almt 		=	$_POST['alamat'];
	$email 		=	$_POST['email'];
	$phone		=	$_POST['phone'];

	$x = new pelanggan($db);
	$x -> tambah($nama,$desc,$almt,$email,$phone);

	if($x == 'ok'){

		echo "<script>window.location='index.php'</script>";

	}else{

		echo "<script>window.location='index.php?page=data/pelanggan/tambah/'</script";

	}