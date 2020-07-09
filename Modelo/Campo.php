<?php 
require_once 'conexionA.php';
class Campo extends Conexion{
	
	private $Direccion ;
	private $Campo;
	private $id;

	function __construct(){}

	public function incluir (Campo $datos){
		// Recibios Por PARAMTRO UN OBJETO DE TIPO CAMPO, QUE ES DEL MISMO TIPO DE ESTA CLASE
		// DEFINIMOS LA CONSULTA QUE SE REALIZARA
		$sql_incluir = 'INSERT INTO campos (idDireccion, Campo) VALUES (?,?)';
		// Y LLAMAMOS AL METODO AGREGAR QUE HEREDAMOS DE CONEXION PARA INSETTAR A LA BD 
		$this->agregar($sql_incluir, array( $datos->getDireccion()->getId(), 
											$datos->getCampo()));
	}

	public function listar (){
		// DEFINIMOS LA CONSULTA QUE SE REALIZARA
		$sql_leer = "	SELECT c.campo, e.Estado, m.Municipio, p.Parroquia, d.Direccion 
						FROM campos c 
						INNER JOIN direcciones d ON d.idDireccion = c.idDireccion 
						INNER JOIN parroquia p ON p.idParroquia = d.idParroquia 
						INNER JOIN municipios m ON m.idMunicipio = p.idMunicipio 
						INNER JOIN estados e ON e.idEstado = m.idEstado";
		// LLAMOS AL METODO CONSUTAR QUE TAMBIEN HEREDAMOS, EL CUAL DEVUELVE TODOS LOS REGISTROS QUE ENCUENTRE		
		return $this->consultar($sql_leer, array(''));

	}
// 	GETTERS Y SETTERS

	public function setDireccion (Direccion $Direccion)	{$this->Direccion = $Direccion;}
	public function getDireccion	()				{return $this->Direccion;}

	public function getId			()				{return $this->id;}
	public function setCampo		($Campo)		{$this->Campo = $Campo;}
	public function getCampo		()				{return $this->Campo;}
}

/**
 * 
 */
class Direccion extends Conexion{	
	
	private $id;
	private $Direccion;
	private $idParroquia;

	function __construct(){}

	public function incluir(Direccion $datos){
		$sql_incluir = 'INSERT INTO direcciones (idParroquia ,Direccion) VALUES (?,?)';
		$this->agregar($sql_incluir, array(	$datos->getIdParroquia(), 
											$datos->getDireccion()));
		$id = $this->consultar('SELECT MAX(idDireccion) FROM direcciones', array(''));
		$this->id = $id[0][0];
	}

// 	GETTERS Y SETTERS
	
	public function setDireccion	($Direccion)	{$this->Direccion = $Direccion;}
	public function getDireccion	()				{return $this->Direccion;}

	public function getId			()				{return $this->id;}
	public function setIdParroquia	($idParroquia)	{$this->idParroquia = $idParroquia;}
	public function getIdParroquia	()				{return $this->idParroquia;}



}