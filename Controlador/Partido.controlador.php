<?php 

	  require_once 	'Modelo/Temporada.php';
      require_once 	'Modelo/Equipo.php';
      require_once 	'Modelo/Juego.php';
      require_once 	'Modelo/Jugador.php';
      require_once 	'Modelo/Item.php';
      require 		'Controlador/Table.php';

class PartidoControlador{
	public $ERROR = "";
	public $ERROR2 = '';
	private $juego;
	private $equipo;
	private $items;
	private $temporada;

	function __construct(){
		$this->juego 	= new Juego();
		$this->equipo 	= new Equipo();
		$this->items 	= new Item();
		$this->temporada= new Temporada();
	}

	public function index(){
	
		if (isset($_REQUEST['Temporada']) && isset($_REQUEST['Categoria'])) {
			$equipos = $this->temporada->listarEquiposP($_REQUEST['Temporada'], $_REQUEST['Categoria']);
		}else {
			// $equipos = $this->temporada->listarEquiposP(1, 1);
		}
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerAdmin.php';
		require_once 'Vista/Partido.php';
		require_once 'Vista/includes/footer.php';
	}

	public function guardarPartido(){
		$sql_leer ='SELECT date(j.fechaHora) as Fecha,time(j.fechaHora) as Hora, c.idCampo, a.idAnotador
					FROM juegos j 
					INNER JOIN partidas p 	ON j.idJuego = p.idJuego 
					INNER JOIN campos c 	ON c.idCampo = j.idCampo
					INNER JOIN anotadores a ON j.idAnotador = a.idAnotador';
		$ok = false;
		if (isset($_POST['AgregarPartido'])) {
			if ($_POST['Agregar_Equipo1'] != $_POST['Agregar_Equipo2']) {

				foreach ($this->juego->consultar($sql_leer, array('')) as $key => $value) {
					if ($value->Fecha == $_POST['Fecha_Partido'] && $value->Hora == $_POST['Hora_Partido'] &&
						$value->idAnotador == $_POST['Anotador'] && $value->idCampo == $_POST['Campo'] ) {
							$ok = true;
					}
				}
				if ($ok == false) {
					try {
						$this->juego->setIdAnotador($_POST['Anotador']);
						$this->juego->setIdCampo($_POST['Campo']);
						$this->juego->setFechaHora($_POST['Fecha_Partido'].' '.$_POST['Hora_Partido']);
						$this->juego->incluir($this->juego);
						$this->juego->agregarEquipos($_REQUEST['Temporada'], $_POST['Agregar_Equipo1'], 1);
						$this->juego->agregarEquipos($_REQUEST['Temporada'], $_POST['Agregar_Equipo2'], 0);
					} catch (PDOException $e) {
						$this->ERROR = 'Hubo un error al agregar el partido';
						$this->index();
						die();
					}
				}else {
					$this->ERROR = 'No puede haber un juego a la misma hora lugar y fecha';
				}
			} else {
				$this->ERROR = "¡Un equipo no puede enfrentarse a sí mismo!";
				$this->index();
			}
			
		}
		if (!is_null($this->juego->getIdJuego())) {
			header('location:?c=partido&id='.$this->juego->getIdJuego());
		}
	}

	public function agregarJugadores(){
		if ((isset($_REQUEST['equipo1']) or isset($_REQUEST['equipo2']))) {
			
			if (!empty($_REQUEST['equipo1'])) {
				
				$this->juego->agregarJugadores($_REQUEST['id'], 10, $_REQUEST['equipo1']);
			}
			if (!empty($_REQUEST['equipo2'])) {
				
				$this->juego->agregarJugadores($_REQUEST['id'], 10, $_REQUEST['equipo2']);
			}
			
			
		}
		// header('location:?c=partido&id='.$_REQUEST['id'].'#estadistica');
	}

	public function agregarEst(){
		
		if (isset($_REQUEST['est']) ) {
			$valores = $_REQUEST['est'];
			$this->ERROR =  $this->items->incluirEst($_REQUEST['id'], $_REQUEST['p'], $valores);
		}
		if (isset($_REQUEST['estActu'])) {
			$valores = $_REQUEST['estActu'];
			$this->items->actualizarEst($_REQUEST['id'], $_REQUEST['p'], $valores);
		}
		$this->index();
		// header('location:?c=partido&id='.$_REQUEST['id'].'#estadistica');
	}

	public function estDef(){
		$jugadores = $this->juego->listarJugadores($_REQUEST['id']);
		foreach ($jugadores as $jugador) {
			echo $jugador->id;
			if (isset($_REQUEST[$jugador->id])) {
				$this->items->incluirEstDef($_REQUEST['id'], $_REQUEST[$jugador->id], $jugador->id);
			}
		}
		$this->index();
		
	}
}

