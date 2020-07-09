<?php 
require_once 'conexionA.php';

class Escuela extends Conexion{
	
	private $id 		= '';
	private $Escuela 	= '';
	private $mensaje 	= '';

	function __construct(){}

	public function incluir(Escuela $datos){
		$sql_incluir = 	'INSERT INTO escuelas (Escuela) VALUES (?)';
		$this->agregar($sql_incluir, array($datos->getEscuela()));
	}
	public function listar(){
		$sql_leer = 'SELECT Escuela, idEscuela FROM escuelas';
      	return $this->consultar($sql_leer, array(''));
	}

	public function getEscuela	()			{return $this->Escuela;}
	public function setEscuela	($Escuela)	{$this->Escuela = $Escuela;}
	public function getId 		()			{return $this->id;}
	public function setId 		($id)		{$this->id = $id;}
}

/**
 * 		CLASE PARA LAS ATEGORIAS NO SE SI PONERLA EN UN DOCUMENTO APARTE
 */
class Categoria extends Conexion
{
	private $id 		= '';
	private $campo 	= '';
	private $mensaje 	= '';

	function __construct(){}

	public function incluir(Categoria $datos){
		$sql_incluir = 	'INSERT INTO categorias (categoria) VALUES (?)';
		$this->agregar($sql_incluir, array($datos->getcampo()));
	}
	public function listar(){
		$sql_leer = 'SELECT Categoria, idCategoria FROM categorias';
      	return $this->consultar($sql_leer, array(''));
	}

	public function getcampo	()			{return $this->campo;}
	public function setcampo	($campo)	{$this->campo = $campo;}
	public function getId 		()			{return $this->id;}
	public function setId 		($id)		{$this->id = $id;}
}