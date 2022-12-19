
<?php
  
  class Ccorriente {
      
      //Propiedades:
    private $numCuenta;
    private $nifTitular;
    private $fechaAlta;
    private $saldo;
    private $interes;
		public $abono;
    
    //Constructor:
    public function __construct($Numero, $Nif, $Fecha, $Interes) {
        $this->numCuenta = $Numero;
        $this->nifTitular = $Nif;
        $this->fechaAlta = $Fecha;
        $this->saldo = 0;
        $this->interes = $Interes;
    }
		
		// Métodos get y set:
	
	  // Métodos get: Este método es solo de lectura
	  public function getNumCuenta(){
			return $this->numCuenta;
	  }
		
	  // Métodos get y set: NifTitular
	  public function getNifTitular(){
		  return $this->nifTitular;
	  }
	  public function setNifTitular($nifTitular){
		  $this->nifTitular = $nifTitular;
	  }
	
	  // Métodos get: Este método es solo de lectura
	  public function getFechaAlta(){
		  return $this->fechaAlta;
	  }
	
	  // Métodos get y set: getSaldo
	  public function getSaldo(){
		  return $this->saldo;
	  }
	  public function setSaldo(int $saldo){
		  $this->saldo = $saldo;
	  }
	
	  // Métodos get y set: getIntereses
	  public function getInteres(){
		  return $this->interes;
	  }
	  public function setInteres($interes){
		  $this->interes = $interes;
	  }
		
    //Metodos:
    public function cargar($cantidad, $fecha, $concepto){
        $this->saldo -= $cantidad;
        return $this->saldo;
    }
    
    public function abonar($cantidad, $fecha, $concepto){
	    $this->saldo += $cantidad;
	    return $this->saldo;
    }
    
  }
  
?>