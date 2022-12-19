
<?php
	
	class Vendedor extends Empleado {
		
		
		public function __construct($nombre, $salario, $fecha, $comision) {
			parent::__construct($nombre, $salario, $fecha);
			$this->ventas = 0;
			$this->comision = $comision;
		}
	}
	