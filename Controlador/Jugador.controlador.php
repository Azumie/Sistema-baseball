<?php 
require_once 	'Modelo/Temporada.php';
require_once 	'Modelo/Equipo.php';
require_once 	'Modelo/Juego.php';
require_once 	'Modelo/Jugador.php';
require_once 	'Modelo/Item.php';
require 		'Controlador/Table.php';

class JugadorControlador{
	
	function __construct(){}

	public function index(){
		$conexion = new Conexion();
		$sql_leer = 'SELECT *
						FROM personas p INNER JOIN jugadores j ON j.CI = p.CI 
						WHERE j.idEquipo = ?';
		if (isset($_REQUEST['id'])) {
			$jugador = new Jugador();
			$jugador = $jugador->obtenerJugador($_REQUEST['id']);
			$Jugador1 = $conexion->consultar($sql_leer, array($_REQUEST['id']));
			// $this->temporada->listarEquiposP($_REQUEST['Temporada'], $_REQUEST['Categoria']);
		}else {
			echo "¡No existe ID!";
		
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Controlador/Table.php';
		require_once 'Vista/Jugador.php';
		require_once 'Vista/includes/footer.php';
	}
}
function Jugadores($idEquipo, $idJugador,$idCategoria, $idTipo, $idItem){
	$conexion = new Conexion();
	$sqlJugadores = 'SELECT j.*, sum(e.valor) as Suma
					from estadistica e 
					inner join jugadores j on j.idJugador = e.idJugador
					inner join equipos eq on eq.idEquipo = j.idEquipo
					inner join partidas p on p.idEquipo = j.idEquipo
					inner join personas per on per.CI = j.CI
					inner join items i on i.idItem = e.idItem
					where j.idEquipo = ? AND j.idJugador=?  AND eq.idCategoria = ?  AND i.Tipo =? AND e.idItem =?
					';
	$Jugadores = $conexion->obtener($sqlJugadores, array($idEquipo, $idJugador,$idCategoria, $idTipo, $idItem));
	return $Jugadores;
}
