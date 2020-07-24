<?php 
require_once 'Modelo/conexionA.php';

class Juego extends Conexion{
	
	private $idJuego;
	private $idAnotador;
	private $idCampo;
	private $Suspendido;
	private $FechaHora;

	function __construct(){}

	public function incluir(Juego $datos){
		$sql_incluir = 'INSERT INTO juegos (idAnotador, idCampo, FechaHora) VALUES (?,?,?)';
		$this->agregar($sql_incluir, array(	$datos->getIdAnotador(),
											$datos->getIdCampo(),
											$datos->getFechaHora() 	));
		$id = $this->consultar('SELECT MAX(idJuego) as id FROM juegos', array(''));
		$this->idJuego = $id[0]->id;
	}

	public function agregarEquipos($idTemporada,  $equipo, $visitante){
		$sql_incluir = 'INSERT INTO partidas (idJuego, idEquipo, idTemporada, Visitante) VALUES (?,?,?,?)';
		$this->agregar($sql_incluir, array(	$this->getIdJuego(),
											$equipo, 
											$idTemporada,
											$visitante           ));
	}

	public function listar(){
		$sql_leer ='SELECT j.fechaHora, e.nombre, e1.Nombre, c.Campo, j.idJuego as id
					FROM juegos j 
					INNER JOIN partidas p 	ON j.idJuego = p.idJuego AND p.Visitante = 1 
					INNER JOIN partidas p1 	ON j.idJuego = p1.idJuego AND p1.Visitante = 0 
					INNER JOIN equipos e 	ON e.idEquipo = p.idEquipo
					INNER JOIN equipos e1 	ON e1.idEquipo = p1.idEquipo
					INNER JOIN campos c 	ON c.idCampo = j.idCampo';
		return $this->consultar($sql_leer, array(''));
	}

	public function agregarJugadores($idJuego,  $idPosicion, array $jugadores){
		$sql = 'INSERT INTO posjugada (idJuego, idPosicion, idJugador) VALUES';
		echo $sql;
		$datos = array();
		foreach ($jugadores as $value) {
			if (!empty($value)) {
				$sql .= '(?,?,?),';
				array_push($datos, $idJuego, $idPosicion, $value);
			}
		}
		$sql = substr($sql,0,-1);
		if (stristr($sql, '?')) {
			$this->agregar($sql, $datos);
		}
				
			
	}

	public function listarJugadoresPorEquipo($idEquipo, $idJuego, $idPosicion){
		$sql = 'SELECT j.CI, p.Nombre, p.Apellido, j.idJugador as id 
				FROM posjugada pj 
				INNER JOIN jugadores j 	ON j.idJugador = pj.idJugador 
				INNER JOIN personas p 	ON p.CI = j.CI 
				INNER JOIN equipos e 	ON j.idEquipo = e.idEquipo 
				WHERE e.idEquipo = ? 	AND pj.idJuego = ?AND pj.idPosicion = ?' ;
		return $this->consultar($sql, array(	$idEquipo, $idJuego, $idPosicion 	));
	}

	public function listarJugadores($idJuego){
		$sql = 'SELECT j.CI, p.Nombre, p.Apellido, e.idEquipo, j.idJugador as id 
				FROM posjugada pj 
				INNER JOIN jugadores j 	ON j.idJugador = pj.idJugador 
				INNER JOIN personas p 	ON p.CI = j.CI 
				INNER JOIN equipos e 	ON j.idEquipo = e.idEquipo
				WHERE pj.idJuego = ?';
		return $this->consultar($sql, array( $idJuego ));
	}

	public function obtenerEquipos($idJuego){
		$sql = 'SELECT p.idEquipo as equipo1, p1.idEquipo as equipo2
				FROM juegos j 
				INNER JOIN partidas p ON j.idJuego = p.idJuego AND p.Visitante = 1 
				INNER JOIN partidas p1 ON j.idJuego = p1.idJuego AND p1.Visitante = 0 
				WHERE j.idJuego = ?';
		return $this->consultar($sql, array($idJuego));
	}

	public function obtenerJuego($idJuego){
		$sql = 'SELECT p.idEquipo as equipo1, p1.idEquipo as equipo2
				FROM juegos j 
				INNER JOIN partidas p ON j.idJuego = p.idJuego AND p.Visitante = 1 
				INNER JOIN partidas p1 ON j.idJuego = p1.idJuego AND p1.Visitante = 0 
				WHERE j.idJuego = ?';
		return $this->consultar($sql, array($idJuego));
	}

	public function setIdAnotador	($idAnotador)	{ $this->idAnotador = $idAnotador; }
	public function getIdAnotador 	()				{ return $this->idAnotador; }

	public function setIdCampo		($idCampo)		{ $this->idCampo = $idCampo; }
	public function getIdCampo 		()				{ return $this->idCampo; }

	public function setSuspendido	($Suspendido)	{ $this->Suspendido = $Suspendido; }
	public function getSuspendido 	()				{ return $this->Suspendido; }

	public function setFechaHora	($FechaHora)	{ $this->FechaHora = $FechaHora; }
	public function getFechaHora 	()				{ return $this->FechaHora; }

	public function setIdJuego		($idJuego)		{ $this->idJuego = $idJuego; }
	public function getIdJuego 		()				{ return $this->idJuego; }
}