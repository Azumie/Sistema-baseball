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
		$sql_leer 	= '	SELECT eq.Nombre, eq.Letra_E, c.Categoria, e.Escuela
						FROM equipos eq INNER JOIN categorias c ON eq.idCategoria = c.idCategoria
						INNER JOIN escuelas e ON eq.idEscuela = e.idEscuela';
		return $this->consultar($sql_leer, array(''));

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

