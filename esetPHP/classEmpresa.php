<?php 

class ClassEmpresa
{
	private $_nombre;
	private $_resultados;
	private $_id_empresa = 0;
	private $_empleados;
	private $_suma= 0;
	private $_cuenta=0;
	private $_promedio=0;

	public function setNombre($nombre)
	{
		$this->_nombre = $nombre;
	}

	public function getNombre()
	{
		return $this->_nombre;
	}

	public function guardarEmpresa($guardar)
	{
		$this->_nombre = $guardar;

		include("abrir_conexion.php");

		$conexion->query("INSERT INTO $tabla_db1 (nombre) 
			values ('$guardar') ");

		include("cerrar_conexion");
		echo 'se guardo la empresa: ';
	}

	public function consultar($nombre)
	{
		include("abrir_conexion.php");

		$_resultados = mysqli_query($conexion,"SELECT * 
											  FROM $tabla_db1 WHERE nombre='$nombre'");
											  while($consulta = mysqli_fetch_array($_resultados))
		{
			$_id_empresa = $consulta['id'];
		}

		if ($_id_empresa ==! 0) {
echo "
<table class=\"table\" border=\"1\">
                <tr>
                  <td><b><center>Nombre</center></b></td>
                  <td><b><center>Apellido</center></b></td>
                  <td><b><center>edad</center></b></td>
                  <td><b><center>Puesto</center></b></td>
                </tr>
";			
			
			$_empleados = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE '$_id_empresa' = id_empresa"); 
				while($lista = mysqli_fetch_array($_empleados))
				{
					$_suma = $_suma + $lista['edad'];
					$_cuenta = $_cuenta + 1 ;
					echo "<tr>
		                  <td>".$lista['nombre']."</td>
		                  <td>".$lista['apellido']."</td>
		                  <td>".$lista['edad']."</td>
		                  <td>".$lista['puesto']."</td>
		                </tr>";

				}
				echo "</table>";

			$_promedio = $_suma / $_cuenta;
			echo 'En la empresa '. $nombre . ' el promedio de edad de la empresa es de '.$_promedio;
		} 

		else

		{
			echo 'no la encontre la empresa';
		}

		include("cerrar_conexion");
	}

}
?>