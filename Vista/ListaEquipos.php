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
					<h6 class="text-info text-center"><em>Para filtrar la información por Categoría y Temporada</em></h6>
					<form class="form-inline row mb-3 justify-content-center" method="POST" action="?c=ListaEquipos">
						<label for="Temporada" class="col-auto aling-self-center">Temporada</label>
						<select class="form-control col-3" id="Temporada">
							<?php    
	                           $sql_leer = "select idTemporada, AnioInicio from temporadas";
	                           $resul = $conexion->consultar($sql_leer, array(''));
	                           foreach ($resul as $campo) {
	                              echo '<option value="'.$campo->idTemporada.'">'.$campo->AnioInicio.'</option>';
                           		}
                         	?>
						</select>
						<label for="Categoria" class="col-auto">Categoría</label>
						<select name="Categoria" id="categoria" class="form-control col-3 mr-4">
							<?php 
                           $sql = 'SELECT * FROM categorias';
                           $Categorias = $conexion ->consultar($sql, array(''));
                           foreach ($Categorias as $categoria) {
                                 echo "<option value='$categoria->idCategoria' selected >$categoria->Categoria</option>";
                           }
                        ?>
						</select>
						<button class="btn b1 b1-primary col-md-1"><i class="fas fa-search fa-lg" style="text-shadow: 1px 1px 1px #000"></i></button>
					</form>
						<h6 class="text-info text-right col-auto"><em>¡Si quiere información más precisa sobre <br> algún equipo, solo basta con que presione su nombre! <br>O posicione el ratón encima del dato que desea conocer</em></h6>
					
					<table class="table table-bordered table-sm table-hover table-responsive-sm">
						<?php
							$table = new Table(array('Equipo','J','G','P','E','CA','CP','SLG','AVE'));
							$table->createTable();
							// $table->addItem(array ('Cebmo',14,7,7,0,30,15,.120,.800),'?c=InfoEquipo');
						?>
						<tbody>
							<?php
							if (isset($_REQUEST['Categoria'], $_REQUEST['Temporada'])) {
								
							}else{
							foreach ($partidos as $key => $value):?>
								<tr>
								<td><a href="?c=InfoPartido<?php echo "&id=$value->id"?> "><?php echo "$value->fechaHora"; ?></a></td>
								<td><a href="?c=InfoEquipo<?php echo "&id=$value->idEquipo&Categoria=1&Temporada=1"?>"><?php echo "$value->nombre"; ?></a></td>
								<td><?php echo "$value->id"; ?></td>
								<td><a href="?c=InfoEquipo<?php echo "&id=$value->Visitante&Categoria=1&Temporada=1"?>"><?php echo "$value->Nombre"; ?></a></td>
								<td><?php echo "$value->id"; ?></td>
								<td><?php echo "$value->Campo"; ?></td>
								<td>Matequitos</td>
								<td>100</td>
								<td>100</td>
								</tr>
							<?php endforeach; ?>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>