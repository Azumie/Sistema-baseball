<?php 
function conectar(){
	$link = 'mysql:host=localhost;dbname=baseball';
	$usuario = 'root';
	$pass = '123456';
	try {
		$pdo = new PDO($link , $usuario, $pass);
		return $pdo;
		// foreach ($pdo->query('SELECT * FROM producto') as $fila) {
		// 	print_r($fila);
		// } 
	} catch (PDOException $e) {
		print "Error : " . $e->getMessage() ."<br>";
		die();
	}
}


function agregar (string $sql_incluir, $valor){
	$pdo = conectar();
	$gsent = $pdo->prepare($sql_incluir);
	$gsent->execute(array($valor));
	$sql_incluir = null; $pdo = null; $gsent = null;
 }
 function consultar(string $sql_leer){	
      $pdo = conectar();
      $gsent = $pdo->prepare($sql_leer);
      $gsent->execute();
      $datos = $gsent->fetchAll();
      $sql_incluir = null; $pdo = null; $gsent = null;
      return $datos;
 }
 ?>