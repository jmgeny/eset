<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Empleado PHP</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Empleado</h1>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="adminEmpleado.php" method="POST">
					<div class="form-group">

						<label for="id_empresa"><h4>Seleccione Empresa</h4></label>
						<select class="form-control" name="id_empresa" id="id_empresa">
							<?php 
							include("abrir_conexion.php");
							$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");
							while($consulta = mysqli_fetch_array($resultados))
							{
								echo '<option value="'.$consulta['id'].'">'.  $consulta['nombre']. '</option>';
							}
							include("cerrar_conexion");
							?>				

						</select>

						<br>

						<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Nombre"> <br>

						<input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp" placeholder="Apellido"> <br>

						<input type="text" class="form-control" name="edad" id="edad" aria-describedby="emailHelp"
						placeholder="Edad"> <br>

					<br>

					<div id="id_puesto">
						<div class="custom-control custom-radio">
						  <input type="radio" id="puestoRadio1" value="Programador" name="puesto" class="custom-control-input">
						  <label class="custom-control-label" for="puestoRadio1">Programador</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="puestoRadio2" value="Disenador" name="puesto" class="custom-control-input">
						  <label class="custom-control-label" for="puestoRadio2">Diseñador</label>
						</div>
					</div>
					
					<hr>
						<!-- 
						Al seleccionar programador o diseñador me debe filtrar las opciones de abajo, segun corresponda 
					-->
					<h4>Seleccione una opcion</h4>
					<div id="diseno" style="display: none; height: 100px">
										<select name="herramienta" class="form-control" id="seldiseno">
											<option value="Web" selected>Web</option>
											<option value="Grafico">Gráfico</option>
										</select>
					</div>

					<div id="programadror" style="display: none; height: 100px">
										<select name="herramienta" class="form-control" id="selprogramador">
											<option value="PHP">PHP</option>
											<option value="NET">NET</option>
											<option value="Python">Python</option>
										</select>
					</div>

					<hr>
					<button type="submit" class="btn btn-primary" name="btndiseno">Guardar</button>
					<a class="btn btn-primary" href="index.php">Inicio</a>
					
				</div>
			</form>
		</div>
	</div>

	<?php 

	require('classDisenador.php');

	if (isset($_POST['btndiseno'])) 
	{
		$disenador = new ClassDisenador();
		$disenador->guardarDisenador();
	}
	?>		

</div>

<script>
$("#puestoRadio1").click(function(evento){

   $("#programadror").css("display", "block");
   $("#selprogramador").css("display","block");
   $("#diseno").css("display", "none");
   $("#seldiseno").css("display", "none");

});

$("#puestoRadio2").click(function(evento){

   $("#diseno").css("display", "block");
   $("#seldiseno").css("display", "block");
   $("#programador").css("display","none");
   $("#selprogramador").css("display","none");

});

</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>