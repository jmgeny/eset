<?php 

require 'classEmpleado.php';

class ClassProgramador extends ClassEmpleado
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

?>