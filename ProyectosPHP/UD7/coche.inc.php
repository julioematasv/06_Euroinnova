<?php
	class Coche {
		
		static $numruedas = 4;
		var $color;
		var $posx;
		var $posy;
		var $velocidad;
		
		public function __construct($color, $posx, $posy){
			$this->color = $color;
			$this->posx = $posx;
			$this->posy = $posy;
			$this->velocidad = 0;
		}
		
		public function mover($x, $y){
			$this->posx = $x;
			$this->posy = $y;
		}
		
		public function acelerar(){
			$this->velocidad = $this->velocidad + 10;
			return $this->velocidad;
		}
		
		public function frenar(){
			if($this->velocidad > 10)
				$this->velocidad = $velocidad -10;
			else
				$this->velocidad = 0;
			return $this->velocidad;
		}
	
	public function getColor(){
			return $this->color;
	}
	
	public function setColor($valor){
			switch($valor){
				case "rojo":
					$this->color = "rojo";
					break;
				case "verde":
					$this->color = "verde";
					break;
				case "azul":
					$this->color = "azul";
					break;
				default:
					$this->color = "ninguno";
			}
	}
	
	public function getPosx(){
			return $this->posx;
	}
	public function setPosx($valorx){
			switch($valorx){
				case 1:
					$this->posx = 10;
					break;
				case 2:
					$this->posx = 20;
					break;
				default:
					$this->posx = 0;
			}
	}
		
		public function getPosy(){
			return $this->posy;
		}
		
		public function setPosy($valory){
			switch($valory){
				case 1:
					$this->posy = 10;
					break;
				case 2:
					$this->posy = 20;
					break;
				default:
					$this->posy = 0;
			}
		}
	
	}
	
	?>