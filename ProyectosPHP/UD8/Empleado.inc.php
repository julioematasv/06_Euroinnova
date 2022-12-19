
<?php
 
	class Empleado {
		
		//Propiedades
		protected $nombre;
		protected $salario;
		protected $fechaAlta;
		protected $fechaBaja;
		protected $ventas;
		protected $comision;
		
		//Constructor
		public function __construct($nombre, $salario, $fecha) {
			$this->nombre = $nombre;
			$this->salario = $salario;
			$this->fechaAlta = $fecha;
		}
		
		//Métodos
		public function baja($fecha) {
			$this->fechaBaja = $fecha;
			$this->salario = 0;
		}
		
		public function calcularSalario() {
			return ($this->salario +
				($this->ventas * $this->comision / 100));
		}
		
		public function vender($cantidad) {
			$this->ventas = $this->ventas + $cantidad;
		}
		
	}
	