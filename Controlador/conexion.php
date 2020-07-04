<?php 
$link = 'mysql:host=localhost;dbname=clase';
$usuario = 'root';
$pass = '123456';

try {
	$pdo = new PDO($link , $usuario, $pass);
	// foreach ($pdo->query('SELECT * FROM producto') as $fila) {
	// 	print_r($fila);
	// } 
} catch (PDOException $e) {
	print "Error : " . $e->getMessage() ."<br>";
	die();
}

 ?>