<?php
	
	$u = $_POST['username'];
	$p = $_POST['password'];

	$x = new akun($db);
	$y = $x -> login($u,$p);

	if($y >> 0){
		session_start();
		$_SESSION['akun'] = $y;
		echo "<script>window.location='index.php'</script>";
	}else{
		echo "<script>window.location='login.php'</script>";
	}