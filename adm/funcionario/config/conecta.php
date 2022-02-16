<?php
	

	class conecta extends PDO {
		private $con;
		public function __construct() {
		  
		  $host = "localhost";
		  $port = "3306";
		  $name = "pizzaria";
		  $user = "root";
		  $pass = "";
		
		  //$dns = "pgsql:host=".$host.";port=".$port.";dbname=".$name;
		  try{
			$this->con = parent::__construct("mysql:host=$host;port=$port;dbname=$name", $user,$pass);
			//$this->con->select("SET DATESTYLE TO SQL, DMY");
		  }catch(PDOException $e){
			echo "Error = ".$e->getMessage();
		  }     
		}

	  
	  public function select($query, $params = array()) {
		$stmt = $this->query($query, $params);
		
		return $stmt->fetchAll(PDO::FETCH_CLASS);
	  }
	
		
	}


?>
