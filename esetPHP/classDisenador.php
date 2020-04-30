<?php 

require 'classEmpleado.php';

class ClassDisenador extends ClassEmpleado
{
	private $_tipo;

	private $_dis_nombre;
	private $_dis_apellido;
	private $_dis_edad;
	private $_dis_puesto;
	private $_dis_herramienta;
	private $_dis_empresa;

	public function setTipo($tipo)
	{
		$this->_tipo = $tipo;
	}

	public function getTipo()
	{
		return  $this->_tipo;
	}

	public function imprimoTipoDisenador()
	{
		$this->mostrarDatos();
		echo '<br>';
		echo '<br>';
		echo $this->getTipo();
	}

	public function guardarDisenador()
	{
		include("abrir_conexion.php");

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$edad = $_POST['edad'];
		$puesto = $_POST['puesto'];
		$herramienta = $_POST['herramienta'];
		$id_empresa = $_POST['id_empresa'];
	
		$conexion->query("INSERT INTO $tabla_db2 (nombre, apellido, edad, puesto , herramienta, id_empresa)
		  		values ('$nombre', '$apellido', '$edad', '$puesto', '$herramienta','$id_empresa')");


		echo 'Datos Enviados: '. $nombre . ' ' .$apellido.'  - - '.$edad.' - Puesto: '.$puesto.' '.$herramienta;

		include("cerrar_conexion");
	}

} 

?>