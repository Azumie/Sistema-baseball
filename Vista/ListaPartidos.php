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
					<form class="form-inline row mb-3" method="post" action="?c=ListaPartidos">
						
						<label for="temporada" class="col-2 aling-self-center">Temporada</label>
						<select class="form-control col-3" id="temporada" name="Temporada">
							<?php    
	                           $sql_leer = "select idTemporada, AnioInicio from temporadas";
	                           $resul = $conexion->consultar($sql_leer, array(''));
	                           foreach ($resul as $campo) {
	                              echo '<option value="'.$campo->idTemporada.'">'.$campo->AnioInicio.'</option>';
                           		}
                         	?>
						</select>
						<label for="Categoria" class="col-auto">Categoria</label>
						<select name="Categoria" id="categoria" class="form-control col-3 mr-4">
							<?php 
                           $sql = 'SELECT * FROM categorias';
                           $categorias = $conexion ->consultar($sql, array(''));
                           foreach ($categorias as $categoria) {
                                 echo "<option value='$categoria->idCategoria' selected >$categoria->Categoria</option>";
                           }
                        ?>
						</select>
						<button class="btn b1 b1-primary col-md-1 ">Buscar</button>
					</form>
					<table class="table table-bordered table-sm table-hover table-responsive-sm">
						<?php
							$table = new Table(array('Fecha','Local','CL','Visitante','CV','Anotador','Campo'));
							$table->createTable();
						?>
						<tbody>
							 <?php
							foreach ($partidos as $key => $value):?>
								<tr>
								<td><a href="?c=InfoPartido<?php echo "&id=$value->id"?> "><?php echo "$value->fechaHora"; ?></a></td>
								<td><?php echo "$value->nombre"; ?></td>
								<td><?php echo "$value->Nombre"; ?></td>
								<td><?php echo "$value->Campo"; ?></td>
								<td><?php echo "$value->id"; ?></td>
								<td><?php echo "$value->Nombrep"; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
