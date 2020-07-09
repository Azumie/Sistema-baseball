<?php 
require_once '../Modelo/conexionA.php';
/**
 * 
 */
class Temporada extends Conexion
{
	private $idTemporada;
	private $Estado;
	private $AnioInicio;

	function __construct(){}

	public function incluir(Temporada $datos){
		$sql_incluir = 'INSERT INTO temporadas (AnioInicio) VALUES (?)';
		$this->agregar($sql_incluir, array(	$datos->getAnioInicio() ));
	}

	public function setIdTemporada	($idTemporada)	{ $this->idTemporada = $idTemporada; }
	public function getIdTemporada 	()				{ return $this->idTemporada; }

	public function setEstado		($Estado)		{ $this->Estado = $Estado; }
	public function getEstado 		()				{ return $this->Estado; }

	public function setAnioInicio	($AnioInicio)	{ $this->AnioInicio = $AnioInicio; }
	public function getAnioInicio 	()				{ return $this->AnioInicio; }

}


