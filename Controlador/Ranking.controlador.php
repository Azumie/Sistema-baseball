<?php
class RankingControlador
{
	
	function __construct(){	}

	public function index(){
		
		$conexion = new Conexion();
		$sql1 ='SELECT ep.* 
				FROM equipos_participantes ep
				INNER JOIN 	equipos e ON e.idEquipo = ep.idEquipo
				WHERE ep.idTemporada = ? AND e.idCategoria = ?';
// SELECT e.valor, p.*
// FROM estadistica e 
// INNER JOIN partidas p on p.idJuego = e.idJuego 
// INNER JOIN equipos eq on eq.idEquipo=p.idEquipo
// WHERE p.idTemporada = ? AND eq.idCategoria = ?
		$sql = 'SELECT e.* , j.idEquipo, eq.idCategoria
				from estadistica e
				inner join jugadores j on e.idJugador=j.idJugador
				inner join equipos   eq on eq.idEquipo = j.idEquipo
				inner join equipos_participantes ep on ep.idEquipo = eq.idEquipo
				where ep.idTemporada = 1 and eq.idCategoria = 1';
		$sqlAVG = 'SELECT sum(e.valor) as AVG, ep.Nombre, ep.idEquipo
					FROM estadistica e 
					inner join jugadores j on e.idJugador = j.idJugador
					inner join equipos_participantes eq on eq.idEquipo = j.idEquipo
					inner join equipos ep on ep.idEquipo = eq.idEquipo
					where (e.idItem = 2 OR e.idItem = 3) AND (eq.idTemporada = ? AND ep.idCategoria=?)
					group by ep.idEquipo;';
		$sqlCA = 'SELECT sum(e.valor) as CA, ep.Nombre
					FROM estadistica e 
					inner join jugadores j on e.idJugador = j.idJugador
					inner join equipos_participantes eq on eq.idEquipo = j.idEquipo
					inner join equipos ep on ep.idEquipo = eq.idEquipo
					where (e.idItem = 8) AND (eq.idTemporada = 1 AND ep.idCategoria=1)
					group by ep.idEquipo';
		$sqlJ = 'SELECT count(*) as J
					FROM partidas p 
					INNER JOIN equipos e on e.idEquipo = p.idEquipo
					where p.idTemporada = 1 AND e.idCategoria = 1
					group by p.idEquipo;';

		if (isset($_REQUEST['Categoria'],$_REQUEST['Temporada'])) {
			$Estadisticas = $conexion->consultar($sql, array($_REQUEST['Categoria'], $_REQUEST['Temporada']));
			$AVG = $conexion->consultar($sqlAVG, array($_REQUEST['Categoria'], $_REQUEST['Temporada']));
			$CA = $conexion->consultar($sqlCA, array($_REQUEST['Categoria'], $_REQUEST['Temporada']));
			$J = $conexion->consultar($sqlJ, array($_REQUEST['Categoria'], $_REQUEST['Temporada']));

		}else {
			$Estadisticas = $conexion->consultar($sql, array(1,1));
			$AVG = $conexion->consultar($sqlAVG, array(1,1));
			$CA = $conexion->consultar($sqlCA, array(1,1));
			$J = $conexion->consultar($sqlJ, array(1,1));
		}

		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Vista/Ranking.php';
		require_once 'Vista/includes/footer.php';
	}
}