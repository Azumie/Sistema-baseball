<?php 
require_once 'conexionA.php';

class Persona extends Conexion{
	
	private $CI;
	private $Nombre;
	private $Apellido;
	private $Nacido;
	private $Sexo;
	private $Nacionalidad;
	private $idDirecion;

	function __construct(){}

	public function incluir(Persona $datos){
		$sql_incluir = 'INSERT INTO personas (CI, Nombre, Apellido, Nacido, Sexo, Nacionalidad, idDireccion) 
						VALUES (?,?,?,?,?,?,?)';
		$this->agregar($sql_incluir, array(	$datos->getCI(),
											$datos->getNombre(),
											$datos->getApellido(),
											$datos->getNacido(),
											$datos->getSexo(),
											$datos->getNacionalidad(),
											$datos->getIdDireccion()));
	}

	public function setCI			($CI)			{ $this->CI = $CI; }
	public function getCI 			()				{ return $this->CI; }

	public function setNombre		($Nombre)		{ $this->Nombre = $Nombre; }
	public function getNombre		()				{ return $this->Nombre;}

	public function setApellido		($Apellido)		{ $this->Apellido = $Apellido; }
	public function getApellido		()				{ return $this->Apellido; }

	public function setNacido		($Nacido)		{ $this->Nacido = $Nacido; }
	public function getNacido		()				{ return $this->Nacido; }

	public function setSexo			($Sexo)			{ $this->Sexo = $Sexo; }
	public function getSexo			()				{ return $this->Sexo; }

	public function setNacionalidad	($Nacionalidad)	{ $this->Nacionalidad = $Nacionalidad; }
	public function getNacionalidad	()				{ return $this->Nacionalidad; }

	public function setIdDireccion	($idDireccion)	{ $this->idDireccion = $idDireccion; }
	public function getIdDireccion	()				{ return $this->idDireccion; }
}
