<?php require_once 'includes/headerCliente.php';
require_once '../Controlador/Table.php'?>
<div class="container my-3">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="row justify-content-between">
						<div class="col-auto mt-1"><h4>Listado de Partidos</h4></div>
						<div class="col-auto"><i class="icon-baseball h3 text-info"></i> <i class="icon-emoji-fine h3 text-info"></i></div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-inline row mb-3">
						
						<label for="temporada" class="col-2 aling-self-center">Temporada</label>
						<select class="form-control col-3" id="temporada">
							<option>2020</option>
							<option>2019</option>
						</select>
						<label for="categoria" class="col-auto">Categoria</label>
						<select name="categoria" id="categoria" class="form-control col-3 mr-4">
							<option>Juvenil</option>
							<option>Junior</option>
						</select>
						<button class="btn b1 b1-primary col-md-1 ">Buscar</button>
					</div>
					<table class="table table-bordered table-sm table-hover table-responsive-sm">
						<?php
							$table = new Table(array('Fecha','Local','CL','Visitante','CV','Anotador','Campo'));
							$table->createTable();
							$table->addItem(array ('05-09-2020','Cebmo', 8,'AJS',7,'Pablo Escalona','Chino Canonico'), 'InfoPartido.php');
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