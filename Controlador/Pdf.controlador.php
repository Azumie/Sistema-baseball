<?php 

require_once 	'Modelo/Temporada.php';
	require_once 	'Modelo/Equipo.php';
	require_once 	'Modelo/Juego.php';
	require_once 	'Modelo/Jugador.php';
	require_once 	'Modelo/Item.php';
	require 		'Controlador/Table.php';
require 'Controlador/pdf.php';
class PdfControlador
{
	public $ERROR = "";
	private $juego;
	private $equipo;
	private $items;
	private $temporada;

	function __construct(){$this->juego 	= new Juego();
		$this->equipo 	= new Equipo();
		$this->items 	= new Item();
		$this->temporada= new Temporada();}

	public function index(){
		$conexion = new Conexion();
		$sqlPartidos = 'SELECT p.*, e.*, date(j.FechaHora) as Fecha, eq.Nombre as Con, eq.idCategoria
						FROM estadistica e
						inner join partidas p on e.idJuego = p.idJuego
						inner join equipos eq on p.idEquipo = eq.idEquipo
						inner join juegos j on j.idJuego = p.idJuego
						WHERE eq.idCategoria = 1 AND p.idTemporada = 1
						group by p.idEquipo;';
		$sql_leer = 'SELECT *
						FROM personas p INNER JOIN jugadores j ON j.CI = p.CI 
						WHERE j.idEquipo = ?';
		if (isset($_REQUEST['Temporada']) && isset($_REQUEST['Categoria'])) {
			$Partidos = $conexion->consultar($sqlPartidos, array($_REQUEST['Categoria'], $_REQUEST['Temporada']));
			$Jugador = $conexion->consultar($sql_leer, array($_REQUEST['id']));
			// $this->temporada->listarEquiposP($_REQUEST['Temporada'], $_REQUEST['Categoria']);
		}
		$pdf = new PDF();
		// Títulos de las columnas
		$header = array('País', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
		// Carga de datos
		$Datos = array();
if (isset($_REQUEST['id'])) {
	
   foreach ($Partidos as $key => $Equipo) {
   	$SumasEstadisticas = array();
     if($_REQUEST['id'] != $Equipo->idEquipo){
	      
	      array_push($SumasEstadisticas, $Equipo->Fecha);
	      array_push($SumasEstadisticas, $Equipo->Con);
	      // AL
	      array_push($SumasEstadisticas, Item(1, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // VB
	      array_push($SumasEstadisticas, Item(2, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // HC
	      array_push($SumasEstadisticas, Item(3, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // 2B
	      array_push($SumasEstadisticas, Item(4, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // 3B
	      array_push($SumasEstadisticas, Item(5, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // CA
	      array_push($SumasEstadisticas, Item(8, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // BR
	      array_push($SumasEstadisticas, Item(12, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // SF
	      array_push($SumasEstadisticas, Item(13, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // K
	      array_push($SumasEstadisticas, Item(10, $Equipo->idJuego, $Equipo->idEquipo, "b"));
	      // BA/VB*1000
	      $SLG = (Item(7, $Equipo->idJuego, $Equipo->idEquipo, "b")->Suma);
	      if ($SumasEstadisticas[0]->Suma == 0) {
	         $SLG = 0;
	      }else $SLG = ($SLG / $SumasEstadisticas[2]->Suma)*1000;
	      $AVG = ((Item(3, $Equipo->idJuego, $Equipo->idEquipo, "b")->Suma) / Item(2, $Equipo->idJuego, $Equipo->idEquipo, "b")->Suma)*1000;
	      array_push($SumasEstadisticas, $AVG);
	      array_push($SumasEstadisticas, $SLG);
	      }
	   } 

array_push($Datos, $SumasEstadisticas);
	}
		$pdf->SetFont('Arial','',10);
		$pdf->AddPage();
		$pdf->BasicTable($header,$Datos);
		$pdf->Output();
	}



}
function Item($idItem, $idJuego, $idEquipo, $idTipo){
	$Conexion = new Conexion();
	$sqlItem = 'SELECT sum(e.valor) as Suma
				FROM estadistica e
				inner join items i on i.idItem = e.idItem
				inner join partidas p on p.idJuego = e.idJuego
				where e.idItem = ? AND e.idJuego = ? AND p.idEquipo = ? AND i.tipo = ?';
	$Valores = $Conexion->obtener($sqlItem, array($idItem, $idJuego, $idEquipo, $idTipo));
	return $Valores;
}
function Jugadores($idEquipo, $idJugador,$idCategoria, $idTemporada, $idTipo, $idItem){
	$conexion = new Conexion();
	$sqlJugadores = 'SELECT j.*, sum(e.valor) as Suma
					from estadistica e 
					inner join jugadores j on j.idJugador = e.idJugador
					inner join equipos eq on eq.idEquipo = j.idEquipo
					inner join partidas p on p.idEquipo = j.idEquipo
					inner join personas per on per.CI = j.CI
					inner join items i on i.idItem = e.idItem
					where j.idEquipo = ? AND j.idJugador=?  AND eq.idCategoria = ? AND p.idTemporada = ? AND i.Tipo =? AND e.idItem =?
					';
	$Jugadores = $conexion->obtener($sqlJugadores, array($idEquipo, $idJugador,$idCategoria, $idTemporada, $idTipo, $idItem));
	return $Jugadores;
}
?>