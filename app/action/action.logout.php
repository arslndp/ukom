<?php
	session_start();

	$x = new akun($db);
	$x ->logout();