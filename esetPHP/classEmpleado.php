<?php 	

class ClassEmpleado
{
	public $_nombre;
	public $_apellido;
	public $_edad;
	
	public function setNombre($nombre)
	{
		$this->_nombre = $nombre;
	}
	public function getNombre()
	{
		return $this->_nombre;
	}
	
	public function setApellido($apellido)
	{
		$this->_apellido = $apellido;
	}
	public function getApellido()
	{
		return $this->_apellido;
	}
	
	public function setEdad($edad)
	{
		$this->_edad = $edad;
	}
	public function getEdad()
	{
		return $this->_edad;
	}

	public buscarempleado($apellido)
	{

	}

	public function mostrarDatos()
	{
		
		echo  'Edad: '.$this->_edad. '<br>'  .' Apellido: ' .$this->_apellido. '<br>'. 'Nombre: ' . $this->_nombre;
	}
}

?>