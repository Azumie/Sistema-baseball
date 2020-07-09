<?php 

class Anotador extends Conexion{
	
	private $CI;
	private $Estado;
	private $idAnotador;

	function __construct(){}

	public function incluir(Anotador $datos){
		$sql_incluir = 'INSERT INTO anotadores (CI) VALUES (?)';
		$this->agregar($sql_incluir, array(	$datos->getCI() ));
	}

	public function listar(){
		$sql_leer =   '	SELECT p.CI, p.Nombre, p.Apellido, p.Nacido, p.Sexo 
						FROM personas p
						INNER JOIN anotadores a on (a.CI = p.CI)';
        return $this->consultar($sql_leer, array(""));
	}

	public function setCI		($CI)		{ $this->CI = $CI; }
	public function getCI 		()			{ return $this->CI; }

	public function setEstado	($Estado)	{ $this->Estado = $Estado; }
	public function getEstado	()			{ return $this->Estado;}

	public function setIdAnotador	($IdAnotador)	{ $this->IdAnotador = $IdAnotador; }
	public function getIdAnotador	()				{ return $this->IdAnotador; }

}
