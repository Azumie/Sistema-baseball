<?php 


class Item extends Conexion
{
	private $idItem;
	private $Nombre;

	function __construct(){}

	public function listar(){
		$sql = 'SELECT idItem, nombre FROM items';
		return $this->consultar($sql, array(''));
	}

	public function listarPorTipo($tipo){
		$sql = 'SELECT idItem, nombre FROM items where tipo = ?';
		return $this->consultar($sql, array($tipo));
	}

	public function listarEst($idJuego, $tipo){
		$sql = 'SELECT e.idJuego, e.idPosicion, e.idItem, e.valor, e.idJugador 
		from estadistica e
		INNER JOIN items i ON e.idItem = i.idItem 
		WHERE e.idJuego = ? AND i.tipo = ?';
		return $this->consultar($sql, array($idJuego,$tipo));
	}
// TRABAJANDO EN ESTA PARA REVISAR LOS QUE TIENES ESTADISTICAS Y LOS QUE NO
	public function revisarEstadistica($idJuego, $tipo){
		$sql = 'SELECT e.*, p.* 
				from estadistica e 
				right join posjugada p on  e.idJuego = p.idjuego 
				INNER JOIN items i ON e.idItem = i.idItem
				where e.idJuego = ? AND i.tipo = ?';
		return $this->consultar($sql, array($idJuego,$tipo));
	}

	public function incluirEst($idJuego, $idPosicion, array $jugador){
		
		$sql = 'INSERT INTO estadistica (idJuego, idPosicion, idJugador, idItem, valor) VALUES';
		$datos = array();

		foreach ($jugador as $itemj) {
			$ok = false;
			foreach ($itemj as $value) {
				if (!empty($value)) {
					$ok = true;
				}
			}
			if ($ok == true) {
				foreach ($itemj as $value) {
					$sql .= '(?,?,?,?,?),';
					if (!empty($value) && is_int((int)$value)) {
						array_push($datos, $idJuego, $idPosicion, key($jugador), key($itemj), $value);
					} else {
						array_push($datos, $idJuego, $idPosicion, key($jugador), key($itemj), 0);
					}
					next($itemj);	
				}
			}
			next($jugador);
		}
		$sql = substr($sql,0,-1);
		
		if (stristr($sql, '?')) {
			$this->agregar($sql, 	$datos);
			return '';
		}else {
			return 'Error: No suministró valores para la estadística de ningún jugador';
		}
	}

	public function incluirEstDef($idJuego, array $est, $idJugador){
		// definimos la consulta sql
		$sql = 'INSERT INTO estadistica (idJuego, idPosicion, idJugador, idItem, valor) VALUES';
		$sql2 = 'INSERT INTO posjugada (idJuego, idPosicion, idJugador) VALUES';

		$datos = array();
		$datos2= array();
		$inicio = 0;

		for ($i=0; $i < 3; $i++) { 
			$datosPos = array_slice($est, $inicio, 4);
			$pos = $datosPos[0];
			$o   = empty( $datosPos[1]) ? 0 : $datosPos[1];
			$a   = empty( $datosPos[2]) ? 0 : $datosPos[2];
			$e   = empty( $datosPos[3]) ? 0 : $datosPos[3];
			if ($pos != 0) {
				$sql .= "(?,?,?,?,?),";
				array_push($datos, $idJuego, $pos, $idJugador, 16, $o);

				$sql .= "(?,?,?,?,?),";
				array_push($datos, $idJuego, $pos, $idJugador, 17, $a);

				$sql .= "(?,?,?,?,?),";
				array_push($datos, $idJuego, $pos, $idJugador, 18, $e);

				$sql2.= "(?,?,?),";
				array_push($datos2, $idJuego, $pos, $idJugador);
			}
			$inicio += 4;
		}

		$sql = substr($sql ,0,-1);
		$sql2= substr($sql2,0,-1);
		echo $sql;
		echo '<br>';
		echo $sql2;
		echo '<br>';

		if (stristr($sql, '?')) {
			$this->agregar($sql , 	$datos );
			$this->agregar($sql2, 	$datos2);
		}else {
			return 'Error: No seleciono una posicion';
		}			
	}

	public function obtenerPos(){
		$sql = 'SELECT * FROM posiciones WHERE idPosicion != 10';
		return $this->consultar($sql ,array(''));

	}

	public function setIdItem	($idItem)	{ $this->idItem = $idItem; }
	public function getIdItem 	()				{ return $this->idItem; }

	public function setNombre	($Nombre)	{ $this->Nombre = $Nombre; }
	public function getNombre 	()				{ return $this->Nombre; }
		
}
