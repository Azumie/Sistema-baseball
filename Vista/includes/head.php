<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 ">
		<title><?php 
				$nombre = '';
				if (isset($_GET['nombre'])) {
					$nombre = $_GET['nombre'];
					
				}else {
					$nombre = 'Inicio';
				}
				echo $nombre;
		 ?>
		</title>
		<!-- <script src="https://kit.fontawesome.com/09c3778c44.js" crossorigin="anonymous"></script> -->
		 <link rel="stylesheet" href="../css/css/all.min.css"> <!--FONTELLO-->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/fontello.css">
		<link rel="stylesheet" href="../css/estilos.css">
	</head>
	<div class="modal fade" id="Alerta" tabindex="-1" role="dialog" aria-labelledby="fm-modal-grid" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<div class="row justify-content-center text-center">
									<div class="col-auto">
										<i class="fas fa-exclamation-triangle fa-4x text-warning" style="position: relative; top: .3em; text-shadow: 1px 3px 1px #000"></i>
									</div>
									<div class="col-6">
										<h4 class="modal-title text-danger" style="text-shadow: 1px 1px 1px #000" id="">Función no diponible intente más tarde</h4>
									</div>
									<div class="col-auto">
										<i class="fas fa-exclamation-triangle fa-4x text-warning" style="position: relative; top: .3em; text-shadow: 1px 3px 1px #000"></i>
									</div>
									<div class="col-5 mt-4">
										<button class="btn btn-block b1 b1-danger" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	<!-- fa-spin HACE GIRAR LOS ÍCONOS -->