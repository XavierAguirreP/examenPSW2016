<?php 
class conexion extends PDO {
	private $dbname = "d3rcn9tf0th43c";
	private $host = "ec2-54-163-239-218.compute-1.amazonaws.com";
	private $user = "ucbwkgsngyrwzc";
	private $pass = "Q-NmYFBn7VOzcMSAdsoUxNJqYP";
	private $port = "5432";
	private $dbh;
 	
	public function __construct() 
 	{
    	try{
			$this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
			echo 'Connected';
 
     	}catch(PDOException $e){
 
        	echo  $e->getMessage(); 
 
    	}
 
 	}

 public function close_con() 
 {
     $this->dbh = null; 
 }
 
}

?>
