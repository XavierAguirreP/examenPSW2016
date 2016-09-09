<?php
   require_once ("colector.php");

   class visitaColector {
	private $modelo;

	public function __construct(){
	   $this->modelo = new colector();
	}

	public function ReadVisita(){
		try{
			$result = $this->modelo->Listar("visita");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
   }
?>
