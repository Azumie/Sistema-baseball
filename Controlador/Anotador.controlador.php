<?php 
require_once 'Modelo/Temporada.php';
include_once 'Modelo/Persona.php';
require_once 'Modelo/Anotador.php';
require_once 'Modelo/Direccion.php';
require_once 'Modelo/Campo.php';
require 'Controlador/Table.php';

class AnotadorControlador{
	
	public $ERROR = '';
	public $ERROR1 = '';
	private $persona;
	private $anotador;
	private $direccion;

	function __construct(){
		$this->persona =  new Persona();
		$this->anotador = new Anotador();
		$this->direccion = new Direccion();
	}

	public function index(){
		$anotadores = $this->anotador->listar();
		$conexion 	= new Conexion();
		if (isset($_REQUEST['id'])) {
			$actu   = $this->anotador->obtenerAnotador($_REQUEST['id']);
		}
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerAdmin.php';
		require_once 'Vista/Anotador.php';
		require_once 'Vista/includes/footer.php';
	}

	public function guardar(){
		if (!isset($_REQUEST['id'])) {
			if(isset($_POST['Parroquia'],$_POST['Direccion'],$_POST['Cedula_Anotador'], $_POST['Nombre_Anotador'], $_POST['Apellido_Anotador'],$_POST['Inicio_Anotador'],$_POST['Sexo'], $_POST['Nacionalidad'])){
				try {
					$this->direccion->setIdParroquia ( $_POST['Parroquia'] );
					$this->direccion->setDireccion   ( $_POST['Direccion'] );
					$this->direccion->incluir        ( $this->direccion );
				} catch (PDOException $e) {
					$this->ERROR = 'La direccion ya se encuentra en la Base de datos, Sea mas Detallado';
					$this->index();
					die();
				}
				try {
					$this->persona->setCI            ( $_POST['Cedula_Anotador'] );
					$this->persona->setNombre        ( $_POST['Nombre_Anotador'] );
					$this->persona->setApellido      ( $_POST['Apellido_Anotador'] );
					$this->persona->setNacido        ( $_POST['Inicio_Anotador'] );
					$this->persona->setSexo          ( $_POST['Sexo'] );
					$this->persona->setNacionalidad  ( $_POST['Nacionalidad'] );
					$this->persona->setIdDireccion   ( $this->direccion->getId() );
					$this->persona->incluir($this->persona);
				} catch (PDOException $e) {
					$this->ERROR1 = 'Esta Cedula le pertenece a otra persona o ya existe el Anotador';
					$this->index();
					die();
				}
				try {
					$this->anotador->setCI($this->persona->getCI());
					$this->anotador->incluir($this->anotador);
				} catch (Exception $e) {
					$this->ERROR = 'Este Jugador Ya existe';
					$this->index();
					die();
				}
				$this->index();
			}
		} else {
			try {
				$actu   = $this->anotador->obtenerAnotador($_REQUEST['id']);
				$actu->Nacionalidad = $_REQUEST['Nacionalidad'];
				$actu->Nombre       = $_REQUEST['Nombre_Anotador'];
				$actu->Apellido  	= $_REQUEST['Apellido_Anotador'];
				$actu->Nacido 		= $_REQUEST['Inicio_Anotador'];
				$actu->Sexo 		= $_REQUEST['Sexo'];
				$actu->idParroquia  = $_REQUEST['Parroquia'];
				$actu->Direccion    = $_REQUEST['Direccion'];
				$this->anotador->actualizar($actu);
			} catch (PDOException $e) {
				$this->ERROR = 'Ocurrio Un error al Actualizar';
				$this->index();
				die();
			}
			header('location:?c=anotador');
		}

         
	}


}

