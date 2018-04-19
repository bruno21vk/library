<?php
namespace Controller\dao;

use \PDO;
/**
CREATE TABLE usuario( idusuario int AUTO_INCREMENT not null primary key, 
nome text not null, 
email text not null, 
senha text not null )
*/
class Sql extends PDO{
//class Sql {	
	private $conn;
	private $host = "localhost";
	private $dbname = "libraryitego";
	private $user = "root";
	private $senha = "";

	function __construct(){
		$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}

	private function setParams($statment, $parameters = array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($statment, $key, $value);
		}
	}
	
	private function setParam($statment, $key, $value){
		$statment->bindParam($key, $value);
	}

	public function query($rawQuery, $paramms = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $paramms);
		$stmt->execute();

		return $stmt;
	}
	public function select($rawQuery, $paramms = array()){
		$res = $this->query($rawQuery, $paramms);
		return $res->fetchAll(PDO::FETCH_ASSOC);
	}



}
?>
