<?php 

class LoginControlador{
	
	function __construct(){}

	public function index(){
		require_once 'Vista/includes/head.php';
		require_once 'Vista/Login.php';
		require_once 'Vista/includes/footer.php';
	}

	public function ingresar(){
		if (!empty($_POST['Usuario'])) {
			$User = $_POST['Usuario'];
			$Password = $_POST['Contraseña'];
			if ($User == "Admin" && $Password == "123456") {
				header('location:?c=Temporada');
			} 
			else echo "<div style='background-color: #FF9185' class='mt-2 mb-2'> Datos Incorrectos</div>";
		}
	}
}