<?php 
require_once 	'Modelo/Temporada.php';
	require_once 	'Modelo/Equipo.php';
	require_once 	'Modelo/Juego.php';
	require_once 	'Modelo/Jugador.php';
	require_once 	'Modelo/Item.php';
	require 		'Controlador/Table.php';
class ListaJugadoresControlador{
	
	function __construct(){}

	public function index(){
		$conexion = new Conexion();
		$jugador = new Jugador();
		$jugador = $jugador->listar();
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Controlador/Table.php';
		require_once 'Vista/listaJugadores.php';
		require_once 'Vista/includes/footer.php';
	}
}