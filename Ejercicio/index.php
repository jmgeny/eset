<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio Téctnico</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
		<h1>Empresa</h1>
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<form action="index.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Nombre de la Empresa">

					</div>
					<button type="submit" class="btn btn-success" name="btnConsultar">Consultar</button>
					<button type="submit" class="btn btn-primary" name="btnEmpresa">Guardar</button>
				</form>			
			</div>
		</div>


<?php 

// Consultar Empresa


		if (isset($_POST['btnConsultar'])) 
		{
			include("abrir_conexion.php");
			$nombre = $_POST['nombre'];
			$sumaEdad=0;
			$cantidad=0;
			$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE nombre='$nombre'");
			while($consulta = mysqli_fetch_array($resultados))
			{
				// echo 'El id es: '.$consulta['id'].' de la empresa '. $consulta['nombre'];
				$id_mp = $consulta['id'];
				echo "
				<table class=\"table\">
				<tr>
				<td><b><center>ID</center></b></td>
				<td><b><center>Apellido</center></b></td>
				<td><b><center>Nombre</center></b></td>
				<td><b><center>Edad</center></b></td>
				<td><b><center>Puesto</center></b></td>
				<td><b><center>Lenguaje</center></b></td>

				</tr>
				";
				$empleados = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE '$id_mp' = id_empresa"); 
				while($lista = mysqli_fetch_array($empleados))

				{
					$sumaEdad = $sumaEdad + $lista['edad'];
					$cantidad = $cantidad + 1;

					echo 
					"
					<tr>
					<td>".$lista['id']."</td>
					<td>".$lista['apellido']."</td>
					<td>".$lista['nombre']."</td>
					<td>".$lista['edad']."</td>
					<td>".$lista['puesto']."</td>
					<td>".$lista['herramienta']."</td>
					</tr>";

				}
				echo "</table>
				";
				$prom = $sumaEdad / $cantidad;
				echo 'La edad promedio de los empleados es: '. $prom;

			}

			include("cerrar_conexion");
		}	
		?>

		<!-- Empleados -->
		<h1>Agregar Empleados</h1>
		<hr>
		<div class="row">
			<div class="col md-2"></div>
			<!-- Programador -->
			<div class="col md-4">
				<h3>Programador</h3>
				<form action="index.php" method="POST">
					<div class="form-group">

						<label for="empresa">Empresa</label>
						<select class="form-control" name="empresa" id="empresa">
							<?php 
							include("abrir_conexion.php");

							$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");

							while($consulta = mysqli_fetch_array($resultados))
							{
								echo '<option value="'.$consulta['id'].'">'.  $consulta['nombre']. '</option>';
							}
							echo '<br>';
							echo '<br>';

							include("cerrar_conexion");
							?>				

						</select>
						<br>

						<!-- <label for="nombre">Nombre</label> -->
						<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Nombre"> <br>

						<!-- <label for="apellido">Apellido</label> -->
						<input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp" placeholder="Apellido"> <br>

						<!-- <label for="edad">Edad</label> -->
						<input type="text" class="form-control" name="edad" id="edad" aria-describedby="emailHelp"
						placeholder="Edad"> <br>


						<label for="herramienta">Lenguaje</label>
						<select class="form-control" name="herramienta" id="herramienta">
							<option value="PHP" selected>PHP</option>
							<option value="NET">NET</option>
							<option value="Python">Python</option>
						</select>

						<hr>
						<button type="submit" class="btn btn-primary" name="programador">Guardar</button>
					</div>
				</form>
			</div>
			<!-- Diseñador -->
			<div class="col md-4">
				<h3>Diseñador</h3>
				<form action="index.php" method="POST">
					<div class="form-group">

						<label for="empresa">Empresa</label>
						<select class="form-control" name="empresa" id="empresa">
							<?php 
							include("abrir_conexion.php");

							$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");

							while($consulta = mysqli_fetch_array($resultados))
							{
								echo '<option value="'.$consulta['id'].'">'.  $consulta['nombre']. '</option>';
							}
							echo '<br>';
							echo '<br>';

							include("cerrar_conexion");
							?>				

						</select>
						<br>



						<!-- <label for="nombre">Nombre</label> -->
						<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="nombre"> <br>

						<!-- <label for="apellido">Apellido</label> -->
						<input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp" placeholder="Apellido"> <br>

						<!-- <label for="edad">Edad</label> -->
						<input type="text" class="form-control" name="edad" id="edad" aria-describedby="emailHelp"
						placeholder="Edad"> <br>

						<label for="puesto">Tipo</label>
						<select name="puesto" class="form-control" id="puesto">
							<option value="Wep" selected>Wep</option>
							<option value="Gráfico">Gráfico</option>
						</select>

						<hr>
						<button type="submit" class="btn btn-primary" name="diseno">Guardar</button>
					</div>
				</form>
			</div>	
			<div class="col md-2"></div>
		</div>

		<?php 
// Carga de los empleados
		if (isset($_POST['diseno'])) {
			include("abrir_conexion.php");
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$edad = $_POST['edad'];
			$puesto = $_POST['puesto'];
			$empresa= $_POST['empresa'];

			$conexion->query("INSERT INTO $tabla_db2 (nombre, apellido, edad, puesto, id_empresa)
				values ('$nombre', '$apellido', '$edad', '$puesto', '$empresa')");

			include("cerrar_conexion");
		}
		elseif (isset($_POST['programador'])) {
			echo 'se apreto el boton Diseño';
			include("abrir_conexion.php");
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$edad = $_POST['edad'];
			$herramienta = $_POST['herramienta'];
			$empresa= $_POST['empresa'];

			$conexion->query("INSERT INTO $tabla_db2 (nombre, apellido, edad, herramienta, id_empresa)
				values ('$nombre', '$apellido', '$edad', '$herramienta', '$empresa')");

			include("cerrar_conexion");
		}
// Carga de empresa
		if (isset($_POST['btnEmpresa']))
		{
			include("abrir_conexion.php");
			echo 'entro por empresa';
			$nombre = $_POST['nombre'];

			$conexion->query("INSERT INTO $tabla_db1 (nombre) values ('$nombre')");
			include("cerrar_conexion");	
		}
?>







		<!-- ************** -->
		<?php

		require 'objeto.php';

		// include("abrir_conexion.php");
		// 	$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");
		// 	while($consulta = mysqli_fetch_array($resultados))
		// 	{
		// 		echo '<br>';
		// 		echo $consulta['nombre'];
		// 	}
		// 	echo '<br>';
		// 	echo '<br>';

		// include("cerrar_conexion");



		// $programador = new Programador();
		// $programador->setNombre('Juan Manuel');
		// $programador->setApellido('Geny');
		// $programador->setEdad('44');

		// $programador->setLenguaje('Laravel');
		// echo 'Programador';
		// echo '<br>';
		// $programador->imprimirLenguaje();
		// echo '<br>';
		// echo 'Diseñador';
		// echo '<br>';
		// $disenador = new Disenador();
		// $disenador->setTipo('Web');

		// $disenador->imprimoTipo();
		?>

	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>