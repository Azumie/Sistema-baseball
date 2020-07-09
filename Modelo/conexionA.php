<?php 

class Conexion{

	private $link 		= 'mysql:host=localhost;dbname=baseball';
	private $usuario 	= 'root';
	private $pass 		= '123456';

	public function __construct(){}

	private function conectar(){
		try {
			$pdo = new PDO($this->link , $this->usuario, $this->pass);
			return $pdo;
		} catch (PDOException $e) {
			print "Error : " . $e->getMessage() ."<br>";
			die();
		}
	}

	private function desconectar($pdo, $gsent){
		$pdo = null;
		$gsent = null;
	}

	public function agregar(string $sql_incluir,array $datos){
		try {
			$pdo = $this->conectar();
			$gsent = $pdo->prepare($sql_incluir);
			$gsent->execute($datos);
			$this->desconectar($pdo, $gsent);
		} catch (PDOException $e) {
			echo "ERROR 1";
		}
	}

	public function consultar(string $sql_leer,array $datos){	
		try {
			$pdo = $this->conectar();
			$gsent = $pdo->prepare($sql_leer);
			$gsent->execute($datos);
			$datos = $gsent->fetchAll();
			$this->desconectar($pdo, $gsent);
			return $datos;
		} catch (PDOException $e) {
			echo "ERROR 2";			
		}
 	}
}