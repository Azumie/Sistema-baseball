<?php 

require_once 'Modelo/Temporada.php';
include_once 'Modelo/Equipo.php';
include_once 'Modelo/Jugador.php';
require 'Controlador/Table.php';

class EquiposControlador{
	
	private $equipo;
	private $jugador;

	function __construct(){
		$this->equipo =  new Equipo();
		$this->jugador = new Jugador();
	}

	public function index(){
		$equipos   	 = $this->equipo->listar();
		if (isset($_REQUEST['id'])) {
			$equipox = $this->equipo->obtenerEquipo($_REQUEST['id']); 
		}
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerAdmin.php';
		require_once 'Vista/Equipos.php';
		require_once 'Vista/includes/footer.php';
	}

	public function guardar(){
		$jugadores;
		if (!isset($_REQUEST['id'])) {
			$this->equipo->setNombre( $_POST['nombre']);
			$this->equipo->setIdEscuela($_POST['escuela']);
			$this->equipo->setLetra($_POST['letra']);
			$this->equipo->setIdCategoria($_POST['categoria']);

			$this->equipo->incluir($this->equipo);
		}else{
			$datos = $this->equipo->obtenerEquipo($_REQUEST['id']);
			$datos->Nombre = $_REQUEST['nombre'];
			$datos->idEscuela = $_REQUEST['escuela'];
			$datos->Letra_E = $_REQUEST['letra'];
			$datos->idCategoria = $_REQUEST['categoria'];
			$this->equipo->actualizar($datos);
		}
			$this->index();
	}

	public function agregarJugador(){
		echo "aqui tamos";
		// $equipo->obtenerPorId($_GET['id']);
            if (isset($_REQUEST['Cedula']) && isset($_REQUEST['id'])){
            	require_once 'Modelo/Persona.php';
            	require_once 'Modelo/Campo.php';
				$persona = new Persona();
				$direccion = new Direccion();

				$direccion->setIdParroquia ( $_REQUEST['Parroquia'] ) ;
				$direccion->setDireccion   ( $_REQUEST['Direccion'] ) ;
				$direccion->incluir        ( $direccion ) ;

				$persona->setCI            ( $_REQUEST['Cedula'] );
				$persona->setNombre        ( $_REQUEST['Nombre'] );
				$persona->setApellido      ( $_REQUEST['Apellido'] );
				$persona->setNacido        ( $_REQUEST['Fecha_n'] );
				$persona->setSexo          ( $_REQUEST['Sexo'] );
				$persona->setNacionalidad  ( $_REQUEST['Nacionalidad'] );
				$persona->setIdDireccion   ( $direccion->getId() );
				$persona->incluir($persona) ;

				$this->jugador->setCI            ( $_REQUEST['Cedula']);
				$this->jugador->setIdEquipo      ( $_REQUEST['id']);
				$this->jugador->setAltura        ( $_REQUEST['Altura'] );
				$this->jugador->setPeso          ( $_REQUEST['Peso'] );
				$this->jugador->setBAT           ( $_REQUEST['BAT'] );
				$this->jugador->setTHR           ( $_REQUEST['THR'] );
				$this->jugador->setNumCamisa     ( $_REQUEST['Num_Camisa'] );
				$this->jugador->setLetra         ( $_REQUEST['Letra'] );
				$this->jugador->icluir($this->jugador) ;
				echo "listo";
            }
        $ruta = isset($_REQUEST['id']) ? '&id='.$_REQUEST['id'] : '';
        header('location:?c=equipos'.$ruta);
	}


}