<?php 
require_once 'Modelo/Temporada.php';
include_once 'Modelo/Equipo.php';
require 'Controlador/Table.php';

class TemporadaControlador{
	
	private $temporada;
	private $equipo;
	function __construct(){
		$this->temporada =  new Temporada();
		$this->equipo 	 =  new Equipo();
	}

	public function index(){
		$temporadas = $this->temporada->listar();
		if (isset($_REQUEST['id'])) {
			if (isset($_REQUEST['fcategoria'])) {
				$equipos   = $this->equipo->listarPorCategoria($_REQUEST['fcategoria']);
				$equiposp  = $this->temporada->ListarEquiposP($_REQUEST['id'], $_REQUEST['fcategoria']);
			}
			else{
				$equipos = $this->equipo->listarPorCategoria(4); 
				$equiposp  = $this->temporada->ListarEquiposP($_REQUEST['id'], 4);
			}
		}
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerAdmin.php';
		require_once 'Vista/Temporada.php';
		require_once 'Vista/includes/footer.php';
	}

	public function guardar(){
		if (isset($_POST['btnAgregarTemp'])) {
			$this->temporada->setAnioInicio($_POST['Anio']);
			$this->temporada->incluir($this->temporada);
			$this->index();
      	}
	}

	public function eliminar(){
		if (isset($_REQUEST['id']) && isset($_REQUEST['ide'])) {
			$this->temporada->eliminar($_REQUEST['id'], $_REQUEST['ide']);
			$this->index();
		}
	}

	public function agregarEquipo(){
		if (isset($_REQUEST['equipos'])) {
			$this->temporada->agregarEquipos($_REQUEST['id'], $_POST['equipos']);
			$this->index();
		}
	}


}