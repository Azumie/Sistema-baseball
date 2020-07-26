<?php 

require_once 'Modelo/Temporada.php';
include_once 'Modelo/Campo.php';
require_once 'Modelo/Direccion.php';
require 'Controlador/Table.php';


class CamposControlador{

	public $ERROR = "";
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
		$listaCampos 	= $this->campo->listar();
		$ok = false;
		if (isset($_REQUEST['id'])) {
			$campox     = $this->campo->obtenerCampo($_REQUEST['id']);
			$campox->idParroquia = $_REQUEST['Parroquia'];
			$campox->Direccion 	 = $_REQUEST['Direccion'];
			$campox->Campo 		 = $_REQUEST['Nombre_Campo'];
			foreach ($listaCampos as $key => $campo) {
				if(	strtoupper($campo->campo)  == strtoupper( $campox->Campo )){
						$ok = true;
				}
			}
			if ($ok == false) {
				$this->campo->actualizar($campox);
				header('location: ?c=campos');
			}else{
				$this->ERROR = 'Estos datos ya le pertenecen a otro campo';
				$this->index();
			}
		}else {
			foreach ($listaCampos as $key => $campo) {
				if (strtoupper($campo->campo)  == strtoupper($_POST['Nombre_Campo'])     ){
						$ok = true;
				}
			}
			if ($ok == false) {
				try {
					$this->direccion->setDireccion($_POST['Direccion']);
					$this->direccion->setIdParroquia($_POST['Parroquia']);
					$this->direccion->incluir($this->direccion);
				} catch (PDOException $e) {
					$this->ERROR = 'Esta direccion ya existe en la base de datos';
					$this->index();
					die();					
				}
				// LUEGO AGREGAREMOS ESA DIRECCION A NUESTRO CAMPO CON LOS SETTERS
				$this->campo->setDireccion($this->direccion);
				// SE AGREGAN LOS DEMAS DATOS
				$this->campo->setCampo($_POST['Nombre_Campo']);
				// Y SE INSERTA EL CAMPO A LA BASE DE DATOS
				$this->campo->incluir($this->campo);
			}else{
				$this->ERROR = 'Este Equipo Ya existe';
			}
				$this->index();
		}
	}
				

	public function crud(){

	}


}