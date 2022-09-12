<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<style type="text/css">
		table{
			margin-top: 150px;
			border: 1px solid;
			background-color: #eee;
		}
		td{
			border: 0px;
			padding: 10px;
		}
		th{
			border-bottom: 1px solid;
			background-color: #ddd;
		}
	</style>
</head>
<body>
	<form action="login.php" method="POST">
		<table align="center">
			<tr>
				<th colspan="2"><h2 align="center">Login</h2></th>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="Usuario"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="Password" name="Contraseña"></td>
			</tr>
			<tr>
			<td align="right" colspan="2"><input  type="submit" name="login" value="login"></td>	
			</tr>
		</table>
	</form>
	<?php
	if($_REQUEST['Usuario']=="administrador" && $_REQUEST['Contraseña']=="asd"){
	header("Location:dashboard.php");
	}else{
		echo "<script>alert('usuario o contraseña incorrecta');</script>";
	}

	if($_REQUEST['Usuario']=="cliente" && $_REQUEST['Contraseña']=="123"){
		echo "<script>alert('Cliente');</script>";
	header("Location:session1.php");

	}else{
		echo "<script>alert('usuario o contraseña incorrecta');</script>";
	}


	?>

</body>
</html>

