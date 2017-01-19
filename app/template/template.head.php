<?php
	session_start();
	$r = new pelanggan($db);
	$x = $r ->count();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Laundry</title>

	<link rel="stylesheet" type="text/css" href="<?php echo $resources['css'] ?>/site.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $resources['css'] ?>/responsive.css">

</head>
<body>
<header>
	<nav>
		<div class="nav-top">
			<div class="navt-left">
				session used : <?php echo $_SESSION['akun']['username'] ?>
			</div>
			<div class="navt-right">
				<ul>
					<li>
						<a href="index.php?action=logout">Logout</a>
					</li>
					<li>
						<a href="">Profile</a>
					</li>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="">About</a>
					</li>
					<li>
						<a href="">Credits</a>
					</li>
				</ul>
			</div>
			<div style="clear:both"></div>
		</div>
		<div class="nav-bottom">
			<div class="navb-left">
				<a href="index.php" class="nolink"><h1>Sistem Infromasi</h1></a>
			</div>
			<div class="navb-right">
				<ul>
					<li><a href="index.php?page=paket/tambah/">Tambah Paket</a></li>
					<li><a href="">lihat Data</a></li>
					<li><a href="index.php?page=logs/">Logs</a></li>
				</ul>
			</div>
			<div style="clear:both"></div>
		</div>
	</nav>
	<div class="hightlight">
		<div class="box_pel">
			Count Pelanggan : <?php echo $x; ?>
		</div>
		<div class="box_pen">
			Pendapatan Hari Ini : 
		</div>
	</div>
	<div style="clear:both"></div>
</header>