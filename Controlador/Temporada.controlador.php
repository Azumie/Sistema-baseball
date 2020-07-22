<?php 
require_once 'Modelo/Temporada.php';
include_once 'Modelo/Equipo.php';
require 'Controlador/Table.php';

class TemporadaControlador{
	
	private $temporada;

	function __construct(){
		$this->temporada =  new Temporada();
	}

	public function index(){
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerAdmin.php';
		require_once 'Vista/Temporada.php';
		require_once 'Vista/includes/footer.php';
	}

	public function guardar(){
		if (isset($_POST['btnAgregarTemp'])) {
			$this->temporada->setAnioInicio($_POST['Anio']);
			$this->temporada->incluir($this->temporada);
			$this->temporada->agregarEquipos($_POST['equipos']);
			$this->index();
      	}
	}


}