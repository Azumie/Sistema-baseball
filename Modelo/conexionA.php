<?php 

class Conexion{

	private $link 		= 'mysql:host=localhost;dbname=baseball;charset=utf8';
	private $usuario 	= 'root';
	private $pass 		= '123456';

	public function __construct(){}

	private function conectar(){
		try {
			$pdo = new PDO($this->link , $this->usuario, $this->pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	private function desconectar($pdo, $gsent){
		$pdo = null;
		$gsent = null;
	}

	public function agregar(string $sql_incluir,array $datos){
			$pdo = $this->conectar();
			$gsent = $pdo->prepare($sql_incluir);
			$gsent->execute($datos);
			$this->desconectar($pdo, $gsent);
	}

	public function consultar(string $sql_leer,array $datos){	
		try {
			$pdo = $this->conectar();
			$gsent = $pdo->prepare($sql_leer);
			$gsent->execute($datos);
			$datos = $gsent->fetchAll(PDO::FETCH_OBJ);
			$this->desconectar($pdo, $gsent);
			return $datos;
		} catch (PDOException $e) {
			die($e->getMessage());	
		}
 	}
 	
 	public function obtener(string $sql_leer,array $datos){	
		try {
			$pdo = $this->conectar();
			$gsent = $pdo->prepare($sql_leer);
			$gsent->execute($datos);
			$datos = $gsent->fetch(PDO::FETCH_OBJ);
			$this->desconectar($pdo, $gsent);
			return $datos;
		} catch (PDOException $e) {
			die($e->getMessage());	
		}
 	}
}