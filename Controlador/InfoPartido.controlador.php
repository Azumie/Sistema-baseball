<?php 
require_once 'Modelo/Equipo.php';
require_once 'Modelo/Item.php';
require_once 'Modelo/Juego.php';
require_once 'Modelo/Jugador.php';
class InfoPartidoControlador{
	
	public $equipo = "";

	function __construct(){}

	public function index(){
		if (isset($_REQUEST['id'])) {
			$estBat = new Item();
			$estBat = $estBat->listarEst($_REQUEST['id'], 'b');
			$conexion = new Conexion();
			$sql = "SELECT j.fechaHora, e.nombre, e1.Nombre, c.Campo, pr.Nombre as Nombrep, j.idJuego as id, p.idTemporada, d.Direccion
				FROM juegos j 
				INNER JOIN partidas p 	ON j.idJuego = p.idJuego AND p.Visitante = 1 
				INNER JOIN partidas p1 	ON j.idJuego = p1.idJuego AND p1.Visitante = 0 
				INNER JOIN equipos e 	ON e.idEquipo = p.idEquipo
				INNER JOIN equipos e1 	ON e1.idEquipo = p1.idEquipo
				INNER JOIN campos c 	ON c.idCampo = j.idCampo
				INNER JOIN anotadores a ON a.idAnotador = j.idAnotador
				INNER JOIN personas pr ON pr.CI = a.CI
				INNER JOIN direcciones d ON d.idDireccion = c.idDireccion
				where j.idJuego = ?";

			$this->equipo = $conexion->obtener($sql, array($_REQUEST['id']));
			require_once 'Vista/includes/head.php';
			require_once 'Vista/includes/headerCliente.php';
			require_once 'Controlador/Table.php';
			require_once 'Vista/InfoPartido.php';
			require_once 'Vista/includes/footer.php';
		}else {
			header('location:c?listaPartidos');
		}



		
	}
}