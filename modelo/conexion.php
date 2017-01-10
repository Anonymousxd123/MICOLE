<?php

class Conexion
{
	private $host;
	private $user;
	private $pass;
	private $db;
	
	public function __construct()
	{
		$this->host="localhost";
		$this->user="root";
		$this->pass="root";
		$this->db="MiCole1";
	}

	public function conectar(){
		$con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		return $con;
	}

	public function getDb(){
		return $this->db;
	}

}

?>