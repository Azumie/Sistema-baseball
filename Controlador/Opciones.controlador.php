<?php 
class OpcionesControlador
{
	
	function __construct(){}
	public function index(){
		require_once "Vista/includes/head.php";
		require_once "Vista/includes/headerAdmin.php";
		require_once "Vista/Opciones.php";
		require_once "Vista/includes/footer.php";
	}

	public function guardar(){
		if (isset($_REQUEST['Admin'])) {
			
		}
	}
}

 ?>