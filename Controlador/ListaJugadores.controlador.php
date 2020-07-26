<?php 
require_once 'Modelo/Jugador.php';
class ListaJugadoresControlador{
	
	function __construct(){}

	public function index(){
		$jugador = new Jugador();
		$jugador = $jugador->listar();
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Controlador/Table.php';
		require_once 'Vista/listaJugadores.php';
		require_once 'Vista/includes/footer.php';
	}
}