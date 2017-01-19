<?php

	
	require 'system/config/config.php';

	require 'system/db/config.php';

	require 'system/error/config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		body{
			background: #ddd;
			margin: 0;
			padding: 0;
		}
		.form{
			width: 30%;
			height: 200px;
			margin: 200px auto;
			background: #c0c0c0;
			padding: 30px;
		}
		.form:hover{
			box-shadow: 1px 1px 1px 1px #333;
		}
		.input{
			background: #fff;
			border:1px;
			padding: 14px;
		}
		.input:hover{
			box-shadow: 1px 1px 1px 1px #333;
		}
		.btn{
			background: #ccc;
			border:1px;
			padding: 15px;
		}
		.btn:hover{
			box-shadow: 1px 1px 1px 1px #333;
		}
		.title{
			text-align: center;
			font-size: 20px;
			padding: 0;
			margin: 0;
		}
	</style>
</head>
<body>
<div class="bg">
	<div class="form">
		<form method="POST" action="index.php?action=login">
		<h1 class="title">Login Page</h1>
			<table>
				<tr>
					<td>Username </td>
					<td> : <input type="text" name="username" class="input"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td> : <input type="password" name="password" class="input"></td>
				</tr>
				<tr>
					<td>remember me</td>
					<td><input type="radio" name=""></td>
				</tr>
				<tr>
					<td></td>
					<td>. <input type="Submit" name="" class="btn" value="Login"></td>
				</tr>
			</table>
		</form>
	</div>
</div>

</body>
</html>