<?php 
require_once 	'Modelo/Temporada.php';
	require_once 	'Modelo/Equipo.php';
	require_once 	'Modelo/Juego.php';
	require_once 	'Modelo/Jugador.php';
	require_once 	'Modelo/Item.php';
	require 		'Controlador/Table.php';
class ListaEquiposControlador{
	
	function __construct(){}

	public function index(){
		$conexion = new Conexion();
		$sql = "SELECT j.fechaHora, e.nombre, e.idEquipo, e1.idEquipo as Visitante, e1.Nombre, c.Campo, pr.Nombre as Nombrep, j.idJuego as id
				FROM juegos j 
				INNER JOIN partidas p 	ON j.idJuego = p.idJuego AND p.Visitante = 1 
				INNER JOIN partidas p1 	ON j.idJuego = p1.idJuego AND p1.Visitante = 0 
				INNER JOIN equipos e 	ON e.idEquipo = p.idEquipo
				INNER JOIN equipos e1 	ON e1.idEquipo = p1.idEquipo
				INNER JOIN campos c 	ON c.idCampo = j.idCampo
				INNER JOIN anotadores a ON a.idAnotador = j.idAnotador
				INNER JOIN personas pr ON pr.CI = a.CI
				where e1.idCategoria = ? and p.idTemporada = ?";
				
		if (isset($_REQUEST['Categoria'],$_REQUEST['Temporada'])) {
			$partidos = $conexion->consultar($sql, array($_REQUEST['Categoria'], $_REQUEST['Temporada']));
			$Categoria = $_REQUEST['Categoria']; $Temporada = $_REQUEST['Temporada'];
		}else {
			$partidos = $conexion->consultar($sql, array(1,1));
		}
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Controlador/Table.php';
		require_once 'Vista/listaEquipos.php';
		require_once 'Vista/includes/footer.php';
	}
}