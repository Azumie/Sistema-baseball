<?php 
require_once 'conexionA.php';

class Equipo extends Conexion
{
	
	private $idEquipo;
	private $Nombre;
	private $Letra_E;
	private $idCategoria;
	private $idEscuela;

	function __construct(){}

	public function incluir(Equipo $datos){
		$sql_incluir = 'INSERT INTO equipos (Nombre, Letra_E, idCategoria, idEscuela)
						VALUES (?,?,?,?)';
		$this->agregar($sql_incluir, array(	$datos->getNombre(),
											$datos->getLetra(),
											$datos->getIdCategoria(),
											$datos->getIdEscuela()   ));
	}

	public function listar(){
		$sql_leer 	= '	SELECT eq.Nombre, eq.Letra_E, c.Categoria, e.Escuela, eq.idEquipo as id
						FROM equipos eq INNER JOIN categorias c ON eq.idCategoria = c.idCategoria
						INNER JOIN escuelas e ON eq.idEscuela = e.idEscuela';
		return $this->consultar($sql_leer, array(''));

	}

	public function listarPorCategoria($idCategoria){
		$sql_leer 	= '	SELECT eq.Nombre, eq.Letra_E, c.Categoria, e.Escuela, eq.idEquipo as id
						FROM equipos eq INNER JOIN categorias c ON eq.idCategoria = c.idCategoria
						INNER JOIN escuelas e ON eq.idEscuela = e.idEscuela
						WHERE eq.idCategoria = ?';
		return $this->consultar($sql_leer, array($idCategoria));

	}

	public function obtenerEquipo($id){
		$sql_leer = 'SELECT Nombre, Letra_E, idCategoria, idEquipo, idEscuela
						FROM equipos WHERE idEquipo = ?';
		return $this->obtener($sql_leer, array($id));
	}

	public function actualizar($datos){
		$sql 	= ' UPDATE equipos SET Nombre = ?, Letra_E = ?, idCategoria = ?, idEscuela = ?
					WHERE idEquipo = ?';
		$this->agregar($sql, array(	$datos->Nombre, $datos->Letra_E, $datos->idCategoria, $datos->idEscuela,
									$datos->idEquipo  )); 
	}

	public function setIdEquipo		($idEquipo)		{ $this->idEquipo = $idEquipo; }
	public function getIdEquipo 	()				{ return $this->idEquipo; }

	public function setNombre		($Nombre)		{ $this->Nombre = $Nombre; }
	public function getNombre 		()				{ return $this->Nombre; }

	public function setLetra		($Letra)		{ $this->Letra = $Letra; }
	public function getLetra 		()				{ return $this->Letra; }

	public function setIdCategoria	($idCategoria)	{ $this->idCategoria = $idCategoria; }
	public function getIdCategoria 	()				{ return $this->idCategoria; }

	public function setIdEscuela	($IdEscuela)	{ $this->IdEscuela = $IdEscuela; }
	public function getIdEscuela 	()				{ return $this->IdEscuela; }

}

