<?php 
// DIRECCION, ESTADO, MUNICIPIO, PARROQUIA
class Direccion extends Conexion{	
	
	private $id;
	private $Direccion;
	private $idParroquia;

	function __construct(){}

	public function incluir(Direccion $datos){
		$sql_incluir = 'INSERT INTO direcciones (idParroquia ,Direccion) VALUES (?,?)';
		$this->agregar($sql_incluir, array(	$datos->getIdParroquia(), 
											$datos->getDireccion()));
		$id = $this->obtener('SELECT MAX(idDireccion) as id FROM direcciones', array(''));
		$this->id = $id->id;
	}

// 	GETTERS Y SETTERS DIRECCION
	
	public function setDireccion	($Direccion)	{$this->Direccion = $Direccion;}
	public function getDireccion	()				{return $this->Direccion;}

	public function getId			()				{return $this->id;}
	public function setIdParroquia	($idParroquia)	{$this->idParroquia = $idParroquia;}
	public function getIdParroquia	()				{return $this->idParroquia;}
}

/**
 * 
 */
class Estado extends Conexion{
	private $idEstado;
	private $Estado;

	// Getters y Setters ESTADO
	function __construct(){}
	public function setEstado	($Estado)	{$this->Estado = $Estado;}
	public function getEstado	()				{return $this->Estado;}

	public function getidEstado	()				{return $this->idEstado;}
}


class Municipio extends Conexion{
	private $idMunicipio;
	private $Municipio;
	private $idEstado;

	// Getters y Setters MUNICIPIO
	function __construct(){}
	public function setMunicipio	($Municipio)	{$this->Municipio = $Municipio;}
	public function getMunicipio	()				{return $this->Municipio;}

	public function getidMunicipio	()				{return $this->idMunicipio;}

	public function setidEstado	($idEstado)	{$this->idEstado = $idEstado;}
	public function getidEstado	()				{return $this->idEstado;}
}


class Parroquia extends Conexion{
	private $idMunicipio;
	private $Parroquia;
	private $idParroquia;

	// Getters y Setters PARROQUIA
	function __construct(){}
	public function setParroquia	($Parroquia)	{$this->Parroquia = $Parroquia;}
	public function getParroquia	()				{return $this->Parroquia;}
	
	public function getidParroquia	()				{return $this->idParroquia;}

	public function setidMunicipio	($idMunicipio)	{$this->idMunicipio = $idMunicipio;}
	public function getidMunicipio	()				{return $this->idMunicipio;}
}

 ?>