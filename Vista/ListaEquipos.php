<?php require_once 'includes/headerCliente.php';
require_once '../Controlador/Table.php'?>
<div class="container my-3">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="row justify-content-between">
						<div class="col-auto mt-1"><h4>Listado de Equipos</h4></div>
						<div class="col-auto"><i class="icon-equipo h3 text-info"></i> <i class="icon-emoji-fine h3 text-info"></i></div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-inline row mb-3 justify-content-center">
						<label for="temporada" class="col-auto aling-self-center">Temporada</label>
						<select class="form-control col-3" id="temporada">
							<option>2020</option>
							<option>2019</option>
						</select>
						<label for="categoria" class="col-auto">Categoria</label>
						<select name="categoria" id="categoria" class="form-control col-3 mr-4">
							<option>Juvenil</option>
							<option>Junior</option>
						</select>
						<button class="btn b1 b1-primary col-md-1"><i class="fas fa-search fa-lg" style="text-shadow: 1px 1px 1px #000"></i></button>
					</div>
					<table class="table table-bordered table-sm table-hover table-responsive-sm">
						<?php
							$table = new Table(array('Equipo','J','G','P','E','CA','CP','SLG','AVE'));
							$table->createTable();
							$table->addItem(array ('Cebmo',14,7,7,0,30,15,.120,.800),'InfoEquipos.php');
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>