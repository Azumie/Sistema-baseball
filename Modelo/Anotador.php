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
		$sql_leer =   '	SELECT concat(p.Nacionalidad, "-", p.CI) as CI, p.Nombre, p.Apellido, p.Nacido, p.Sexo, a.CI as id		
						FROM personas p
						INNER JOIN anotadores a on (a.CI = p.CI)';
        return $this->consultar($sql_leer, array(""));
	}

	public function obtenerAnotador($id){
		$sql =  "		SELECT p.Nacionalidad, p.CI, p.Nombre, p.Apellido, p.Nacido, 
							   p.Sexo, d.idDireccion, d.Direccion, d.idParroquia						
						FROM personas p
						INNER JOIN anotadores a on (a.CI = p.CI)
						INNER JOIN direcciones d ON p.idDireccion = d.idDireccion
						WHERE a.CI = ?";
		return $this->obtener($sql, array($id));
	}

	public function actualizar($datos){
		// UPDATE anotadores SET Estado_Anotador = ?; 
		$sql = 	"		
						UPDATE personas SET Nombre = ?, Apellido = ?, Nacionalidad = ?,  Sexo = ?, Nacido = ?
						WHERE CI = ?; 
						UPDATE direcciones SET Direccion = ?, idParroquia = ? 
						WHERE idDireccion = ?";
		$this->agregar(	$sql , 	array(	$datos->Nombre,		$datos->Apellido,    $datos->Nacionalidad, 
										$datos->Sexo, 		$datos->Nacido	,    $datos->CI, 
										$datos->Direccion,  $datos->idParroquia, $datos->idDireccion 	));
	}

	public function setCI		($CI)		{ $this->CI = $CI; }
	public function getCI 		()			{ return $this->CI; }

	public function setEstado	($Estado)	{ $this->Estado = $Estado; }
	public function getEstado	()			{ return $this->Estado;}

	public function setIdAnotador	($IdAnotador)	{ $this->IdAnotador = $IdAnotador; }
	public function getIdAnotador	()				{ return $this->IdAnotador; }

}
