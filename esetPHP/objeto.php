<?php 

require 'empleado.php';

class Programador extends Empleado
{
	 private $lenguaje;

	public function setLenguaje($lenguaje)
	{
		$this->lenguaje = $lenguaje;
	}

	public function getLenguaje()
	{
		return  $this->lenguaje;
	}

	public function imprimirLenguaje()
	{
		echo $this->getLenguaje();
		// $this->mostrarDatos();
	}

} 

class Disenador extends Empleado
{
	 private $_tipo;

	public function setTipo($tipo)
	{
		$this->_tipo = $tipo;
	}

	public function getTipo()
	{
		return  $this->_tipo;
	}

	public function imprimoTipo()
	{
		echo $this->getTipo();
		// $this->mostrarDatos();
	}

}


?>