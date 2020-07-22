<?php 


      require_once 	'Modelo/Equipo.php';
      require_once 	'Modelo/Juego.php';
      require_once 	'Modelo/Jugador.php';
      require_once 	'Modelo/Item.php';
      require 		'Controlador/Table.php';

class PartidoControlador{
	
	private $juego;
	private $equipo;
	private $items;

	function __construct(){
		$this->juego 	=  new Juego();
		$this->equipo 	= new Equipo();
		$this->items 	= new Item();
	}

	public function index(){
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerAdmin.php';
		require_once 'Vista/Partido.php';
		require_once 'Vista/includes/footer.php';
	}

	public function guardarPartido(){
		         
		if (isset($_POST['AgregarPartido'])) {
			$this->juego->setIdAnotador($_POST['Anotador']);
			$this->juego->setIdCampo($_POST['Campo']);
			$this->juego->setFechaHora($_POST['Fecha_Partido'].' '.$_POST['Hora_Partido']);
			$this->juego->incluir($this->juego);
			$this->juego->agregarEquipos($_POST['Temporada'], $_POST['Agregar_Equipo1'], 1);
			$this->juego->agregarEquipos($_POST['Temporada'], $_POST['Agregar_Equipo2'], 0);
		}
		header('location:?c=partido&id='.$this->juego->getIdJuego());
	}

	public function agregarJugadores(){
		if (isset($_REQUEST['equipo1'])) {
			$this->juego->agregarJugadores($_REQUEST['id'], 10, $_REQUEST['equipo1']);
			$this->juego->agregarJugadores($_REQUEST['id'], 10, $_REQUEST['equipo2']);
		}else {
		}
		header('location:?c=partido&id='.$_REQUEST['id'].'#estadistica');
	}

	public function agregarEst(){
		
		if (isset($_REQUEST['est'])) {
			$valores = $_REQUEST['est'];
			$this->items->incluirEst($_REQUEST['id'], $_REQUEST['p'], $valores);
		}
		header('location:?c=partido&id='.$_REQUEST['id'].'#estadistica');
	}

	public function estDef(){
		$jugadores = $this->juego->listarJugadores($_REQUEST['id']);
		foreach ($jugadores as $jugador) {
			echo $jugador->id;
			if (isset($_REQUEST[$jugador->id])) {
				$this->items->incluirEstDef($_REQUEST['id'], $_REQUEST[$jugador->id], $jugador->id);
			}
		}
		
		// header('location:?c=partido&id='.$_REQUEST['id'].'#estadistica');
	}
}

				// echo '<pre>';
				// var_dump($_REQUEST[$jugador->id]);
				// // var_dump($_REQUEST['pos']);
				// echo '</pre>';
