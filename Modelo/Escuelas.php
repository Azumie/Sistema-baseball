<?php 

class Escuela extends Conexion{
	
	private $id 		= '';
	private $nombre 	= '';
	private $mensaje 	= '';

	function __construct($id, $nombre)
	{
		$this->id = $id;
		$this->nombre = $nombre;
	}
}

