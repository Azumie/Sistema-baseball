<?php 
// AGREGAR EN HELPER
function getVarName($var){
	foreach ($GLOBALS as $varName => $value) {
		if ($value === $var) {
			return $varName;
		}
	}
	return;
}
require_once 'Helper/Helper.php';
require_once 'Modelo/conexionA.php';
// aplicando MVC 
// PRIMERO CREAREMOS UNA VARIABLE QUE ALMACENARA EL NOMBRE DEL CONTROLADOR QUE SE ABRIRA POR DEFECTO
$controlador = 'Ranking';

if (!isset($_REQUEST['c'])) {
	// SI CUANDO ENTREMOS AL SITIO LA URL ESTA BASIA ENTONCES 
	// CARGAREMOS EL CONTROLAD0R POR DEFETO QUE DEFINIMOS ANTES
	// EJEMPLO: localhost/baseball/ 			y ya
	require_once 'Controlador/'.$controlador.'.controlador.php';
	// NOS ASEGURAMOS QUE EL NOMBRE DEL ARCHIVO DE LA CALSE Y LA CLASE 
	// ESTEN BIEN ESCRITOS Y COMPLETAMOS LO QUE TENGAMOS QUE COMPLETAR
	$controlador = ucwords($controlador) . 'Controlador';
	// INTANCIAMOS LA CALSE ( LA CLASE SE PUEDE LLAMAR USANDO UN VARIABLE ) 
	$controlador = new $controlador;
	// EJECUTAMOS LA FUNCION INDEX QUE SE ENCARGA DE CARGAR LA VISTA QUE VAMOS A NECESITAR
	$controlador -> index();
}else {
	// EN EL CASO CONTRARIO, CUANDO SI HAYA ALGO EN LA URL 
	// EJEMPLO : localhost/baseball/?c=login
	$controlador = ucwords($_REQUEST['c']);
	// con la funcion ucwords nos asegurams de que la primera letra de un string sea mayuscula
	$metodo = '';
	// definimos el metodo que se utilizara del controlador, este tambien viene de la URL
	// EJEMPLO : localhost/baseball/?c=login&m=ingregar
	if (isset($_REQUEST['m'])) {
		$metodo = $_REQUEST['m'];
	}else {
		// si no hay metodo en la url se cargara por defecto el metodo index del controlador
		// que es el que nos traera la vista del login
		$metodo = 'index';
	}
	// Instanciamos el controlador
	require_once 'Controlador/'.$controlador.'.controlador.php';
	$controlador = ucwords($controlador) . 'Controlador';
	$controlador = new $controlador;
	// Se llama al metodo que se tenga con esta funcion 
	call_user_func(array( $controlador, $metodo ));
}