<?php require_once 'includes/headerCliente.php';
require_once '../Controlador/Table.php'?>
<div class="container my-3">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="row justify-content-between">
						<div class="col-auto mt-1"><h4><i class="fas fa-list-ol mr-1"></i>Listado de Jugadores</h4></div>
						<div class="col-auto"><i class="icon-play h3 text-info"></i> <i class="icon-emoji-fine h3 text-info"></i></div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-inline justify-content-center row mb-3">
						<label for="temporada" class="col-auto">Equipo:</label>
						<select class="form-control col-3" id="temporada">
							<option>Cebmo</option>
							<option>AJS</option>
						</select>
						<label for="categoria" class="col-auto">Categoria</label>
						<select name="categoria" id="categoria" class="form-control col-3 mr-4">
							<option>Juvenil</option>
							<option>Junior</option>
						</select>
						<button class="btn b1 b1-primary col-md-1 "><i class="fas fa-search fa-lg" style="text-shadow: 1px 1px 1px #000"></i></button>
					</div>
					<div class="row">
						<div class="col-2"><img src="../img/Equipo.png"><div class="row"><img src="../img/Equipo1.png" class="ml-2"></div></div>
						<div class="col-10"><br>							
							<table class="table table-bordered table-sm table-hover table-responsive-sm">
								<?php
									$table = new Table(array('CI','Nombre','Apellido','VB','HC','HR','CA','CI','K','SLG','AVE'));
									$table->createTable();
									$table->addItem(array ('27554885',	'Antonella Alessandra Lourdes', 'Mujica Navarro',12,10,11,3,3,0,.150,.800), 'Jugador.php');
								?>
							</table>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>