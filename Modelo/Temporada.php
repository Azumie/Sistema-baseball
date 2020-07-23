<?php 
require_once 'Modelo/conexionA.php';
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
		$id = $this->obtener('SELECT MAX(idTemporada) as idTemporada FROM temporadas', array(''));
		$this->idTemporada = $id->idTemporada;
	}

	public function listar(){
		$sql = 'SELECT AnioInicio, Suspendido_Temporada, idTemporada as id FROM temporadas';
		return $this->consultar($sql, array(''));
	}

	public function agregarEquipos($idTemporada, array $equipos){
		$sql_incluir = 'INSERT INTO equipos_participantes (idTemporada, idEquipo) VALUES (?,?)';
		foreach ($equipos as $value) {
			$this->agregar($sql_incluir, array($idTemporada, $value));
		}
	}

	public function eliminar($idTemporada, $idEquipo){
		$sql = 'DELETE FROM equipos_participantes WHERE idTemporada = ? AND idEquipo = ?';
		$this->agregar($sql, array($idTemporada, $idEquipo));
	}

// consulta para ver los eqquipos agregados por categoria
	//terminar

	public function listarEquiposP($idTemporada, $idCategoria){
		$sql 		 = 'SELECT e.Nombre, e.Letra_E, es.Escuela, e.idEquipo as id
						FROM temporadas t
						INNER JOIN equipos_participantes ep ON t.idTemporada = ep.idTemporada
						INNER JOIN equipos e ON ep.idEquipo = e.idEquipo
						INNER JOIN escuelas es ON e.idEscuela = es.idEscuela
						WHERE t.idTemporada = ? AND e.idCategoria = ?';
		return $this->consultar($sql, array( $idTemporada, $idCategoria));
	}

	public function setIdTemporada	($idTemporada)	{ $this->idTemporada = $idTemporada; }
	public function getIdTemporada 	()				{ return $this->idTemporada; }

	public function setEstado		($Estado)		{ $this->Estado = $Estado; }
	public function getEstado 		()				{ return $this->Estado; }

	public function setAnioInicio	($AnioInicio)	{ $this->AnioInicio = $AnioInicio; }
	public function getAnioInicio 	()				{ return $this->AnioInicio; }

}


