<?php 

require_once 'Modelo/Temporada.php';
include_once 'Modelo/Equipo.php';
include_once 'Modelo/Jugador.php';
require_once 'Modelo/Direccion.php';
require 'Controlador/Table.php';

class EquiposControlador{
	public $ERROR = '';
	public $ERROR1 = '';
	public $ERROR2 = '';
	public $ERROR3 = '';
	public $ERROR4 = '';
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
		$sql = 'SELECT eq.Nombre, eq.Letra_E, c.idCategoria, e.idEscuela
					FROM equipos eq INNER JOIN categorias c ON eq.idCategoria = c.idCategoria
					INNER JOIN escuelas e ON eq.idEscuela = e.idEscuela';
		$jugadores;
		$equipos   	 = $this->equipo->consultar($sql, array(''));
		$ok = false;
		if (!isset($_REQUEST['id'])) {
			foreach ($equipos as $key => $equipo) {
				if (strtoupper($equipo->Nombre) == strtoupper($_POST['nombre']) &&
					$equipo->Letra_E == $_POST['letra'] &&
					$equipo->idEscuela == $_POST['escuela'] &&
					$equipo->idCategoria == $_POST['categoria'] 
					) {
					$ok = true;
				}
			}
			if ($ok == false) {
				$this->equipo->setNombre( $_POST['nombre']);
				$this->equipo->setIdEscuela($_POST['escuela']);
				$this->equipo->setLetra($_POST['letra']);
				$this->equipo->setIdCategoria($_POST['categoria']);

				$this->equipo->incluir($this->equipo);
			}else $this->ERROR = 'El equipo que intenta agregar ya existe';
			
		}else{
			foreach ($equipos as $key => $equipo) {
				if (strtoupper($equipo->Nombre) == strtoupper($_POST['nombre']) &&
					$equipo->Letra_E == $_POST['letra'] &&
					$equipo->idEscuela == $_POST['escuela'] &&
					$equipo->idCategoria == $_POST['categoria'] ) {
					$ok = true;
				}
			}
			if ($ok == false) {
				$datos = $this->equipo->obtenerEquipo($_REQUEST['id']);
				$datos->Nombre = $_REQUEST['nombre'];
				$datos->idEscuela = $_REQUEST['escuela'];
				$datos->Letra_E = $_REQUEST['letra'];
				$datos->idCategoria = $_REQUEST['categoria'];
				$this->equipo->actualizar($datos);
			}else $this->ERROR = 'Estos datos ya le pertenecen a otro equipo';
		}
			$this->index();
	}
			

	public function agregarJugador(){
		// $equipo->obtenerPorId($_GET['id']);
            if (isset($_REQUEST['Cedula']) && isset($_REQUEST['id'])){
            	require_once 'Modelo/Persona.php';
            	require_once 'Modelo/Campo.php';
				$persona = new Persona();
				$direccion = new Direccion();
				try {
					$direccion->setIdParroquia ( $_REQUEST['Parroquia'] ) ;
					$direccion->setDireccion   ( $_REQUEST['Direccion'] ) ;
					$direccion->incluir        ( $direccion ) ;
				} catch (PDOException $e) {
					$this->ERROR1 = 'esta direccion ya existe';
					$this->index();
					die();
				}
				try {
					$persona->setCI            ( $_REQUEST['Cedula'] );
					$persona->setNombre        ( $_REQUEST['Nombre'] );
					$persona->setApellido      ( $_REQUEST['Apellido'] );
					$persona->setNacido        ( $_REQUEST['Fecha_n'] );
					$persona->setSexo          ( $_REQUEST['Sexo'] );
					$persona->setNacionalidad  ( $_REQUEST['Nacionalidad'] );
					$persona->setIdDireccion   ( $direccion->getId() );
					$persona->incluir($persona) ;
				} catch (PDOException $e) {
					$this->ERROR2 = 'Esta Cedula Le pretenece a otra persona';
					$this->index();
					die();	
				}
				try {
					$this->jugador->setCI            ( $_REQUEST['Cedula']);
					$this->jugador->setIdEquipo      ( $_REQUEST['id']);
					$this->jugador->setAltura        ( $_REQUEST['Altura'] );
					$this->jugador->setPeso          ( $_REQUEST['Peso'] );
					$this->jugador->setBAT           ( $_REQUEST['BAT'] );
					$this->jugador->setTHR           ( $_REQUEST['THR'] );
					$this->jugador->setNumCamisa     ( $_REQUEST['Num_Camisa'] );
					$this->jugador->setLetra         ( $_REQUEST['Letra'] );
					$this->jugador->icluir($this->jugador) ;		
				} catch (PDOException $e) {
					$this->ERROR3 = 'Este jugador ya existe';
					$this->index();
					die();	
				}

				echo "listo";
            }
        $ruta = isset($_REQUEST['id']) ? '&id='.$_REQUEST['id'] : '';
        header('location:?c=equipos'.$ruta);
	}
	public function eliminar(){
		if (isset($_REQUEST['idj'])) {
			try {
				$sqlActu = 'UPDATE jugadores SET Activo = ? WHERE idJugador = ?';
				$this->jugador->agregar($sqlActu, array(0, $_REQUEST['idj']));
			} catch (PDOException $e) {
				$this->ERROR4 = 'No se puedo eliminar al jugador';
			}
		}
		$ruta = isset($_REQUEST['id']) ? '&id='.$_REQUEST['id'] : '';
		header('location:?c=equipos'.$ruta);	
	}

}