<?php 
require_once 'conexionA.php';

/**
 * 
 */
class Jugador extends Conexion{
	
	private $CI;
	private $idJugador;
	private $idEquipo;
	private $Altura;
	private $Peso;
	private $Activo;
	private $BAT;
	private $THR;
	private $NumCamisa;
	private $letra;

	function __construct(){}

	public function icluir(Jugador $datos){
		$sql_incluir = 'INSERT INTO jugadores (CI, idEquipo, Altura, Peso, BAT, THR, Num_Camisa, Letra) VALUES (?,?,?,?,?,?,?,?)';
		$this->agregar($sql_incluir, array(	$datos->getCI(),
											$datos->getIdEquipo(),
											$datos->getAltura(),
											$datos->getPeso(),
											$datos->getBAT(),
											$datos->getTHR(),
											$datos->getNumCamisa(),
											$datos->getLetra()			));
	}

	public function listarPorEquipo($idEquipo){
		$sql_leer = '	SELECT p.CI, p.Nombre, p.Apellido, j.Num_Camisa, j.Letra, j.idJugador as id
						FROM personas p INNER JOIN jugadores j ON j.CI = p.CI 
						WHERE j.idEquipo = ?';
		return $this->consultar($sql_leer, array($idEquipo));
	}

	









	public function setCI		($CI)			{ $this->CI = $CI; }
	public function getCI 		()				{ return $this->CI; }

	public function setIdJugador($idJugador)	{ $this->idJugador = $idJugador; }
	public function getIdJugador()				{ return $this->idJugador; }

	public function setIdEquipo	($idEquipo)		{ $this->idEquipo = $idEquipo; }
	public function getIdEquipo ()				{ return $this->idEquipo; }

	public function setAltura	($Altura)		{ $this->Altura = $Altura; }
	public function getAltura 	()				{ return $this->Altura; }

	public function setPeso		($Peso)			{ $this->Peso = $Peso; }
	public function getPeso 	()				{ return $this->Peso; }

	public function setActivo	($Activo)		{ $this->Activo = $Activo; }
	public function getActivo 	()				{ return $this->Activo; }

	public function setBAT		($BAT)			{ $this->BAT = $BAT; }
	public function getBAT 		()				{ return $this->BAT; }

	public function setTHR		($THR)			{ $this->THR = $THR; }
	public function getTHR 		()				{ return $this->THR; }

	public function setNumCamisa($NumCamisa)	{ $this->NumCamisa = $NumCamisa; }
	public function getNumCamisa()				{ return $this->NumCamisa; }

	public function setLetra	($Letra)		{ $this->Letra = $Letra; }
	public function getLetra 	()				{ return $this->Letra; }
}

