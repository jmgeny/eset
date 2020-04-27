<?php 

require 'empleado.php';

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