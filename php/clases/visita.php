<?php
   class visita {
	private $id;  
	private $descripcion;  
  
	function __construct() {  

	}  
   
	function __clone() {  
	   $this->id = ++$this->id;   
	}

	public function getId() {  
	   return $this->id;  
	}
	public function setId($id) {  
	   $this->id = $id;  
	}

	public function getDescripcion() {  
	   return $this->descripcion;  
	}
	public function setDescripcion($descripcion) {  
	   $this->descripcion = $descripcion;  
	}
   }
?>
