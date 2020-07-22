<?php 
require_once 'Modelo/Temporada.php';
include_once 'Modelo/Escuela.php';
require_once 'Modelo/Anotador.php';
require_once 'Modelo/Campo.php';
require 'Controlador/Table.php';

class CategoriaControlador{
	
	private $escuela;
	private $categoria;

	function __construct(){
		$this->escuela =  new Escuela();
		$this->categoria = new Categoria();
	}

	public function index(){
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerAdmin.php';
		require_once 'Vista/Categorias.php';
		require_once 'Vista/includes/footer.php';
	}

	public function guardar(){
		if(isset($_POST['btnAgregarEscuela'])){
			$this->escuela->setEscuela($_POST['Nombre_Escuela']);
			$this->escuela->incluir($this->escuela);
		} else if (isset($_POST['btnAgregarCategoria'])){
			$this->categoria->setCampo($_POST['Nombre_Categoria']);
			$this->categoria->incluir($this->categoria);
		}
        $this->index();
	}


}