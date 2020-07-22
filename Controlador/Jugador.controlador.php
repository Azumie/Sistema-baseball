<?php 

class JugadorControlador{
	
	function __construct(){}

	public function index(){
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Controlador/Table.php';
		require_once 'Vista/Jugador.php';
		require_once 'Vista/includes/footer.php';
	}
}
