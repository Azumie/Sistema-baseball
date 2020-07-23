<?php 

require_once 'Modelo/Temporada.php';
include_once 'Modelo/Campo.php';
require_once 'Modelo/Direccion.php';
require 'Controlador/Table.php';


class CamposControlador{
	
	private $campo;
	private $direccion;

	function __construct(){
		$this->campo 	=  new Campo();
		$this->direccion= new Direccion();
	}

	public function index(){
		$listaCampos 	= $this->campo->listar();
		if (isset($_REQUEST['id'])) {
			$campox     = $this->campo->obtenerCampo($_REQUEST['id']);
		}
		require_once 	'Vista/includes/head.php';
		require_once 	'Vista/includes/headerAdmin.php';
		require_once 	'Vista/Campos.php';
		require_once 	'Vista/includes/footer.php';
	}

	public function guardar(){

		if (isset($_REQUEST['id'])) {
			$campox     = $this->campo->obtenerCampo($_REQUEST['id']);
			$campox->idParroquia = $_REQUEST['Parroquia'];
			$campox->Direccion 	 = $_REQUEST['Direccion'];
			$campox->Campo 		 = $_REQUEST['Nombre_Campo'];
			$this->campo->actualizar($campox);
			header('location: ?c=campos');
		}else {
			$this->direccion->setDireccion($_POST['Direccion']);
			$this->direccion->setIdParroquia($_POST['Parroquia']);
			$this->direccion->incluir($this->direccion);
			// LUEGO AGREGAREMOS ESA DIRECCION A NUESTRO CAMPO CON LOS SETTERS
			$this->campo->setDireccion($this->direccion);
			// SE AGREGAN LOS DEMAS DATOS
			$this->campo->setCampo($_POST['Nombre_Campo']);
			// Y SE INSERTA EL CAMPO A LA BASE DE DATOS
			$this->campo->incluir($this->campo);
		}

		$this->index();
	}

	public function crud(){

	}


}