<?php 
require_once 'Modelo/Temporada.php';
include_once 'Modelo/Persona.php';
require_once 'Modelo/Anotador.php';
require_once 'Modelo/Campo.php';
require 'Controlador/Table.php';

class AnotadorControlador{
	
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
			$this->direccion->setIdParroquia ( $_POST['Parroquia'] );
			$this->direccion->setDireccion   ( $_POST['Direccion'] );
			$this->direccion->incluir        ( $this->direccion );


			$this->persona->setCI            ( $_POST['Cedula_Anotador'] );
			$this->persona->setNombre        ( $_POST['Nombre_Anotador'] );
			$this->persona->setApellido      ( $_POST['Apellido_Anotador'] );
			$this->persona->setNacido        ( $_POST['Inicio_Anotador'] );
			$this->persona->setSexo          ( $_POST['Sexo'] );
			$this->persona->setNacionalidad  ( $_POST['Nacionalidad'] );
			$this->persona->setIdDireccion   ( $this->direccion->getId() );
			$this->persona->incluir($this->persona);

			$this->anotador->setCI($this->persona->getCI());
			$this->anotador->incluir($this->anotador);
			$this->index();
		} else {
			$actu   = $this->anotador->obtenerAnotador($_REQUEST['id']);
			$actu->Nacionalidad = $_REQUEST['Nacionalidad'];
			$actu->Nombre       = $_REQUEST['Nombre_Anotador'];
			$actu->Apellido  	= $_REQUEST['Apellido_Anotador'];
			$actu->Nacido 		= $_REQUEST['Inicio_Anotador'];
			$actu->Sexo 		= $_REQUEST['Sexo'];
			$actu->idParroquia  = $_REQUEST['Parroquia'];
			$actu->Direccion    = $_REQUEST['Direccion'];
			$this->anotador->actualizar($actu);
			header('location:?c=anotador');
		}

         
	}


}

