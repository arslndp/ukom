<?php

	require 'system/config/config.php';

	require 'system/action/config.php';

	require 'system/db/config.php';

	require 'system/error/config.php';

	include $template['head'];

	session_start();

	/*
	*	Logika ini penting untuk dipelajari
	*
	*****/

	if(!empty($_GET['action'])){

		include 'app/action/action.'.$_GET['action'].'.php'; 

	}else{

		if(empty($_SESSION['akun'])){

			echo "<script>window.location='login.php'</script>";

		}else{

			if(!empty($_GET['page'])){

				include 'app/module/'.$_GET['page'].'index.php';

			}else{

				include $template['home'];

			}
				
		}

	}
	
	/*
	*	Sampai Sini
	*
	***/

	include $template['foot'];