<?php 

/**
 * 
 */
class Usuario extends Conexion{
	
 	public $idUsuario;
    public $Usuario;
    public $Contraseña;
    public $Pregunta;
    public $Respuesta;
    public $Activo;
    public $CI ;

	function __construct(){}

	public function incluir(){
		$sql = 'INSERT INTO usuarios (Usuario, Contraseña, Pregunta, Respuesta, CI) VALUES (?,?,?,?,?)';


	}

}

 ?>