<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<title>Ecommerce</title>
</head>
<body><br>
	<div align="center">
		<h3>Vista de productos disponibles</h3>

		<a href="session2.php"><img src="imgs/carrito.png" width="50px"></a>
			<hr>
			<table class="table table-dark" style="width: 600px;">
				<thead>
					<th>ID</th>
					<th>PRODUCTO</th>
					<th>DESCRIPCION</th>
					<th>ACCIONES</th>
				</thead>
				<tbody>
					<tr style="width:600px;">
						<td style="width:100px;">1020</td>

						<td style="width:100px;">
							<img src="imgs/coca.png" width="100px" height="100px">
						</td>
						
						<td style="width:300px;">
							Coca Cola<hr>
							Descripcion:<br> $14 | aqui va una breve descripcion de los productos 
						</td>
						<td style="width:300px;">
							<form action="session1.php" method="POST">
								<input type="hidden" name="txtProducto" value="Coca Cola">
								<input type="number" name="cant" value="1" style="width:50px;"><br>
								<input type="hidden" name="Precio" value="14">
								<input type="submit" value="Agregar"name="btnAgregar">
							</form>

							
						</td>

					</tr>

					<tr style="width:600px;">
						<td style="width:100px;">1040</td>

						<td style="width:100px;">
							<img src="imgs/papas.png" width="100px" height="100px">
						</td>

						<td style="width:300px;">
							Papas Sabritas<hr>
							Descripcion:<br> $15 | aqui va una breve descripcion de los productos
						</td>
						<td style="width:300px">
							<form action="session1.php" method="POST">
								<input type="hidden" name="txtProducto" value="Papas Sabritas">
								<input type="number" name="cant" value="1" style="width:50px;"><br>
								<input type="hidden" name="Precio" value="15">
								<input type="submit" value="Agregar"name="btnAgregar">
							</form>
						</td>	
						
					</tr>
					<tr style="width:600px;">
						<td style="width:100px;">1060</td>

						<td style="width:100px;">
							<img src="imgs/Gansito.png" width="100px" height="100px">
						</td>
						
						<td style="width:300px;">
							Gansito<hr>
							Descripcion:<br> $12 | aqui va una breve descripcion de los productos 
						</td>
						<td style="width:300px;">
							<form action="session1.php" method="POST">
								<input type="hidden" name="txtProducto" value="Gansito">
								<input type="number" name="cant" value="1" style="width:50px;"><br>
								<input type="hidden" name="Precio" value="12">
								<input type="submit" value="Agregar"name="btnAgregar">
							</form>
							
						</td>
					</tr>
				</tbody>
			</table>
			<a href="session2.php"><input type="submit" value="Pagar"name="btnpagar" style="background-color:DarkSlateGray;"></a>
			<a href="login.php">Cerrar sesion</a>
			<a href=""></a>
	</div>
<?php
session_start();

if(isset($_REQUEST["btnAgregar"] )){
	$producto = $_REQUEST["txtProducto"];
	$cantidad = $_REQUEST["cant"];
	$precio   = $_REQUEST["Precio"];


	$_SESSION["carrito"][$producto]["cant"]=$cantidad;
	$_SESSION["carrito"][$producto]["precio"]=$precio;

	echo "<script>alert('Producto $producto agregado con exito al carrito de compras');</script>";
	
	}
	//echo "<script>alert('Producto $producto agregado con exito al carrito de compras');</script>";
 ?>

</body>
</html>