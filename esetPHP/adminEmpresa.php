<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Empresa PHP</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Empresa</h1>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="adminEmpresa.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Nombre de la Empresa">

					</div>
					<button type="submit" class="btn btn-success" name="btnConsultar">Consultar</button>
					<button type="submit" class="btn btn-primary" name="btnGrabar">Guardar</button>
					<button type="submit" class="btn btn-primary" name="btnAgregar">Empleado</button>

					<a class="btn btn-primary" href="index.php">Inicio</a>
				</form>			
			</div>
		</div>

		<?php 

		require('classEmpresa.php');
		if (isset($_POST['btnAgregar'])) {

			if (trim($_POST['nombre']))
			{
				include('adminEmpleado.php');
			}
			else
			{
				echo 'Debe agregar un nombre para agregar empleado';
			}
		}

		if (isset($_POST['btnGrabar'])) 
		{
			if (trim($_POST['nombre'])) {
				$empresa = new ClassEmpresa();
				$empresa->guardarEmpresa($_POST['nombre']);
				echo $empresa->getNombre();
			} 
			else
			{
				echo 'Debe agregar un nombre para guardar';
			}
		}

		if (isset($_POST['btnConsultar'])) {
			if (trim($_POST['nombre'])) {
				$empresa = new ClassEmpresa();
				$empresa->consultar($_POST['nombre']);
			} else
			{
				echo 'Debe agregar un nombre para consultar';
			}

		}
		?>

	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>