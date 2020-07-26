<?php 
require_once 'Modelo/Jugador.php';

class JugadorControlador{
	
	function __construct(){}

	public function index(){
		if(isset($_REQUEST['id'])){
			$jugador = new Jugador();
			$jugador = $jugador->obtenerJugador($_REQUEST['id']);
		}
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Controlador/Table.php';
		require_once 'Vista/Jugador.php';
		require_once 'Vista/includes/footer.php';
	}
}
